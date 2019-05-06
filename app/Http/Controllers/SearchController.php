<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //入力情報を格納
        $param = [
            'prefecture' => $request->prefecture,
        ];

        $prefecture = $request->prefecture;

        //入力値によってデータを取得
        if (isset($request->prefecture)) {
            // $items = DB::select('select * from houses where prefecture = (:prefecture)', $param);
            $items = DB::table('houses')
            ->where('prefecture','like','%'.$prefecture . '%')
            ->orWhere('price','like','%'.$price.'%')
            ->get();
        } else{
            $items = DB::select('select * from houses');
        }

        return view('search.index', ['items' => $items]);
    }
}
