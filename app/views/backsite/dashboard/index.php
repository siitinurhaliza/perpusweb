<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="alert alert-secondary" role="alert">
      <marquee behavior="scroll" direction="left">Selamat Datang, Pahlawan Pengetahuan yang Hebat, di Markas Besar Administrator Perpustakaan SMPN 1 Pangkalan Kerinci Kabupaten Pelalawan! Kami Merayakan Kedatangan Anda dengan Sukacita. Bersiaplah Menyelami Samudra Pengetahuan yang Tak Terbatas, Tempat di Mana Setiap Halaman Adalah Petualangan Baru. Jadilah Pelopor yang Menginspirasi, Guardian of Wisdom! Selamat Menjelajah!</marquee>
    </div>

    <div class="row">
    

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_buku']['total_rows'] ?></h3>
            <p>Buku Karya Umum (000)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_filsafat']['total_rows'] ?></h3>
            <p>Buku Filsafat (100)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/filsafat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_agama']['total_rows'] ?></h3>
            <p>Buku Agama (200)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/agama" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_sosial']['total_rows'] ?></h3>
            <p>Buku Ilmu Sosial (300)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/sosial" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_bahasa']['total_rows'] ?></h3>
            <p>Buku Bahasa (400)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/bahasa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_ipm']['total_rows'] ?></h3>
            <p>Buku Ilmu Pengetahuan Murni (500)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/ipm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_ipt']['total_rows'] ?></h3>
            <p>Buku Ilmu Pengetahuan Teknologi (600)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/ipt" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_seni']['total_rows'] ?></h3>
            <p>Buku Seni Olahraga (700)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/seni" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_sastra']['total_rows'] ?></h3>
            <p>Buku Kesusastraan (800)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/sastra" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_sejarah']['total_rows'] ?></h3>
            <p>Buku Sejarah Geografi (900)</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/sejarah" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $data['count_anggota']['total_rows'] ?></h3>
            <p>Anggota</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-users"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $data['count_peminjaman']['total_rows'] ?></h3>
            <p>Peminjaman</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-right-to-bracket"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/peminjaman" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?= $data['count_pengembalian']['total_rows'] ?></h3>
            <p>Pengembalian</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-right-from-bracket"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/pengembalian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="card col-12 p-0">
        <div class="card-header bg-warning">
          Grafik perpustakaan (Peminjaman) Tahun <span id="tahun">2022</span>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-3">
              <select class="custom-select" id="filter-pengunjung-thn" data-limit-tahun="5"></select>
            </div>
            <!-- <div class="col-auto">
              <button class="btn bg-info"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div> -->
            <div class="col-auto">
              <button class="btn bg-warning" id="resetPengunjung"><i class="fa-solid fa-arrow-rotate-right"></i></button>
            </div>
          </div>
        </div>
        <div class="card-footer bg-transparent">
          <canvas id="chart-pengunjung"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card -->
  </div>
  </div>
  </div>
</section>
<script src="<?= BASEURL ?>/assets/backsite/plugins/chart-js/chart.js"></script>
<script lang="javascript">
  (function() {
    document.addEventListener('DOMContentLoaded', function() {
      // ============== config chart
      const canvaPengunjung = document.querySelector('#chart-pengunjung');
      const MONTHS = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      ];
      const myChart = new Chart(canvaPengunjung, {
        type: 'bar',
        data: {
          labels: MONTHS,
          datasets: [{
            label: 'Peminjaman',
            data: [],
            backgroundColor: "rgba(255,193,7,1)"
          }]
        },
        options: {
          plugins: {
            decimation: {
              enabled: false
            }
          },
          scales: {
            y: {
              beginAtZeno: true,
              ticks: {
                stepSize: 1
              }
            }
          }
        }
      });


      // AJAX pengunjung
      const updateChartPengunjung = (year) => {
        fetch('<?= BASEURL ?>/backsite/dashboard/peminjaman_year', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              year: year
            })
          })
          .then(response => {
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
          })
          .then(data => {
            VALUES = Array(12).fill(0);
            if (data.status && data.result) {
              data.result.forEach(item => {
                const bulanIndex = parseInt(item.bulan) - 1;
                VALUES[bulanIndex] = parseInt(item.jumlah);
              });
            }
            myChart.data.datasets[0].data = VALUES;
            myChart.update();
          })
          .catch(error => {
            console.error('Ada kesalahan dalam fetch:', error);
          });
      }

      // ============== config filter
      const filterPengunjungThn = document.getElementById('filter-pengunjung-thn');
      const limitTahun = parseInt(filterPengunjungThn.getAttribute('data-limit-tahun'), 10);
      const spanTahun = document.getElementById('tahun');
      const tahunSaatIni = new Date().getFullYear();
      for (let tahun = tahunSaatIni; tahun >= tahunSaatIni - limitTahun + 1; tahun--) {
        const option = document.createElement('option');
        option.value = tahun;
        option.textContent = tahun;
        filterPengunjungThn.appendChild(option);
      }
      filterPengunjungThn.querySelector('option:first-child').selected = true;

      function updateTahun() {
        const tahunTerakhir = filterPengunjungThn.value;
        spanTahun.innerHTML = tahunTerakhir;
        updateChartPengunjung(tahunTerakhir);
      }
      updateTahun();
      filterPengunjungThn.addEventListener('change', updateTahun);


      // ============== Button resetPengunjung
      const resetPengunjungButton = document.getElementById('resetPengunjung');
      resetPengunjungButton.addEventListener('click', function() {
        const tahunSaatIni = new Date().getFullYear();
        filterPengunjungThn.value = tahunSaatIni;
        spanTahun.innerHTML = tahunSaatIni;
        updateChartPengunjung(tahunSaatIni);
      });

    });
  })();
</script>
<!-- /.content -->