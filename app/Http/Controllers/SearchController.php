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
        //リクエストを取得
        $prefecture = $request->prefecture;
        $price = $request->price;

        //入力値によってデータを取得
        if (isset($request->prefecture)) {
            $items = DB::table('houses')
            ->where('prefecture', 'like', '%'.$prefecture . '%')
            ->get();
        } elseif (isset($request->price)) {
            $items = DB::table('houses')
            ->where('price', '<', $price)
            ->get();
        } else {
            $items = DB::table('houses')->get();
        }

        return view('search.index', ['items' => $items]);
    }
}
