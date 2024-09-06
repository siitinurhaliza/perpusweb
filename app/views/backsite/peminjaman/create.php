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
            <h3 class="card-title">Tambah Peminjaman Buku</h3>
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
            <form role="form" action="<?= BASEURL; ?>/backsite/peminjaman/store" method="POST">
              <input type="hidden" name="status" value="pinjam">
              <div class="card-body">
                <tr>
                  <td class="fw-bold" width="130">Nama</td>
                  <td><input type="text" class="form-control" name="nama"></td>
                </tr>
                <tr>
                  <td class="fw-bold" width="130">Kelas</td>
                  <td><input type="text" class="form-control" name="kelas"></td>
                </tr>
                <tr>
                  <td class="fw-bold" width="130">Judul Buku</td>
                  <td><input type="text" class="form-control" name="judul"></td>
                </tr>
                <tr>
                  <td class="fw-bold" width="130">Tanggal peminjaman</td>
                  <td><input type="date" class="form-control" name="tanggalpinjam"></td>
                </tr>
                <tr>
                  <td class="fw-bold" width="130">Tanggal Pengembalian</td>
                  <td><input type="date" class="form-control" name="tanggalkembali"></td>
                </tr>
                <tr>
                  <td class="fw-bold" width="130">Jumlah</td>
                  <td><input type="number" class="form-control" name="jumlah"></td>
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