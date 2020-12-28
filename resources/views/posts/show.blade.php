@extends('layouts.app')

@section('content')
    <h1>Post {{$post->id}}</h1>
    <div class="card m-3 p-3">
        <div class="row">
            
            <div class="col-md-3">
                <img style="width:100%;height:200px;" src="/storage/cover_image/{{$post->cover_image}}" alt="Post Image">
            </div>

            <div class="col-md-9">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <small>Written on <b>{{$post->created_at}}</b> by <b>{{$post->user->name}}</b></small>
            </div>

        </div>
        <div class="row">

            <div class="col-md-12">
                <!--nif user logged id -->
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
        
        </div>

    </div>
@endsection