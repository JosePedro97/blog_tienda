<div class="modal fade" tabindex="-1" id="modal-update-post-{{$post->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$post -> title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                        @foreach ($categories as $category)
                                <option value="{{$category->id}}" <?= $category->id == $post->category->id ? 'selected': '' ?> > {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10" required >{{$post -> content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" name="autor" class="form-control" id="autor" value="{{$post -> autor}}" required>
                    </div>
                    <div class="form-group">
                        <label for="featured">Imagen principal</label>
                        <input type="file" name="featured" class="form-control" id="featured">
                        <small>imagen actual</small> <br>
                        <img src="{{asset($post->featured)}}" width="80px" class="img-fluid img-thumbnail" alt="{{$post->featured}}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-pen"></i> Editar</button>
                </div>
            </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
