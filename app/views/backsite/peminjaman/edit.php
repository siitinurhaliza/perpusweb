<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Peminjaman Buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/peminjaman/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['peminjaman']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama </label>
                  <input type="text" class="form-control" placeholder="masukkan nama..." name="nama" value="<?= $data['peminjaman']['nama']; ?>">
                </div>
                <div class="form-group">
                  <label>Kelas </label>
                  <input type="text" class="form-control" placeholder="masukkan kelas siswa..." name="kelas" value="<?= $data['peminjaman']['kelas']; ?>">
                </div>
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan judul..." name="judul" value="<?= $data['peminjaman']['judul']; ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Peminjaman</label>
                  <input type="date" class="form-control" placeholder="masukkan tanggalpinjam..." name="tanggalpinjam" value="<?= $data['peminjaman']['tanggalpinjam']; ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Pengembalian</label>
                  <input type="date" class="form-control" placeholder="masukkan tanggalkembali..." name="tanggalkembali" value="<?= $data['peminjaman']['tanggalkembali']; ?>">
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" class="form-control" placeholder="masukkan jumlah..." name="jumlah" value="<?= $data['peminjaman']['jumlah']; ?>">
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