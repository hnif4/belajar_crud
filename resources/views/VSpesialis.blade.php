@extends('Layout')
@section('Content')

<a href="#" onclick="ModalTambahSpesialis()" class="btn btn-danger"> + Add New Data</a>


<table class="table table-bordered table-dark">
    <tr>
        <th>Kode Spesialis</th>
        <th>Spesialis</th>
        <th>opsi</th>
    </tr>
    @foreach($tb_spesialis as $Get)
    <tr>
        <td>{{ $Get->kd_spesialis }}</td>
        <td>{{ $Get->spesialis }}</td>
        
        
        <td>
        <a href="#" onclick="ModalEditSpesialis('{{ $Get->kd_spesialis }}', '{{ $Get->spesialis }}')" class="btn btn-info">Update</a>


        <a href="#" onclick="ModalHapusSpesialis('{{ $Get->kd_spesialis }}')" class="btn btn-danger">Delete</a>


    </tr>
    @endforeach
</table>
<!-- Form Modal Tambah Pasien-->
<form action="tb_spesialis/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahSpesialis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Spesialis</label>
                <input type="text" class="form-control" name="kd_spesialis" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Spesialis</label>
                <textarea name="spesialis" class="form-control" required></textarea>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                </div>
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Tambah Berita -->

<!-- Form Modal Hapus Berita-->
<form action="tb_spesialis/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusSpesialis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
          <input type="hidden" name="kd_spesialis" id="kd_spesialis_hapus">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Berita-->

  <!-- Form Modal Edit Berita -->
  <form action="tb_spesialis/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditSpesialis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Spesialis</label>
                        <input type="text" class="form-control" name="kd_spesialis" id="edit_kd_spesialis" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" id="edit_spesialis" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Edit Berita -->






<script>

    // Modal Tambah Berita
    function ModalTambahSpesialis() {
           $('#ModalTambahSpesialis').modal('show');
       }
    // Modal Tambah Berita
   
    // Modal Hapus Berita
    function ModalHapusSpesialis(id) {
        $('#kd_spesialis_hapus').val(id);
        $('#ModalHapusSpesialis').modal('show');
    }
    // Modal Tambah Berita

    // Modal Edit Berita
    // Modal Edit Berita
function ModalEditSpesialis(kd_spesialis, spesialis) {
    $('#edit_kd_spesialis').val(kd_spesialis);
    $('#edit_spesialis').val(spesialis);
    $('#ModalEditSpesialis').modal('show');
}

// Modal Edit Berita

   </script>
   @endsection
