<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Penerbit Buku</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool"
                data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool"
                data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/penerbit/store" method="POST"
              enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>judul Buku</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan judul..." id="judul" name="judul">
                </div>
                <div class="form-group">
                  <label>Nama Penerbit</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan nama penerbit..." id="penerbit" name="penerbit">
                </div>
                <div class="form-group">
                  <label>Nama Pengarang</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan pengarang buku..." id="pengarang" name="pengarang">
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan kota buku..." id="kota" name="kota">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan alamat..." id="alamat" name="alamat">
                </div>
                <div class="form-group">
                  <label>Tahun Terbit</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan tahun terbit buku..." id="tahunterbit" name="tahunterbit">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan Phone..." id="tlp" name="tlp">
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