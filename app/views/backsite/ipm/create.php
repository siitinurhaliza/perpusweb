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
            <h3 class="card-title">Tambah Buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/ipm/store" method="POST"
              enctype="multipart/form-data">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="fw-bold" width="130">Gambar</td>
                                    <td>
                                        <div class="form-group">
                                            <label for="gambar" class="visually-hidden">Gambar</label>
                                            <input type="file" class="form-control" id="foto" name="foto">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">No.Induk Buku</td>
                                    <td><input type="text" class="form-control" name="inventaris"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Judul Buku</td>
                                    <td><input type="text" class="form-control" name="judul"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Stok</td>
                                    <td><input type="text" class="form-control" name="stok"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Jumlah Buku Rusak</td>
                                    <td><input type="text" class="form-control" name="rusak"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Harga Buku</td>
                                    <td><input type="text" class="form-control" name="harga"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Kategori</td>
                                    <td><input type="text" class="form-control" name="kategori"></td>
                                </tr>
                              
                                <tr>
                                    <td class="fw-bold" width="130">Tanggal</td>
                                    <td><input type="text" class="form-control" name="tanggal"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Pengarang</td>
                                    <td><input type="text" class="form-control" name="pengarang"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Penerbit</td>
                                    <td><input type="text" class="form-control" name="penerbit"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Isbn</td>
                                    <td><input type="text" class="form-control" name="isbn"></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold" width="130">Klasifikasi</td>
                                    <td><input type="text" class="form-control" name="klasifikasi"></td>
                                </tr>
                             
                              
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" class="btn btn-primary" name="proses">Simpan Data</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
            <!-- Menampilkan pesan upload jika ada -->
<?php if (isset($data['uploadedFileName'])) : ?>
    <p>Gambar berhasil diupload: <?= $data['uploadedFileName']; ?></p>
<?php elseif (isset($data['uploadError'])) : ?>
    <p>Error upload: <?= $data['uploadError']; ?></p>
<?php endif; ?>
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