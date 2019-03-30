@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="content-box">
                        <div class="contents-list">
                            <a class="square_btn" href="/mypage/myinfo">会員情報</a>
                        </div>
                        <div class="contents-list">
                            <a class="square_btn" href="/mypage/myhouse">貸出</a>
                        </div>
                        <div class="contents-list">
                            <a class="square_btn" href="">利用状況</a>
                        </div>
                        <div class="contents-list">
                            <a class="square_btn" href="/mypage/behost">ホストになる</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
