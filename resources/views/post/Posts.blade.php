@extends('template')

@section('title')
    Blog Laravel
@stop

@section('posts')
    @foreach($posts as $id => $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post['Titulo'] }}</h2>
            <p class="blog-post-meta">{{ $post['DataHora'] }} por <a href="#">{{ $post['Autor'] }}</a></p>
            {!! $post['Conteudo'] !!}
        </div>
    @endforeach
@stop