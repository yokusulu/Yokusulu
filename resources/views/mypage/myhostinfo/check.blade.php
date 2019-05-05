@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<form action="/mypage/myhostinfo/edit/done" method="post">
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
							<th>電話番号</th>
							<td>{{ $input_data["phone"] }}</td>
                        </tr>
                        <tr>
							<th>郵便番号</th>
							<td>{{ $input_data["zip"] }}</td>
                        </tr>
                        <tr>
							<th>都道府県</th>
							<td>{{ $input_data["prefecture"] }}</td>
                        </tr>
                        <tr>
							<th>市区町村</th>
							<td>{{ $input_data["city"] }}</td>
                        </tr>
                        <tr>
							<th>字</th>
							<td>{{ $input_data["ward"] }}</td>
                        </tr>
                        <tr>
							<th>番地・建物名</th>
							<td>{{ $input_data["address"] }}</td>
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
				<input type="hidden" name="phone" value="{{ $input_data["phone"] }}">
				<input type="hidden" name="zip" value="{{ $input_data["zip"] }}">
				<input type="hidden" name="prefecture" value="{{ $input_data["prefecture"] }}">
				<input type="hidden" name="city" value="{{ $input_data["city"] }}">
				<input type="hidden" name="ward" value="{{ $input_data["ward"] }}">
				<input type="hidden" name="address" value="{{ $input_data["address"] }}">
				<input type="hidden" name="password" value="{{ $input_data["password_new"] }}">
				<div class="myinfo_edit_btn_box">
					<input type="submit" value="登録する">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
