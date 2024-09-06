<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site meta tags -->
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/frontsite/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/frontsite/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/frontsite/css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" href="<?= BASEURL; ?>/assets/frontsite/img/fevicon.png" type="image/gif" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/frontsite/css/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- Custom CSS for styling content boxes -->
    <style>
        .content-box {
            padding: 20px;
            border: 2px solid #000; /* Border color */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow */
            background-color: #fff; /* Background color */
            margin-bottom: 20px; /* Space between boxes */
        }
        .content-box h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .content-box p {
            font-size: 16px;
            line-height: 1.6;
            text-align: justify;
        }
        .content-box .fst-italic {
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="<?= BASEURL; ?>/assets/frontsite/img/smpn1.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/home">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= BASEURL; ?>/frontsite/tujuan">Ketentuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/katalog">Katalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/contact">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="login_bt">
                            <ul>
                                <li><a href="<?= BASEURL; ?>/frontsite/login"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- About section start -->
    <!DOCTYPE html>
<html lang="en">

<>
    <!-- Meta tags dan CSS lainnya tetap sama -->
    
    <!-- Custom CSS for styling content boxes -->
    <style>
        /* Section for main content */
        .services_section {
            background-color: #EAF8FB;
            padding: 80px 0 50px 0;
            position: relative;
            text-align: center;
        }

        .services_section h1 {
            font-size: 36px;
            font-weight: 800;
            color: #2B7A78;
            margin-bottom: 40px; /* Jarak antara judul dan kontainer kotak */
        }

        .box_section {
            display: flex;
            justify-content: space-around;
            text-align: center;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px;
        }

        .box_section .content-box {
            flex: 0 0 auto;
            margin: 10px;
            padding: 30px;
            width: 250px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .box_section .content-box:hover {
            transform: translateY(-10px);
        }

        .box_section .content-box img {
            width: 80px;
            margin-bottom: 20px;
        }

        .box_section .content-box h4 {
            font-size: 20px;
            font-weight: 700;
            color: #2B7A78;
            margin-bottom: 15px;
        }

        .box_section .content-box p {
            font-size: 16px;
            color: #555;
        }

        /* Styling for navigation arrows */
        .arrow-left,
        .arrow-right {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #2B7A78;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 1000;
        }
        .arrow-left {
            left: 10px;
        }
        .arrow-right {
            right: 10px;
        }

        /* Custom CSS for the rules section */
        .rules-section {
            background-image: url('<?= BASEURL; ?>/assets/frontsite/img/latar1.png'); /* Path ke gambar Anda */
            background-size: cover; /* Menyesuaikan ukuran gambar dengan area */
            background-position: center; /* Menempatkan gambar di tengah */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            padding: 20px;
            color: #fff; /* Jika Anda ingin teks memiliki warna putih untuk kontras dengan gambar */
        }
        .rules-section .container {
            max-width: 1000px; /* Lebar box untuk tata tertib */
            margin: 0 auto;
        }

        .rules-section h1 {
            font-size: 36px;
            font-weight: 800;
            color: #2B7A78;
            text-align: center;
            margin-bottom: 40px; /* Jarak antara judul dan kontainer kotak */
        }

        .rule-box {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%; /* Set lebar full */
        }

        .rule-box h2 {
            background-color: #f4a261;
            color: #fff;
            padding: 10px;
            border-radius: 3px;
            font-weight: bold; /* Tebal */
            text-align: center;
        }

        .rule-box ol {
            margin-left: 20px;
            color: #000; /* Hitam */
            font-size: 20px; /* Ukuran besar */
            font-weight: bold; /* Tebal */
            font-family: Arial, sans-serif; /* Font Arial atau sans-serif */
        }

        .rule-box li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

    </style>
</head>

<body>
   

    <!-- Rules Section -->
    <div class="rules-section">
        <div class="container">
        <h1>PERATURAN, LARANGAN, DAN SANKSI PELANGGARAN DALAM PERPUSTAKAAN</h1>
            <div class="rule-box">
                <h2>PERATURAN YANG PERLU DIPERHATIKAN</h2>
                <ol>
                    <li>1. Siswa, Guru, karyawan serta pengunjung lain yang memasuki ruang perpustakaan diharapkan melapor kepada Pengelola / Petugas Perpustakaan dan mengisi buku daftar pengunjung.</li>
                    <li>2. Di dalam ruang perpustakaan harap menjaga ketertiban dan kesopanan supaya tidak mengganggu orang lain yang sedang membaca atau sedang belajar.</li>
                    <li>3. Setiap peminjam buku, majalah, surat kabar dan lain-lain harus memiliki Kartu Anggota Perpustakaan.</li>
                    <li>4. Setiap peminjam diperbolehkan mengambil sendiri buku-buku, majalah,surat kabar yang akan dipinjam dan melaporkan kepada petugas perpustakaan.</li>
                    <li>5. Selesai membaca buku, majalah, surat kabar, dan lain-lain harus dikembalikan pada tempatnya semula.</li>
                    <li>6. Setiap peminjam harus mengembalikan pinjaman buku, majalah, surat kabar dan lain-lain sesuai dengan waktu yang sudah ditentukan oleh perpustakaan.</li>
                    <li>7. Bila ada jam kosong siswa/siswi, diperbolehkan belajar di ruang perpustakaan, setelah terlebih dahulu melapor kepada petugas perpustakaan.</li>
                    <li>8. Menjaga/merawat Buku-buku, majalah, surat kabar yang dipinjam dari perpustakaan supaya tidak rusak atau kotor.</li>
                    <li>9. Apabila buku-buku, majalah, surat kabar yang dipinjam rusak atau hilang harap segera melapor kepada pengelola/petugas perpustakaan.</li>
                    <li>10. Jagalah kebersihan dan tidak membuang sampah sembarangan di dalam ruang perpustakaan, untuk mendapat kenyamanan bersama.</li>
                    <!-- Tambahkan aturan lainnya di sini -->
                </ol>
            </div>

            <div class="rule-box">
                <h2>LARANGAN YANG PERLU DIPERHATIKAN</h2>
                <ol>
                    <li>1. Tidak dibenarkan memakai topi, jaket, serta membawa tas ke dalam ruang perpustakaan.</li>
                    <li>2. Dilarang membawa makanan/minuman serta benda-benda lain yang tidak berhubungan dengan keperluan perpustakaan.</li>
                    <li>3. Dilarang makan/minum, merokok atau hal-hal lain yang bisa menodai barang-barang di dalam ruang perpustakaan serta membuat udara didalam ruangan tidak nyaman.</li>
                    <li>4. Dilarang mencoret-coret/menggunting, menyobek buku-buku, majalah,surat kabar dan lain-lain milik perpustakaan.</li>
                    <li>5. Dilarang bermain atau bergurau yang dapat menggangu orang lain yang sedang membaca/belajar.</li>
                    <li>6. Tidak dibenarkan menggunakan ruang perpustakaan untuk keperluan lain, selain sebagai sarana pendidikan di sekolah serta untuk meningkatkan efektifitas kegiatan belajar/mengajar.</li>
                    <li>7. Tidak dibenarkan menukar buku-buku, majalah, surat kabar, dan lain-lain milik perpustakaan dengan buku-buku lain tanpa seijin pengelola/petugas perpustakaan, walaupun judul dan pengarangnya sama.</li>
                    <!-- Tambahkan larangan lainnya di sini -->
                </ol>
            </div>

            <div class="rule-box">
                <h2>SANKSI PELANGGARAN</h2>
                <ol>
                    <li>1. Setiap pengunjung/peminjam yang tidak mematuhi ketentuan peraturan ketertiban perpustakaan akan dikenakan sanksi.</li>
                    <li>2. Buku-buku, majalah, serta barang-barang lain milik perpustakaan yang rusak akibat kelalaian peminjam harus dipertanggungjawabkan sesuai dengan kebijaksanaan dan ketentuan yang berlaku di perpustakaan.</li>
                    <li>3. Buku-buku yang hilang harus diganti sesuai dengan judul buku yang hilang atau diganti dengan uang sesuai dengan harga buku pada saat itu.</li>
                    <!-- Tambahkan sanksi lainnya di sini -->
                </ol>
            </div>
        </div>
    </div>
    
    <div class="services_section">
        <div class="container">
            <!-- Tambahkan Judul -->
            <h1>TATA TERTIB DALAM RUANG PERPUSTAKAAN</h1>

            <button class="arrow-left">&lt;</button>
            <div class="box_section">
                <div class="content-box">
                    <img src="<?= BASEURL; ?>/assets/frontsite/img/buku pengunjung1.png" alt="Receive requirements">
                    <h4>Setiap Pengunjung diwajibkan mengisi buku pengunjung.</h4>
                </div>
                <div class="content-box">
                    <img src="<?= BASEURL; ?>/assets/frontsite/img/makan minum.jpg" alt="Analyze requirements">
                    <h4>Pengunjung dilarang merokok, makan, dan minum.</h4>
                </div>
                <div class="content-box">
                    <img src="<?= BASEURL; ?>/assets/frontsite/img/bising.png" alt="Establish technical documentation">
                    <h4>Pengunjung dilarang menimbulkan suara gaduh/bising yang dapat menggangu pengunjung lain.</h4>
                </div>
                <div class="content-box">
                    <img src="<?= BASEURL; ?>/assets/frontsite/img/bersih.png" alt="Receive requirements">
                    <h4>Pengunjung harus menjaga kebersihan, kerapian, dan kesopanan.</h4>
                </div>
                <div class="content-box">
                    <img src="<?= BASEURL; ?>/assets/frontsite/img/barang.png" alt="Analyze requirements">
                    <h4>Pengunjung tidak diperbolehkan membawa barang yang tidak diperlukan seperti tas, jaket, dll.</h4>
                </div>
                <div class="content-box">
                    <img src="<?= BASEURL; ?>/assets/frontsite/img/coret.png" alt="Establish technical documentation">
                    <h4>Pengunjung dilarang merusak buku (merobek, melipat, mencoret-coret, atau mengotori bahan pustaka).</h4>
                </div>
                <div class="content-box">
                    <img src="<?= BASEURL; ?>/assets/frontsite/img/kembali.png" alt="Establish technical documentation">
                    <h4>Buku yang telah selesai dibaca harus dikembalikan ke tempat semula.</h4>
                </div>
            </div>
            <button class="arrow-right">&gt;</button>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="<?= BASEURL; ?>/assets/frontsite/js/bootstrap.min.js"></script>
    <!-- Custom scrollbar JS -->
    <script src="<?= BASEURL; ?>/assets/frontsite/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Include jQuery -->
    <script src="<?= BASEURL; ?>/assets/frontsite/js/jquery-3.6.0.min.js"></script>

    <!-- Script for navigation arrows -->
    <script>
        const leftArrow = document.querySelector('.arrow-left');
        const rightArrow = document.querySelector('.arrow-right');
        const boxSection = document.querySelector('.box_section');

        leftArrow.addEventListener('click', () => {
            boxSection.scrollBy({ left: -250, behavior: 'smooth' });
        });

        rightArrow.addEventListener('click', () => {
            boxSection.scrollBy({ left: 250, behavior: 'smooth' });
        });
    </script>
</body>

</html>