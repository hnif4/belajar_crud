@extends('Layout')
@section('Content')

<a href="#" onclick="ModalTambahPasien()" class="btn btn-danger"> + Add New Data</a>


<table class="table table-bordered table-dark">
    <tr>
        <th>Kode Pasien</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Spesialis</th>
        <th>opsi</th>
    </tr>
    @foreach($tb_pasien as $Get)
    <tr>
        <td>{{ $Get->kd_pasien }}</td>
        <td>{{ $Get->nama_pasien }}</td>
        <td>{{ $Get->alamat }}</td>
        <td>{{ $Get->jenis_kelamin  }}</td>
        <td>{{ $Get->telepon  }}</td>
        <td>{{ $Get->spesialis }}</td>
        <td>
        <a href="#" onclick="ModalEditPasien('{{ $Get->kd_pasien}}' ,'{{ $Get->nama_pasien }}')" class="btn btn-info" >Update</a>

        <a href="#" onclick="ModalHapusPasien('{{ $Get->kd_pasien }}')" class="btn btn-danger">Delete</a>


    </tr>
    @endforeach
</table>
<!-- Form Modal Tambah Pasien-->
<form action="tb_pasien/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Pasien</label>
                <input type="text" class="form-control" name="kd_pasien" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Pasien</label>
                <textarea name="nama_pasien" class="form-control" required></textarea>
            </div>
        </div>
        <div class="mb-3">
                <label  class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">jenis kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">telepon</label>
                <input type="text" class="form-control" name="telepon" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">spesialis</label>
                <input type="text" class="form-control" name="spesialis" required>
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
<form action="tb_pasien/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
          <input type="hidden" name="kd_pasien" id="kd_pasien_hapus">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Berita-->

  <!-- Form Modal Edit Berita -->
<form action="tb_pasien/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Pasien</label>
                <input type="text" class="form-control" name="kd_pasien" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" name="nama_pasien"  required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Jenis Kelamin</label>
                <textarea name="jenis_kelamin" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">telepon</label>
                <textarea name="telepon" class="form-control" required></textarea>
            </div>
        
            <div class="mb-3">
                <label  class="form-label">spesialis</label>
                <input type="text" class="form-control" name="spesialis" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
        </div>
        </div>
    </div>
</div>
</form>
<!-- Form Modal Edit Berita -->






<script>

    // Modal Tambah Berita
    function ModalTambahPasien() {
           $('#ModalTambahPasien').modal('show');
       }
    // Modal Tambah Berita
   
    // Modal Hapus Berita
    function ModalHapusPasien(id) {
        $('#kd_pasien_hapus').val(id);
        $('#ModalHapusPasien').modal('show');
    }
    // Modal Tambah Berita

    // Modal Edit Berita
    function ModalEditPasien(kd_pasien, nama_pasien, alamat, jenis_kelamin, telepon, spesialis) {
        $('#edit_kd_pasien').val(kd_pasien);
        $('#edit_nama_pasien').val(nama_pasien);
        $('#edit_alamat').val(alamat);
        $('#edit_jenis_kelamin').val(jenis_kelamin);
        $('#edit_telepon').val(telepon);
        $('#edit_spesialis').val(spesialis);
        $('#ModalEditPasien').modal('show');
    }
// Modal Edit Berita

   </script>
   @endsection
