@extends('layouts.app')

@section('content')
    <h1>Post {{$post->id}}</h1>
    <img style="width:40%;height:300px;" src="/storage/cover_image/{{$post->cover_image}}" alt="Post Image">
    <div class="card m-3 p-3">
            <h3>{{$post->title}}</h3>
            <p>{{$post->body}}</p>
            <small>Written on <b>{{$post->created_at}}</b> by <b>{{$post->user->name}}</b></small>
            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user->id)
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a class="btn btn-success" href="/posts/{{$post->id}}/edit">Edit Post</a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ action('App\Http\Controllers\PostsController@destroy',[$post->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <input class="btn btn-danger float-right" type="submit" name="submit" value="Delete Post">
                            </form>
                        </div>
                    </div>
                @endif
            @endif
        </div>            
@endsection