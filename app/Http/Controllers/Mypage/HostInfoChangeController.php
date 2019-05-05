<?php

namespace App\Http\Controllers\Mypage;

// use Request;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use App\Host_user;
use App\House;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HostInfoChangeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	// ホスト会員情報 TOP画面
	public function index () {
        $login_info = Auth::user();
        $host_info  = User::find($login_info->id)->host_user;
		return view("mypage.myhostinfo.index", compact('login_info', 'host_info'));
	}

	// ホスト会員情報 編集画面
	public function edit () {
		$login_info = Auth::user();
		return view("mypage.myinfo.edit", compact('login_info'));
	}

	// ホスト会員情報 編集確認画面
	public function check (request $request) {
		$input_data = $request->all();
		// バリデーション確認
		$validator = $this->user_validate($input_data, true);
		// バリデーションエラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/myinfo/edit')->withErrors($validator)->withInput();
		}
		return view("mypage.myinfo.check", compact('input_data'));
	}

	// ホスト会員情報 編集登録完了画面
	public function done (request $request) {
		$input_data = $request->all();
		// バリデーション確認
		$validator = $this->user_validate($input_data);
		// バリデーションエラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/myinfo/edit')->withErrors($validator)->withInput();
		}
		// ユーザー情報を変更する。
		$target = User::find(Auth::user()->id);
		$target->fill([
			'name' => $input_data["name"],
			'email' => $input_data["email"],
			'password' => Hash::make($input_data["password"]),
		])->save();
		// 二重登録防止
		$request->session()->regenerateToken();
		return view("mypage.myinfo.done");
	}

	// ホスト会員情報 バリデーション
	public function user_validate ($inputdata, $first = null) {
		$checkdata = [
			'name' => 'required|max:50',
			'email' => 'required|email',
		];
		// 最初のバリデーションの場合
		if ($first) {
			$data = [
				'password_old' => [
				'required', Rule::in([$inputdata["password_old"]])],
				// ハッシュ化させたinputデータを入れる
				'password_new' => 'alpha_num|confirmed|min:8|max:16',
			];
			$checkdata = $checkdata + $data;
		}
		// 2回目(最終確認用)のバリデーションの場合
		else {
			$data = [
				'password' => 'alpha_num|min:8|max:16',
			];
			$checkdata = $checkdata + $data;
		}
		// バリデーションルール
		$validator = Validator::make($inputdata, $checkdata);
		return $validator;
	}
}