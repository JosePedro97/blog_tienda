<div class="modal fade" tabindex="-1"  id="modal-delete-post-{{$post->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿Deseas eliminar este Post?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Si lo eliminas no podrás recuperar este registro.</p>
      </div>
      <div class="modal-footer">
      <form action="{{route('admin.posts.delete', $post->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> Eliminar</button>
      </form>
      </div>
    </div>
  </div>
</div>