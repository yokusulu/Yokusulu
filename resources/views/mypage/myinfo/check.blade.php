@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/myinfo.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<form action="/mypage/myinfo/edit/done" method="post">
	{{ csrf_field() }}
<div class="user_info_table">
	<table>
		<tr>
			<th>下記の内容で変更致します</th>
		</tr>
		<tr>
			<th><p>氏名</p></th>
			<td>{{ $input_data["name"] }}</td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td>{{ $input_data["email"] }}</td>
		</tr>
		<tr>
			<th>パスワード</th>
			<td>{{ $input_data["password_new"] }}</td>
		</tr>
	</table>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
</div>
<input type="hidden" name="name" value="{{ $input_data["name"] }}">
<input type="hidden" name="email" value="{{ $input_data["email"] }}">
<input type="hidden" name="password" value="{{ $input_data["password_new"] }}">
<div class="myinfo_edit_btn_box">
<input type="submit" value="登録完了">
</div>
</form>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
