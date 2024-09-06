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
        .rules-header {
            background-color: #f9f9f9; /* Light background color for better contrast */
            padding: 20px; /* Padding around the content */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
            margin-bottom: 20px; /* Space below the header */
        }
        .rules-header .logo {
            width: auto;
            height: 100px; /* Adjust the height of the logos */
            margin: 0 20px; /* Space between logos */
        }
        .rules-header h5 {
            font-size: 24px; /* Larger font size for the heading */
            font-weight: bold;
            color: #333; /* Darker color for better readability */
            margin-top: 20px; /* Space above the heading */
        }
        .rules-header p {
            font-size: 18px; /* Font size for the italic text */
            color: #555; /* Color for the text */
        }
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
        .box-gap {
            margin-bottom: 40px; /* Custom margin for spacing between content boxes */
        }
        .header-text {
            font-size: 90px; /* Font size for the italic text */
        }
        .header-title {
           
            font-weight: 800;
            color: #2B7A78;
            font-size: 40px;
        }
        .rules-section {
            background-image: url('<?= BASEURL; ?>/assets/frontsite/img/latar putih.jpg'); /* Path ke gambar Anda */
            background-size: cover; /* Menyesuaikan ukuran gambar dengan area */
            background-position: center; /* Menempatkan gambar di tengah */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            padding: 20px;
            color: #fff; /* Jika Anda ingin teks memiliki warna putih untuk kontras dengan gambar */
        }
        .i_org .left {
            border: 4px solid #000;
            border-right: 0;
        }
        .i_org .left img {
            width: 100%;
            object-fit: cover;
            display: block;
            padding: .3rem;
        }
        .i_org .right .box {
            height: 100%;
            display: grid;
            grid-template-rows: 1fr 1fr;
            font-weight: 600;
            font-size: 1rem;
            line-height: 110%;
            color: #000;
        }
        .i_org .right .box .top {
            background-color: #BDD7EE;
            border: 4px solid #000;
            border-bottom: 0;
        }
        .i_org .right .box .bottom {
            border: 4px solid #000;
            border-top: 0;
        }
        .google-visualization-orgchart-node {
            background: #fff;
            padding: 0;
            border: none;
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
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/profil">Profil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/tujuan">ketentuan</a>
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
    <div class="services_section">
    <!-- <div class="services_section_2"> -->
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="section-title row justify-content-center">
                    <div class="col-lg-8">
                        <table class="table">
                            <tr>
                                <td colspan="7" class="text-center rules-header">
                                    <img src="<?= BASEURL; ?>/assets/frontsite/img/logo smpn1.png" style="width: 90px; height: auto;" alt="Logo SMP PGRI">
                                    <h5 class="header-title">KATA SAMBUTAN KEPALA SEKOLAH</h5>
                                    <p class="fst-italic header-text">PUSTAKA AMANAH BERSERI - SMP NEGERI 1 PANGKALAN KERINCI</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="section-title d-flex justify-content-center align-items-start">
                    <!-- Gambar di sebelah kiri -->
                    <div class="col-lg-4 text-center">
                        <img src="<?= BASEURL; ?>/assets/frontsite/img/kapsek smp1.jpg" style="width: 100%; height: auto;" alt="Your Image">
                    </div>
                    <!-- Konten teks di sebelah kanan -->
                    <!-- <div class="col-lg-8 pt-4 pt-lg-0 content mx-auto text-center border border-4 border-dark"> -->
                        <p class="fst-italic" style="text-align: justify;">
                        Assalamualaikum Warohmatullahi Wabarokatuh…..
Selamat datang di Perputakaan “AMANAH BERSERI” SMPN 1 Pangkalan Kerinci
Dengan mengucapkan Puji dan Syukur kehadirat ALLAH SWT, atas Rahmat_Nya, Perpustakaan “AMANAH BERSERI” SMPN 1 Pangkalan Kerinci dapat diakses melalui …..
Semoga dengan mudahnya memanfaatkan fasiltas yang ada membuat siswa semakin termotivasi untuk membaca dan meningkatkan kemampuan Literasi siswa.

                        </p>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        </div>
   
    


        <div class="services_section">
        <div class="rules-section">
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="header-title">STRUKTUR PUSTAKA AMANAH BERSERI</h2>
                    <h3 class="header-title">SMP NEGERI 1 PANGKALAN KERINCI</h3>
                </div>
                <div class="row">
                    <div id="chart_org" class="w-100"></div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', {
                packages: ["orgchart"]
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = new google.visualization.DataTable();
                data.addColumn('string', 'Name');
                data.addColumn('string', 'Manager');
                data.addColumn('string', 'ToolTip');

                const orgs = <?= $data['orgs']; ?>;

                if (orgs) {
                    const rows = [];

                    orgs.forEach(org => {
                        const row = [{
                                'v': org.id.toString(),
                                'f': `
                                <div class="row p-0 i_org">
                                    <div class="col-3 p-0 left">
                                        <img src="<?= BASEURL; ?>/assets/frontsite/img/organisasi/${org.foto ?? ''}" alt="">
                                    </div>
                                    <div class="col-9 p-0 text-uppercase right">
                                        <div class="box p-0">
                                            <div class="d-flex justify-content-center align-items-center flex-column top">
                                                <span>${org.jabatan ?? ''}</span>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center flex-column bottom">
                                                <span>${org.nama ?? ''}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `,
                            },
                            org.parent_key ?? '',
                            org.title ?? '',
                        ];

                        rows.push(row);
                    });

                    data.addRows(rows);
                }

                // Create the chart.
                const chart = new google.visualization.OrgChart(document.getElementById('chart_org'));
                google.visualization.events.addListener(chart, 'ready', customStyle);

                chart.draw(data, {
                    'allowHtml': true,
                    'size': 'large',
                    'allowCollapse': true
                });

            }

            function customStyle() {
                document.querySelector('#chart_org table').style.width = "100%";
            }
        </script>
    </div>
    
</body>

</html>
