@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<form action="/mypage/myinfo/edit/check" method="post">
				{{ csrf_field() }}
				<div class="user_info_table">
					<table>
						<tr>
							<th>ご利用者登録情報編集</th>
						</tr>
						<tr>
							<th><p>氏名</p></th>
							<td><input type="text" name="name" value="{{ $login_info->name }}"></td>
						</tr>
						<tr>
							<th>メールアドレス</th>
							<td><input type="email" name="email" value="{{ $login_info->email }}"></td>
						</tr>
						<tr>
							<th>パスワード（旧）</th>
							<td><input type="password" name="password_old" value="{{ $login_info->password }}"></td>
						</tr>
						<tr>
							<th>パスワード（新）</th>
							<td><input type="password" name="password_new" value=""></td>
						</tr>
						<tr>
							<th>パスワード（確認）</th>
							<td><input type="password" name="password_new_confirmation" value=""></td>
						</tr>
					</table>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</div>
				<div class="myinfo_edit_btn_box">
					<input type="submit" value="確認画面へ">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
