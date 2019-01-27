@extends('layouts.app')

@section('content')
    <h1 style="color: #fff; padding: 10px;" class="text-center bg-dark">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <br><br>
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        
                        <small>Written On: {{$post->created_at}} by {{$post->user->name}}</small>
                        <hr>
                    </div>
                </div>
                <br><br>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection
