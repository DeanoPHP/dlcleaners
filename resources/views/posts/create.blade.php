@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ action('App\Http\Controllers\PostsController@store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="form-control m-3 p-3" type="text" name="title" placeholder="Post Title">
        <textarea class="form-control m-3 p-3" name="body" id="body" cols="30" rows="10" placeholder="Post Body"></textarea>
        <div class="form-group">
            <input type="file" name="cover_image">
        </div>
        <input class="btn btn-success" type="submit" name="submit" value="Create post">
    </form>
@endsection