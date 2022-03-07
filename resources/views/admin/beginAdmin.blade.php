@extends('adminlte::page')
@section('title', 'Adim - Blog')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <H4>Administración de blog</H4>
<br>
                <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categorías</h5>
        <p class="card-text">Número de categorías registradas</p>
        <h3>{{$contadorCats}}</h3>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Posts</h5>
        <p class="card-text">Número de Posts registrados</p>
        <h3>{{$contadorPosts}}</h3>
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
