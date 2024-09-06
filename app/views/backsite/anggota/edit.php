<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Anggota</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form action="<?= BASEURL; ?>/backsite/anggota/update" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $data['anggota']['id']; ?>">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" value="<?= $data['anggota']['nama']; ?>">
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
    <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $data['anggota']['foto']; ?>" style="width: 60px;">
  </div>
  <div class="form-group">
    <label>Nisn</label>
    <input type="text" class="form-control" placeholder="Masukkan NISN" name="nisn" value="<?= $data['anggota']['nisn']; ?>">
  </div>
  <div class="form-group">
    <label>Kelas</label>
    <input type="text" class="form-control" placeholder="Masukkan kelas" name="kelas" value="<?= $data['anggota']['kelas']; ?>">
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="text" class="form-control" placeholder="Masukkan jenis kelamin" name="jk" value="<?= $data['anggota']['jk']; ?>">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control" placeholder="Masukkan alamat" name="alamat" value="<?= $data['anggota']['alamat']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="proses">Update</button>
</form>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->