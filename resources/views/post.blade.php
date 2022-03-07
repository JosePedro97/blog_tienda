@extends('layouts.layaout')
@section('title','POST')
@section('content')
<!-- Contenido -->
<section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="/" class="mx-3 pb-3 link-category d-block d-md-inline {{ isset($categoryIdSelected)? '': 'selected-category' }}" >Todas</a>
                    
                    @foreach ($categories as $category)
                        <a href="{{route('posts.category', $category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category':'' }}" >{{$category->name}}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    <!-- Contenido -->
    <section class="container-fluid content py-5">
        <div class="row">
            <!-- Post -->
            <div class="col-12 col-md-7">
                <h1 style="text-align: center;">{{$post->title}}</h1>
                <hr>
                <img src="{{asset($post->featured)}}" alt="{{$post->title}}" class="img-fluid img_post">

                <p class="text-left mt-3 post-txt">
                    <span>Autor: {{$post->autor}}</span>
                    <br>
                    <span class="float-right">Publicado: {{$post->created_at->diffForHumans()}}</span>
                </p>
                <p style="text-align: justify;">
                    {{$post->content}}
                </p>
                <p class="text-left post-txt"><i>Categoría: {{$post->category->name}}</i></p>
            </div>

            <!-- Entradas recientes -->
            <div class="col-md-3 offset-md-1">
                <p>Últimas entradas</p>

                @foreach ($latestPosts as $post)
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="{{route('post', $post->id)}}">
                            <img src="{{asset($post->featured)}}" class="img-fluid rounded" width="100" alt="{{$post->title}}">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="{{route('post', $post->id)}}" class="link-post">{{$post->title}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection