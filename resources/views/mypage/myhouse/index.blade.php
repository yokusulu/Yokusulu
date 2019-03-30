@extends('layout.common')

@section('title', 'samplepage')
@section('description', '説明文')
@section('pageCss')
<link href="/css/mypage.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')
{{-- 家を出力。登録していないとタグを出力しない。 --}}
@if (!$houses == null)
	@foreach ($houses as $house)
		<div>
			<p>{{ $house->name}}</p>
		</div>
	@endforeach
@else
<div>
	<p>まだ家を登録していないよ！</p>
</div>
@endif

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
