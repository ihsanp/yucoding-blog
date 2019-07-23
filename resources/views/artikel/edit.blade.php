<div class="modal fade" id="modal-editartikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route("edit_artikel")}}">
        
        {{-- // tambahkan ID --}}
        <input type="hidden" name="id" id="edit-id">

          @csrf
          <div class="form-group">
            <label>Judul</label>
            <input id="edit-judul" type="text" class="form-control" name="judul" placeholder="Judul Artikel">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <input id="edit-kategori" type="text" class="form-control" name="kategori" placeholder="Kategori">
          </div>
          <div class="form-group">
                <label>Image</label>
                <input id="edit-image" class="form-control" type="file" name="image">
            </div>
            <div class="form-group">
                <label>Video</label>
                <input id="edit-video" class="form-control" type="text" name="video" placeholder="Video Link">
            </div>
            <div class="form-group">
                <label>Isi Konten</label>
                <textarea id="edit-isi" name="isi" class="form-control">
                </textarea>
            </div>
            {{-- Form --}}
            <button type="submit" class="btn btn-primary">Edit Artikel</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>