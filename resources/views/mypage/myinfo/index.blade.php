@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/myinfo.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<div class="user_info_table">
	<table>
		<tr>
			<th>ご利用者登録情報編集</th>
		</tr>
		<tr>
			<th><p>氏名</p></th>
			<td><p>{{ $login_info["name"] }}</p></td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td><p>{{ $login_info["email"] }}</p></td>
		</tr>
	</table>
</div>

<div class="myinfo_edit_btn_box">
	<a href="/mypage/myinfo/edit" class="myinfo_edit_btn">修正する</a>
</div>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
