
<!-- Modal -->
<div class="modal fade" id="confirmationDeleteModal-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/resident/{{$item->id}}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span>Apakah Anda yakin ingin menghapus?</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
              <button type="submit" class="btn btn-primary">Ya, hapus</button>
            </div>
          </div>
    </form>
  </div>
</div>
