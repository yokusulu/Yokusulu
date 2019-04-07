<?php

namespace App\Http\Controllers\Mypage;

use App\User;
use App\Host_user;
use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // マイページ TOP画面
    public function index () {
        // ログイン情報を取得する。
        $login_info = Auth::user();
        $host_info = User::find($login_info->id)->host_user;
        return view("mypage.index", compact('login_info','host_info'));
    }
}
