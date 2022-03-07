@extends('adminlte::page')
@section('title', 'Adim - Posts')
@section('content_header')
<h1>
    Post
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create-post">
    <i class="fas fa-plus"></i> Crear
    </button>
</h1>
@stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Posts</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="posts" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category -> name }}</td>
                            <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-view-content-post-{{$post->id}}">
                            <i class="far fa-eye"></i>    
                            </button>
                            </td>
                            <td>{{ $post->autor }}</td>
                            <td> <img src="{{asset($post->featured)}}" alt="{{ $post->featured }}" class="img-fluid img-thumbnail" width="100px"></td>
                            <td>
                            <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-post-{{$post->id}}">
                                        <i class="fas fa-pen"></i> Editar
                                        </button>
                                    </div>
                                    <div class="col">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-post-{{$post->id}}">
                                            <i class="fas fa-times"></i> Eliminar
                                            </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- modal - UPDATE, delete y view post -->
                        @include('admin.posts.modal-update-post')
                        @include('admin.posts.modal-delete-post')
                        @include('admin.posts.modal-view-content')
                        <!-- /.modal -->
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" tabindex="-1" id="modal-create-post">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" class="form-control" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="" selected>Elegir categoria..</option>
                            @foreach ($categories as $category)
                            <option value="{{$category -> id}}">{{$category -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" name="autor" class="form-control" id="autor" required>
                    </div>
                    <div class="form-group">
                        <label for="featured">Imagen principal</label>
                        <input type="file" name="featured" class="form-control" id="featured" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Crear</button>
                </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop
@section('js')
<script>$(document).ready(function() { $('#posts').DataTable(
{
        language: {
            url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
        }
    } 
); } );</script>
@if(session('menssage'))
<script>swal.fire('Éxito!',"{{ session ('menssage') }}",'success')</script>
@endif
@stop