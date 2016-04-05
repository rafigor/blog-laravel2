@extends('template')

@section('title')
    Blog Laravel
@stop

@section('content')
    @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <b>Tags: </b>
            <ul>
                @foreach($post->tags as $tag)
                    <li>{{$tag->name}}</li>
                @endforeach
            </ul>
            <h3>Comments</h3>
            @foreach($post->comments as $comment)
                <b>Name: </b>{{$comment->name}}<br/>
                <b>Comment: </b>{{$comment->comment}}
            @endforeach
            <hr>
        </div>
    @endforeach
@stop