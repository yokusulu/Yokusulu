@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="content-box">
                        <div class="contents-list">
                            {{-- @if (empty($host_info)) --}}
                                <a class="square_btn" href="/mypage/myinfo">会員情報</a>
                            {{-- @else --}}
                                {{-- <a class="square_btn" href="/mypage/myhostinfo">会員情報</a> --}}
                            {{-- @endif --}}
                        </div>
                        <div class="contents-list">
                            <a class="square_btn" href="/mypage/myhouse">貸出</a>
                        </div>
                        <div class="contents-list">
                            <a class="square_btn" href="">利用状況</a>
                        </div>
                        <div class="contents-list">
                             @if (empty($host_info))
                                <a class="square_btn" href="/mypage/behost">ホストになる</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
