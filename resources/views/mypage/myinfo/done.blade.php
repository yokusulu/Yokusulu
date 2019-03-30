@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/myinfo.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')

<div class="finish">
	<p>登録変更完了！</p>
</div>

<div class="myinfo_edit_btn_box">
	<a href="/mypage" class="myinfo_edit_btn">会員画面TOPへ</a>
</div>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
