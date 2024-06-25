@extends('Layout')
@section('Content')

<a href="#" onclick="ModalTambahJaga()" class="btn btn-danger"> + Add New Data</a>


<table class="table table-bordered table-dark">
    <tr>
        <th>Kode Dokter</th>
        <th>Hari</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>opsi</th>
    </tr>
    @foreach($tb_jaga as $Get)
    <tr>
        <td>{{ $Get->kd_dokter }}</td>
        <td>{{ $Get->hari }}</td>
        <td>{{ $Get->jam_mulai }}</td>
        <td>{{ $Get->jam_selesai  }}</td>
        
        <td>
        <a href="#" onclick="ModalEditJaga('{{ $Get->kd_dokter }}', '{{ $Get->hari }}', '{{ $Get->jam_mulai }}', '{{ $Get->jam_selesai }}')" class="btn btn-info">Update</a>


        <a href="#" onclick="ModalHapusJaga('{{ $Get->kd_dokter }}')" class="btn btn-danger">Delete</a>


    </tr>
    @endforeach
</table>
<!-- Form Modal Tambah Pasien-->
<form action="tb_jaga/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahJaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Dokter</label>
                <input type="text" class="form-control" name="kd_dokter" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Hari</label>
                <textarea name="hari" class="form-control" required></textarea>
            </div>
        </div>
        <div class="mb-3">
                <label  class="form-label">Jam Mulai</label>
                <input type="text" class="form-control" name="jam_mulai" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">jam Selesai</label>
                <input type="text" class="form-control" name="jam_selesai" required>
            </div>
            
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
<!-- Form Modal Tambah Berita -->

<!-- Form Modal Hapus Berita-->
<form action="tb_jaga/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusJaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
          <input type="hidden" name="kd_dokter" id="kd_dokter_hapus">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Berita-->

  <!-- Form Modal Edit Berita -->
  <form action="tb_jaga/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditJaga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Dokter</label>
                        <input type="text" class="form-control" name="kd_dokter" id="edit_kd_dokter" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" id="edit_hari" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Mulai</label>
                        <input type="text" class="form-control" name="jam_mulai" id="edit_jam_mulai" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Selesai</label>
                        <input type="text" class="form-control" name="jam_selesai" id="edit_jam_selesai" required>
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
    function ModalTambahJaga() {
           $('#ModalTambahJaga').modal('show');
       }
    // Modal Tambah Berita
   
    // Modal Hapus Berita
    function ModalHapusJaga(id) {
        $('#kd_dokter_hapus').val(id);
        $('#ModalHapusJaga').modal('show');
    }
    // Modal Tambah Berita

    // Modal Edit Berita
    // Modal Edit Berita
function ModalEditJaga(kd_dokter, hari, jam_mulai, jam_selesai) {
    $('#edit_kd_dokter').val(kd_dokter);
    $('#edit_hari').val(hari);
    $('#edit_jam_mulai').val(jam_mulai);
    $('#edit_jam_selesai').val(jam_selesai);
    $('#ModalEditJaga').modal('show');
}

// Modal Edit Berita

   </script>
   @endsection
