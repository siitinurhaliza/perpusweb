<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Penerbit Buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/penerbit/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['penerbit']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan judul buku..." name="judul" value="<?= $data['penerbit']['judul']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Penerbit</label>
                  <input type="text" class="form-control" placeholder="masukkan nama penerbit buku..." name="penerbit" value="<?= $data['penerbit']['penerbit']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Pengarang</label>
                  <input type="text" class="form-control" placeholder="masukkan pengarang buku..." name="pengarang" value="<?= $data['penerbit']['pengarang']; ?>">
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" class="form-control" placeholder="masukkan kota buku..." name="kota" value="<?= $data['penerbit']['kota']; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="masukkan alamat penerbit..." name="alamat" value="<?= $data['penerbit']['alamat']; ?>">
                </div>
                <div class="form-group">
                  <label>Tahun Terbit</label>
                  <input type="text" class="form-control" placeholder="masukkan tahun terbit buku..." name="tahunterbit" value="<?= $data['penerbit']['tahunterbit']; ?>">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="masukkan nomor telepon..." name="tlp" value="<?= $data['penerbit']['tlp']; ?>">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" placeholder="masukkan keterangan..." name="keterangan" value="<?= $data['penerbit']['keterangan']; ?>">
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