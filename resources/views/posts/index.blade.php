@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card m-3 p-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%;height:300px;" src="storage/cover_image/{{$post->cover_image}}" alt="Post Image">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <p>{{$post->body}}</p>
                        <small>Written on <b>{{$post->created_at}}</b> by <b>{{$post->user->name}}</b></small>
                    </div>
                </div>
            </div>            
        @endforeach
        <?php echo $posts->render(); ?>
    @endif
@endsection

