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
                <img src="<?= BASEURL; ?>/assets/frontsite/img/logo smpn1.png" style="width: 140px; height: auto;">
                <!-- <img src="<?= BASEURL; ?>/assets/frontsite/img/logosmppgri.png" style="width: 90px; height: auto;"> -->
                <h5>LAPORAN PENGEMBALIAN BUKU PUSTAKA AMANAH BERSERI</h5>
                <h5>SMP NEGERI 1 PANGKALAN KERINCI</h5>
              </td>
            </tr>
            <tr class="row-tempo">
              <td colspan="7">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a class="btn btn-secondary" href="/perpusweb/backsite/laporanpinjam">Kembali</a>
                  <a class="btn btn-primary" href="" id="btnprint"><i class="bi bi-bookmark-plus-fill">Cetak Laporan</i></a>
                </div>
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
  
    <?php if (isset($_POST['startDate']) && isset($_POST['endDate'])) : ?>
      <p>Tanggal Cetak: <?= date('d F Y'); ?></p>
      <p>Periode Peminjaman Buku: <?= date('d F Y', strtotime($_POST['startDate'])); ?> - <?= date('d F Y', strtotime($_POST['endDate'])); ?></p>
    <?php endif; ?>
 
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
  (function() {
    $(document).ready(function() {
      $('#btnprint').click(function(e) {
        e.preventDefault();
        $('.row-tempo').hide();
        window.print();
        $('.row-tempo').show(); // Menampilkan kembali elemen yang disembunyikan
      });
    });
  })();
</script>
