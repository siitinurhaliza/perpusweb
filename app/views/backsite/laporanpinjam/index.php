<!-- Konten Utama -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="form-group mb-5">
                  <form action="<?= BASEURL; ?>/backsite/laporanpinjam/cetak" method="POST">
                    <div class="row">
                      <div class="input-group datepicker col-12 col-sm-6 col-md mb-3">
                        <label for="startDate" class="mr-2">Tanggal Awal:</label>
                        <input type="date" class="form-control w-100" id="startDate" name="startDate" required>
                      </div>
                      <div class="input-group datepicker col-12 col-sm-6 col-md mb-3">
                        <label for="endDate" class="mr-2">Tanggal Akhir:</label>
                        <input type="date" class="form-control w-100" id="endDate" name="endDate" required>
                      </div>
                      <div class="input-group datepicker col-12 col-sm-6 col-md mb-3">
                        <label for="month" class="mr-2">Bulan:</label>
                        <select class="form-control w-100" id="month" name="month" required>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                      </div>
                      <div class="input-group datepicker col-12 col-sm-6 col-md mb-3">
                        <label for="year" class="mr-2">Tahun:</label>
                        <input type="number" class="form-control w-100" id="year" name="year" required>
                      </div>
                      <div class="input-group-append col-auto flex-md-column" style="gap: 0.3rem;">
                        <button class="btn btn-outline-secondary" type="submit" style="white-space: nowrap;">Cari Data</button>
                        <button class="btn btn-outline-danger" type="reset">Reset</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="">
          <form action="<?= BASEURL; ?>/backsite/laporanpinjam/cetak" method="POST">
            <button class="btn btn-primary" type="submit"><i class="bi bi-bookmark-plus-fill">Cetak Laporan</i></button>
          </form>
        </div>

        <!-- Tabel Data -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Judul Buku</th>
              <th>Tanggal Pinjam </th>
              <th>Tanggal Pengembalian</th>
              <th>Jumlah</th>
              
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['peminjaman'] as $row) : ?>
              <tr>
                <td><?= $no; ?></td>

                <td><?= $row['nama']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['tanggalpinjam']; ?></td>
                <td><?= $row['tanggalkembali']; ?></td>
                <td><?= $row['jumlah']; ?></td>
               
              </tr>
            <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Tambahkan skrip berikut di akhir file HTML Anda, tepat sebelum tag penutup </body> -->
        <script>
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

    </div>
  </div>
  </div>
  </div>
</section>
</div>