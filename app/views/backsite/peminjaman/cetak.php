<!-- Konten Utama -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
          <div class="card-body">
            <table style="width: 100%; text-align: center;">
              <tr>
                <td colspan="7">
                <img src="<?= BASEURL; ?>/assets/frontsite/img/pgri12.png" style="width: 90px; height: auto;">
                  <h5>DATA PEMINJAMAN BUKU SEKOLAH MENENGAH PERTAMA</h5>
                  <h5>SMA 2 PANGKALAN KURAS</h5>
                </td>
              </tr>
            </table>
            <hr class="separator-line">
            <style>
                    .separator-line {
                        border: 3px solid #000; 
                        margin-top: 10px; 
                    }
            </style>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Pengembalian</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                if (isset($data['peminjaman']) && is_array($data['peminjaman'])) {
                  foreach ($data['peminjaman'] as $row) :
                ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['nama']; ?></td>
                      <td><?= $row['kelas']; ?></td>
                      <td><?= $row['judul']; ?></td>
                      <td><?= $row['tanggalpinjam']; ?></td>
                      <td><?= $row['tanggalkembali']; ?></td>
                      <td><?= $row['jumlah']; ?></td>
                    </tr>
                <?php
                    $no++;
                  endforeach;
                } 
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  window.print();
</script>
