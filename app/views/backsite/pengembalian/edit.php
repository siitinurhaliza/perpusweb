<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Pengembalian Buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/pengembalian/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['pengembalian']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama </label>
                  <input type="text" class="form-control" placeholder="masukkan nama..." name="nama" value="<?= $data['pengembalian']['nama']; ?>">
                </div>
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan judul..." name="judul" value="<?= $data['pengembalian']['judul']; ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Pengembalian</label>
                  <input type="date" class="form-control" placeholder="masukkan tanggalpinjam..." name="tanggalpinjam" value="<?= $data['pengembalian']['tanggalpinjam']; ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Pengembalian</label>
                  <input type="date" class="form-control" placeholder="masukkan tanggalkembali..." name="tanggalkembali" value="<?= $data['pengembalian']['tanggalkembali']; ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Dikembalikan</label>
                  <input type="date" class="form-control" placeholder="masukkan dikembalikanya buku..." name="kembali" value="<?= $data['pengembalian']['kembali']; ?>">
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="date" class="form-control" placeholder="masukkan jumlah buku..." name="jumlah" value="<?= $data['pengembalian']['jumlah']; ?>">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="form-control" placeholder="masukkan status..." name="status" value="<?= $data['pengembalian']['status']; ?>">
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