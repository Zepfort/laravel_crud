
<!-- Modal -->
<div class="modal fade" id="confirmationDelete-{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/resident/{{$item->id}}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <span>Apakah Anda yakin ingin menghapus?</span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-outline-danger">Ya, hapus</button>
          </div>
        </div>
    </form>
  </div>
</div>

{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button> --}}
