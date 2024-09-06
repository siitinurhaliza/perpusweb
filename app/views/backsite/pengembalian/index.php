<!-- /.content-wrapper -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <?php
      Flasher::Message();
      ?>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengembalian Buku</h3>
        </div>
        <div class="card-body">
          <form action="<?= BASEURL; ?>/backsite/pengembalian/search" method="post">
            <div class="row mb-3">
              <div class="col-lg-6">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" name="key">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                    <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/pengembalian">Reset</a>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <div class="float-right">
            <a href="<?= BASEURL; ?>/backsite/pengembalian/create" class="btn btn-primary mb-4"><i class="bi bi-bookmark-plus-fill">TAMBAH DATA</i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0
                            0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
              </svg></a>
          </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman </th>
                <th>Tanggal Pengembalian</th>
                <th>Tanggal Dikembalikan</th>
                <th>Jumlah</th>
                <th>Denda</th>
                <th>Telat</th>
                <th style="width: 50px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['pengembalian'] as $row) : ?>
                <tr>
                  <td><?= $no; ?></td>

                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['kelas']; ?></td>
                  <td><?= $row['judul']; ?></td>
                  <td><?= $row['tanggalpinjam']; ?></td>
                  <td><?= $row['tanggalkembali']; ?></td>
                  <td><?= $row['kembali']; ?></td>
                  <td><?= $row['jumlah']; ?></td>
                  <td>Rp. <?= $row['denda']; ?></td>
                  
                  <td>
                    <?php
                    $tanggalkembali = strtotime($row['tanggalkembali']);
                    $kembali = strtotime($row['kembali']);
                    $selisih_hari = ($kembali <= $tanggalkembali) ? 0 : ceil(abs($kembali - $tanggalkembali) / (60 * 60 * 24));

                    echo $selisih_hari . " Hari";
                    ?>
                  </td>
                  <td>
                            <a href="<?= BASEURL; ?>/backsite/pengembalian/deploy/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');"><i class="bi bi-trash3"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                              </svg></a>
                          </td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
          <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

          <!-- Tambahkan skrip berikut di akhir file HTML Anda, tepat sebelum tag penutup </body> -->
          <script>
            // function formatRupiah(angka) {
            //   return angka.toLocaleString('id-ID', {
            //     style: 'currency',
            //     currency: 'IDR'
            //   });
            // }
            document.addEventListener('DOMContentLoaded', function() {
              var barisTabel = document.querySelectorAll('table tbody tr');

              barisTabel.forEach(function(baris, indeks) {
                if (indeks % 2 === 0) {
                  // Baris genap
                  baris.style.backgroundColor = '#ecf0f1';
                } else {
                  // Baris ganjil
                  baris.style.backgroundColor = '#f9f9f9';
                }
              });


            });
          </script>
        </div>
        <!-- /.card-body -->
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