<!-- Main content -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data kategori</h3>
          </div>
          <div class="card-body">
          <table class="table table-bordered display" id="for_datatable">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Judul Buku</th>
                  <th>Klasifikasi Buku</th>
                  <th>Kelas</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data['buku'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['klasifikasi']; ?></td>
                    <td><?= $row['kelas']; ?></td>
                    <td><?= $row['keterangan']; ?></td>
                    </td>
                  </tr>
                  <?php $no++;
                endforeach; ?>
              </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Tambahkan skrip berikut di akhir file HTML Anda, tepat sebelum tag penutup </body> -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var barisTabel = document.querySelectorAll('table tbody tr');

    barisTabel.forEach(function (baris, indeks) {
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
          <div class="card-footer">
            Footer
          </div>
        </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script lang="javascript">
  let table = new DataTable('#for_datatable', {
    responsive: true
  });
</script>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->