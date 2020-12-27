@extends('layouts.app')

@section('content')
    <h1>Edit Form</h1>
    <form action="{{ action('App\Http\Controllers\PostsController@update',[$post->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input class="form-control m-3 p-3" type="text" name="title" value="{{$post->title}}">
        <textarea class="form-control m-3 p-3" name="body" id="body" cols="30" rows="10">{{$post->body}}</textarea>
        {{-- <div class="form-group">
            <input type="file" name="cover_image">
        </div> --}}
        <input class="btn btn-success" type="submit" name="submit" value="Edit Post">
    </form>

@endsection