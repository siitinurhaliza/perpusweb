<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL . '/public/assets/frontsite/css/card-print.css' ?>">
</head>
<body>
<button onclick="cetak()" class="btn btn-primary mb-3">cetak</button>
    <?php foreach ($data['anggota'] as $anggota) : ?>
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
                        <img src="<?= BASEURL . '/public/assets/frontsite/img/foto_profile/' . $anggota['foto'] ?>" alt="">
                    </section>
                    <section class="right">
                        <div class="table">
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $anggota['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td>:</td>
                                    <td><?= $anggota['nisn'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td><?= $anggota['kelas'] ?></td>
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
    <?php endforeach; ?>

    <script>
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
        document.querySelectorAll('#current_time').forEach(function(el) {
            el.innerHTML = formattedDate;
        });

        function cetak() {
            window.print();
        }
    </script>
    
</body>
</html>
