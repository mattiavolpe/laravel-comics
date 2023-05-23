@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-4" id="comics_showcase">
        @foreach($comics as $comic)
        <div class="col">
            <div class="card border-0 rounded-0 bg-transparent text-white text-uppercase">
                <img src="{{ $comic['thumb'] }}" class="card-img-top"></img>
                <h6 class="mb-0 fw-normal py-3">{{ $comic['series'] }}</h6>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section("pageTitle")

@endsection
