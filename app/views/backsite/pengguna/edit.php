<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit pengguna</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/pengguna/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['pengguna']['id']; ?>">
              <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" value="<?= $data['pengguna']['nama']; ?>">
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
    <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $data['pengguna']['foto']; ?>" style="width: 60px;">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Masukkan email" name="email" value="<?= $data['pengguna']['email']; ?>">
  </div>
  <div class="form-group">
    <label>Status</label>
    <input type="text" class="form-control" placeholder="Masukkan status" name="status" value="<?= $data['pengguna']['status']; ?>">
  </div>
  <div class="form-group">
    <label>Level</label>
    <input type="text" class="form-control" placeholder="Masukkan level" name="level" value="<?= $data['pengguna']['level']; ?>">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" placeholder="Masukkan tlp" name="tlp" value="<?= $data['pengguna']['tlp']; ?>">
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