@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="user_info_table">
                    <table>
                        <tr>
                            <th>ご利用者登録情報編集</th>
                        </tr>
                        <tr>
                            <th>氏名</th>
                            <td><p>{{ $login_info->name }}</p></td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td><p>{{ $login_info->email }}</p></td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td><p>{{ $host_info->phone }}</p></td>
                        </tr>
                        <tr>
                            <th>郵便番号</th>
                            <td><p>{{ $host_info->zip }}</p></td>
                        </tr>
                        <tr>
                            <th>都道府県</th>
                            <td><p>{{ $host_info->prefecture }}</p></td>
                        </tr>
                        <tr>
                            <th>市区町村</th>
                            <td><p>{{ $host_info->city }}</p></td>
                        </tr>
                        <tr>
                            <th>字</th>
                            <td><p>{{ $host_info->ward }}</p></td>
                        </tr>
                        <tr>
                            <th>番地・建物名</th>
                            <td><p>{{ $host_info->address }}</p></td>
                        </tr>
                    </table>
                    <div class="myinfo_edit_btn_box">
                        <button><a href="/mypage/myhostinfo/edit">編集画面へ</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
