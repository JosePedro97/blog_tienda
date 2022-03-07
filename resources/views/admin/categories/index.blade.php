@extends('adminlte::page')
@section('title', 'Admin - Categorías')
@section('content_header')
<h1>
    Categorías
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-create-category">
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
                    <h3 class="card-title">Listado de categorías</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="categories" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-category-{{$category->id}}">
                                        <i class="fas fa-pen"></i> Editar
                                        </button>
                                    </div>
                                    <div class="col"> 
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-category-{{$category->id}}">
                                        <i class="fas fa-times"></i> Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- modal - UPDATE CATEGORY -->
                        @include('admin.categories.modal-update-category')
                        @include('admin.categories.modal-delete-category')
                        <!-- /.modal -->
                        @endforeach 
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
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
<div class="modal fade" tabindex="-1" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.categories.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Categoría</label>
                        <input type="text" name="name" class="form-control" id="category" required>
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
<script>$(document).ready(function() { $('#categories').DataTable(
    {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
        }
    } 
); } );</script>
@if(session('menssage'))
<script>swal.fire('Éxito!',"{{ session ('menssage') }}",'success')</script>
@endif
@if(session('menssage2'))
<script>swal.fire('Atención!',"{{ session ('menssage2') }}",'warning')</script>
@endif
@stop
