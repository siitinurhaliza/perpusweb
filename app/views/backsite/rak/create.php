<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Rak Buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/rak/store" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama </label>
                  <input type="text" class="form-control" placeholder="masukkan nama..." name="nama">
                </div>
                <div class="form-group">
                  <label>Nomor Rak</label>
                  <input type="text" class="form-control" placeholder="masukkan nomor..." name="nomor">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" placeholder="masukkan keterangan..." name="keterangan">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
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