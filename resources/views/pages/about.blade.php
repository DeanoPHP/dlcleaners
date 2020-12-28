@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <img src="storage/cover_image/{{ $image }}" width="100%" height="200px" alt="">
    </div>
    <h1>{{ $title }}</h1>
    <p>{{ $sub }}</p>
@endsection