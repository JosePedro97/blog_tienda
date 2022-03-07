@extends('layouts.layaout')
@section('title','POSTS')
@section('content')
<section class="container-fluid content">
    <div class="row justify-content-center">
        <!--CATEGORIAS SELECT-->
        <div class="col-10 col-md-12">
            <nav class="text-center my-5">
                <a href="/" class="mx-3 pb-3 link-category d-block d-md-inline selected-category {{ isset($categoryIdSelected)? '': 'selected-category' }}">Todas</a>
                @foreach ($categories as $category)
                <a href="{{route('posts.category', $category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category':'' }}">{{$category->name}}</a>
                @endforeach
            </nav>
        </div>
        <!--POSTS-->
        <div class="row justify-content-center">
            <div class="col-10">
                
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                        <a href="{{route('post', $post->id)}}">
                           <center><img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->name}}"></center>
                        </a>   
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: {{$post->category->name}}</small>
                                <h5 class="card-title my-2">{{$post->title}}</h5>
                                <div class="d-card-text module line-clamp">
                                    {{$post->content}}
                                </div>
                                <a href="{{route('post', $post->id)}}" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">{{$post->autor}}</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">{{$post->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                {{ $posts->links()}}
            </div>
        </div>
    </div>


</section>
@endsection