<?php

namespace App\Http\Controllers\Mypage;

// use Request;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use App\Host_user;
use App\House;

class BeHostController extends Controller {


	// ホストになる TOP画面
	public function index () {
		//authからデータ取れるまでは仮で配列に値を当て込んておく。
		$login_info["name"] = "a";
		$login_info["email"] = "abc@gmail.com";
		return view("mypage.behost.index", compact('login_info'));
	}

	// ホストになる 確認画面
	public function check (request $request) {
		// 入力データを取得する。
		$input = $request->all();
		// 入力値確認
		$validator = $this->behost_validate($input);
		// エラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/behost')->withErrors($validator)->withInput();
		}
		// エラーがなければ、データ挿入用にデータを整形する
		// $input["phone"] = $input["phone1"].$input["phone2"].$input["phone3"];
		// $input["zip"] = $input["zip1"].$input["zip2"];
			return view("mypage.behost.check", compact('input'));
	}

	// ホストになる 確認画面
	public function done (request $request) {
		// 入力データを取得する。
		$input = $request->all();
		// 入力値確認(hidden値を上書かれたときのため)
		$validator = $this->behost_validate($input);
		// エラーだった場合
		if ($validator->fails()) {
			return redirect('mypage/behost')->withErrors($validator)->withInput();
		}
		// エラーがなければ、データ挿入用にデータを整形する
		$input["phone"]    = $input["phone1"].$input["phone2"].$input["phone3"];
		$input["zip"]      = $input["zip1"].$input["zip2"];
		$input["login_id"] = 1; // 仮で数字をいれておく。
		// データを挿入する。
		Host_user::insert_host_user($input);

		return view("mypage.behost.done", compact('input'));
	}

	// ホストになる バリデーション
	public function behost_validate ($input) {
		// バリデーションルール
		$validator = Validator::make($input, [
		'phone1'      => 'required|regex:/[0-9]{1,3}+$/',
		'phone2'      => 'required|regex:/[0-9]{1,4}+$/',
		'phone3'      => 'required|regex:/[0-9]{1,4}+$/',
		'zip1'        => 'required|regex:/[0-9]{3}+$/',
		'zip2'        => 'required|regex:/[0-9]{4}+$/',
		'prefecture'  => 'required',
		'city'        => 'required|between:1,30',
		'ward'        => 'required|between:1,30',
		'address'     => 'required|between:1,30',
	]);
		return $validator;
	}

}