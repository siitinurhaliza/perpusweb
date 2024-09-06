<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Type User</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/typeuser/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['typeuser']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="masukkan nama" name="nama" value="<?= $data['typeuser']['nama']; ?>">
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