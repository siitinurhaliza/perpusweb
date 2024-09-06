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
            <h3 class="card-title">Tambah Pengguna</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/pengguna/store" method="POST" enctype="multipart/form-data">
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
                        <td class="fw-bold" width="130">Nama</td>
                        <td><input type="text" class="form-control" name="nama"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold" width="130">Email</td>
                        <td><input type="text" class="form-control" name="email"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold" width="130">Phone</td>
                        <td><input type="number" class="form-control" name="tlp"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold" width="130">Status</td>
                        <td>
                          <div class="d-flex" style="gap:1rem;">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="status1" value="aktif">
                              <label class="form-check-label" for="status1">
                                aktif
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="status2" value="tidak aktif">
                              <label class="form-check-label" for="status2">
                                tidak aktif
                              </label>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold" width="130">Level</td>
                        <td>
                          <select class="form-control" name="level">
                            <option selected disabled>--choose--</option>
                            <option value="kepala sekolah">kepala sekolah</option>
                            <option value="guru">guru</option>
                            <option value="murid">murid</option>
                            <option value="wali murid">wali murid</option>
                            <option value="cleaning service">cleaning service</option>
                          </select>
                        </td>
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