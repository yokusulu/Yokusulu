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
                            <th><p>氏名</p></th>
                            <td><p>{{ $login_info->name }}</p></td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td><p>{{ $login_info->email }}</p></td>
                        </tr>
                    </table>
                    <div class="myinfo_edit_btn_box">
                        <button><a href="/mypage/myinfo/edit">編集画面へ</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
