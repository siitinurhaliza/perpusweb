<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Kategori Buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/kategori/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['kategori']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul Buku </label>
                  <input type="text" class="form-control" placeholder="masukkan judul buku..." name="nama" value="<?= $data['kategori']['nama']; ?>">
                </div>
                <div class="form-group">
                  <label>Klasifikasi Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan klasifikasi buku..." name="klasifikasi" value="<?= $data['kategori']['klasifikasi']; ?>">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" placeholder="masukkan kelas..." name="kelas" value="<?= $data['kategori']['kelas']; ?>">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" placeholder="masukkan keterangan..." name="keterangan" value="<?= $data['kategori']['keterangan']; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
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