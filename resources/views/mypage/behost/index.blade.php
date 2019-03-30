@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/myinfo.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
<form action="/mypage/behost/check" method="post">
	{{ csrf_field() }}
	<div class="behost_info_table">
		<table>
			<tr>
				<th>ホストになる</th>
			</tr>
			<tr>
				<th><p>電話番号</p></th>
				<td><input type="text" name="phone1" value="">-
					<input type="text" name="phone2" value="">-
					<input type="text" name="phone3" value=""></td>
			</tr>
			<tr>
				<th><p>郵便番号</p></th>
				<td>〒<input type="text" name="zip1" maxlength='3' value="">-
					  <input type="text" name="zip2" maxlength='4'value=""></td>
			</tr>
			<tr>
				<th><p>住所</p></th>
				<td><p><select name="prefecture">
						<option value="北海道">北海道</option>
						<option value="青森県">青森県</option>
						<option value="岩手県">岩手県</option>
						<option value="宮城県">宮城県</option>
						<option value="秋田県">秋田県</option>
						<option value="山形県">山形県</option>
						<option value="福島県">福島県</option>
						<option value="茨城県">茨城県</option>
						<option value="栃木県">栃木県</option>
						<option value="群馬県">群馬県</option>
						<option value="埼玉県">埼玉県</option>
						<option value="千葉県">千葉県</option>
						<option value="東京都">東京都</option>
						<option value="神奈川県">神奈川県</option>
						<option value="新潟県">新潟県</option>
						<option value="富山県">富山県</option>
						<option value="石川県">石川県</option>
						<option value="福井県">福井県</option>
						<option value="山梨県">山梨県</option>
						<option value="長野県">長野県</option>
						<option value="岐阜県">岐阜県</option>
						<option value="静岡県">静岡県</option>
						<option value="愛知県">愛知県</option>
						<option value="三重県">三重県</option>
						<option value="滋賀県">滋賀県</option>
						<option value="京都府">京都府</option>
						<option value="大阪府">大阪府</option>
						<option value="兵庫県">兵庫県</option>
						<option value="奈良県">奈良県</option>
						<option value="和歌山県">和歌山県</option>
						<option value="鳥取県">鳥取県</option>
						<option value="島根県">島根県</option>
						<option value="岡山県">岡山県</option>
						<option value="広島県">広島県</option>
						<option value="山口県">山口県</option>
						<option value="徳島県">徳島県</option>
						<option value="香川県">香川県</option>
						<option value="愛媛県">愛媛県</option>
						<option value="高知県">高知県</option>
						<option value="福岡県">福岡県</option>
						<option value="佐賀県">佐賀県</option>
						<option value="長崎県">長崎県</option>
						<option value="熊本県">熊本県</option>
						<option value="大分県">大分県</option>
						<option value="宮崎県">宮崎県</option>
						<option value="鹿児島県">鹿児島県</option>
						<option value="沖縄県">沖縄県</option>
						</select></p>
						<p><input type="text" name="city" maxlength='30' value="" placeholder="市区町村"></p>
						<p><input type="text" name="ward" maxlength='30' value="" placeholder="字"></p>
						<p><input type="text" name="address" maxlength='30' value="" placeholder="番地・建物名"></p></td>
			</tr>
		</table>
	</div>

	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach

	<div class="behost_create_box">
		<input type="submit" value="確認画面へ">
	</div>

</form>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
