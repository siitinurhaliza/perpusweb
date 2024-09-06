<!-- Main content -->
<link rel="stylesheet" href="<?= BASEURL . '/public/assets/frontsite/css/card-print.css' ?>">
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card-print">
          <div class="card card-perpus" style="position: relative;">
            <img src="<?= BASEURL . '/public/assets/frontsite/img/card-print/bg-card5.png' ?>" alt="bg" id="bg-card" style="z-index: 0;">
            <div class="top" style="position: relative; z-index: 1;">
              <section>
                <img src="<?= BASEURL . '/public/assets/frontsite/img/logo smpn1.png' ?>" alt="logo">
              </section>
              <section>
                <h1>Kartu Pustaka Amanah Berseri</h1>
                <h2>Smp Negeri 1 Pangkalan Kerinci</h2>
                <p>Jl. Lintas Timur, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654</p>
                <!-- <p>Telp. ( 021 ) 1234567</p> -->
              </section>
              <section>
                <img src="<?= BASEURL . '/public/assets/frontsite/img/pustaka1.png' ?>" style="width: 140px; height: auto;">
              </section>
            </div>
            <div class="bottom" style="position: relative; z-index: 1;">
              <section class="left">
                <img src="<?= BASEURL . '/public/assets/frontsite/img/foto_profile/' . $data['anggota']['foto'] ?>" alt="">
              </section>
              <section class="right">
                <div class="table">
                  <table>
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><?= $data['anggota']['nama'] ?></td>
                    </tr>
                    <tr>
                      <td>NISN</td>
                      <td>:</td>
                      <td><?= $data['anggota']['nisn'] ?></td>
                    </tr>
                    <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td><?= $data['anggota']['kelas'] ?></td>
                    </tr>
                  </table>
                </div>
                <div class="ttd" style="display: flex; justify-content: space-between;">
                  <div style="position: relative;">
                    <img src="<?= BASEURL . '/public/assets/frontsite/img/card-print/kepala smp1.png' ?>" alt="stempel" id="stempel">
                    <p>Pkl.Kerinci, <span id="current_time"></span></p>
                    <p>Kepala Sekolah</p>
                    <img src="<?= BASEURL . '/public/assets/frontsite/img/card-print/kepala smp1.png' ?>" alt="ttd" id="ttd">
                    <p>JUNAIDI.S.Pd.M.Pd</p>
                  </div>
                  <div style="position: relative;">
                    <img src="<?= BASEURL . '/public/assets/frontsite/img/card-print/cap smp1.png' ?>" alt="stempel" id="stempel">
                    <p>Pkl.Kerinci, <span id="current_time"></span></p>
                    <p>Kepala Pustaka</p>
                    <img src="<?= BASEURL . '/public/assets/frontsite/img/card-print/nur1.png' ?>" alt="ttd" id="ttd">
                    <p>NURWAIDA.MUKHTAR S.Pd</p>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>

        <button onclick="cetak()" class="btn btn-primary mb-3">cetak</button>

        <script>
          function cetak() {
            const cardPrint = document.querySelector(".card-print").innerHTML;

            const printWindow = window.open('', '', 'height=900, width=900');
            printWindow.document.write(cardPrint);

            const cssLink = printWindow.document.createElement('link');
            cssLink.rel = 'stylesheet';
            cssLink.type = 'text/css';
            cssLink.href = '<?= BASEURL . '/public/assets/frontsite/css/card-print.css' ?>';
            printWindow.document.head.appendChild(cssLink);
            printWindow.document.body.style.margin = "10px";

            printWindow.onafterprint = function() {
              printWindow.close();
            };
            printWindow.onload = cssLink.onload = function() {
              printWindow.print();
            };
          }

          function formatDate() {
            const options = {
              day: 'numeric',
              month: 'long',
              year: 'numeric'
            };
            const today = new Date();
            const formattedDate = today.toLocaleDateString('id-ID', options);
            return formattedDate;
          }

          const formattedDate = formatDate();
          document.querySelector('#current_time').innerHTML = formattedDate;
        </script>
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->