@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/myinfo.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<form action="/mypage/behost/check/done" method="post">
	{{ csrf_field() }}
	<div class="user_info_table">
		<table>
			<tr>
				<th>下記の内容で登録致します</th>
			</tr>
			<tr>
				<th>電話番号</th>
				<td>{{ $input["phone1"] }}-{{ $input["phone2"] }}-{{ $input["phone3"] }}</td>
			</tr>
			<tr>
				<th>郵便番号</th>
				<td>〒{{ $input["zip1"] }}-{{ $input["zip2"] }}</td>
			</tr>
			<tr>
				<th>住所</th>
				<td><p>{{ $input["prefecture"] }}</p>
					<p>{{ $input["city"] }}</p>
					<p>{{ $input["ward"] }}{{ $input["address"] }}</p></td>
			</tr>
		</table>
	</div>

	<input type="hidden" name="phone1"   value="{{ $input["phone1"] }}">
	<input type="hidden" name="phone2"   value="{{ $input["phone2"] }}">
	<input type="hidden" name="phone3"   value="{{ $input["phone3"] }}">
	<input type="hidden" name="zip1"     value="{{ $input["zip1"] }}">
	<input type="hidden" name="zip2"     value="{{ $input["zip2"] }}">
	<input type="hidden" name="prefecture" value="{{ $input["prefecture"] }}">
	<input type="hidden" name="city"     value="{{ $input["city"] }}">
	<input type="hidden" name="ward"     value="{{ $input["ward"] }}">
	<input type="hidden" name="address" value="{{ $input["address"] }}">

	<div class="myinfo_edit_btn_box">
		<input type="submit" value="登録完了">
	</div>

</form>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
