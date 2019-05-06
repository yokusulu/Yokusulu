@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($items as $item)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
            <div class="card">
                <img class="card-img-top" src="https://tools.arashichang.com/300x200/cccccc/ffffff" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->name }}</h4>
                    <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                    </p>
                    <a href="#!" class="btn btn-primary">詳細</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
