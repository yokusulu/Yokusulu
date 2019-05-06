@extends('layouts.app')

@section('title', 'HOME')
@section('description', '空いたスペースを共有してWINWINな体験を。')
@section('pageCss')
<link href="/css/home.css" rel="stylesheet">
@endsection

@include('layouts.head')

@include('layouts.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('search.index') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">お探しの地域を入力してください</label>
                        <input type="text" class="form-control" placeholder="東京" name="prefecture">
                        <small class="form-text text-muted">都道府県を入力してください</small>
                    </div>
                    <div class="form-group">
                        <label for="">一泊の予算を入力してください</label>
                        <input type="text" class="form-control" placeholder="4,000" name="price">
                        <small class="form-text text-muted">金額は1,000円単位で入力してください</small>
                    </div>
                    <button type="submit" class="btn btn-primary">検索</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection

@section('pageJs')
<script src="/js/home.js"></script>
@endsection

@include('layouts.footer')
