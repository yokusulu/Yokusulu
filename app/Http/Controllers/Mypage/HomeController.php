<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;

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
        return view("mypage.index", compact('title'));
    }
}
