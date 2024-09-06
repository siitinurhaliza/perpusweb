<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Kategori</h3>
          </div>
<div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/kategori/store" method="POST"
              enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan judul buku..." id="nama" name="nama">
                </div>
                <div class="form-group">
                  <label>Klasifikasi Buku</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan Klasifikasi Buku..." id="klasifikasi" name="klasifikasi">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan kelas..." id="kelas" name="kelas">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan keterangan..." id="keterangan" name="keterangan">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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