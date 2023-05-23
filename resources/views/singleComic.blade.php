@extends('layouts/app')

@section("pageTitle")
Single Comic
@endsection

@section('content')
  <div id="separator" class="bg-primary py-5">
    <div class="container position-relative">
      <img width="200" src="{{ $db['comics'][0]['thumb'] }}" alt="" class="position-absolute start-0 bottom-50">
    </div>
  </div>
  @include("partials.comic_details_top")
  @include("partials.comic_details_bottom")
@endsection
