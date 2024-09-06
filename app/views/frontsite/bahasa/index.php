<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Basic Meta Tags -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Katalog</title>
   
   <!-- CSS Links -->
   <link rel="stylesheet" type="text/css" href="<?=BASEURL;?>/assets/frontsite/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?=BASEURL;?>/assets/frontsite/css/style.css">
   <link rel="stylesheet" href="<?=BASEURL;?>/assets/frontsite/css/responsive.css">
   <link rel="icon" href="<?=BASEURL;?>/assets/frontsite/img/fevicon.png" type="image/gif" />
   <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?=BASEURL;?>/assets/frontsite/css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   
   <style>
      /* Style adjustments */
      .category-container {
         margin-top: 30px;
         padding: 20px;
         background-color: #f8f9fa;
         border: 2px solid #ddd;
         border-radius: 10px;
         text-align: center;
      }
      .category-container h2 {
         margin-bottom: 20px;
         font-size: 24px;
         color: #333;
      }
      .category-container .btn-group {
         display: flex;
         justify-content: center;
         gap: 10px;
         flex-wrap: wrap;
      }
      .category-container .btn-group .btn {
         padding: 10px 20px;
         border-radius: 5px;
         background-color: #17a2b8;
         color: #fff;
         border: none;
         text-transform: uppercase;
         font-weight: bold;
      }
      .category-container .btn-group .btn:hover {
         background-color: #138496;
         color: #fff;
      }
      .category-container .btn-group .btn.active {
         background-color: #ffc107;
         color: #fff;
      }
   </style>
</head>
<body>
   <!-- Navbar -->
   <div class="header_section">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="<?=BASEURL;?>/assets/frontsite/img/smpn1.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
               <li class="nav-item"><a class="nav-link" href="<?=BASEURL;?>/frontsite/home">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=BASEURL;?>/frontsite/profil">Profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=BASEURL;?>/frontsite/tujuan">Ketentuan</a></li>
                  <li class="nav-item active"><a class="nav-link" href="<?=BASEURL;?>/frontsite/katalog">Katalog</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?=BASEURL;?>/frontsite/contact">Contact</a></li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="login_bt">
                     <ul>
                        <li><a href="<?=BASEURL;?>/frontsite/login"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                     </ul>
                  </div>
               </form>
            </div>
         </nav>
      </div>
   </div>
   
   <?php
   $totalBuku = count($data['buku']);
   ?>
    <?php
   $totalFilsafat = count($data['filsafat']);
   ?>
    <?php
   $totalAgama= count($data['agama']);
   ?>
    <?php
   $totalSosial = count($data['sosial']);
   ?>
    <?php
   $totalIpm= count($data['ipm']);
   ?>
    <?php
   $totalIpt = count($data['ipt']);
   ?>
    <?php
   $totalSeni = count($data['seni']);
   ?>
    <?php
   $totalSastra = count($data['sastra']);
   ?>
    <?php
   $totalSejarah= count($data['sejarah']);
   ?>
    <?php
   $totalBahasa= count($data['bahasa']);
   ?>

   <div class="services_section" style="margin-top: 30px;">
      <div class="category-container">
         <h2>Categories</h2>
         <div class="btn-group">
            <button class="btn " onclick="window.location.href='<?= BASEURL; ?>/frontsite/katalog'">
               Karya Umum (<?= $totalBuku; ?>)
            </button>
            <button class="btn " onclick="window.location.href='<?= BASEURL; ?>/frontsite/filsafat'">
            Filsafat (<?= $totalFilsafat; ?>)
         </button>
            <button class="btn" onclick="window.location.href='<?= BASEURL; ?>/frontsite/agama'">
            Agama (<?= $totalAgama; ?>)
         </button>
            <button class="btn" onclick="window.location.href='<?= BASEURL; ?>/frontsite/sosial'">
            Ilmu Sosial (<?= $totalSosial; ?>)
         </button>
            <button class="btn" onclick="window.location.href='<?= BASEURL; ?>/frontsite/ipm'">
            Ilmu Pengetahuan Murni (<?= $totalIpm; ?>)
         </button>
            <button class="btn active" onclick="window.location.href='<?= BASEURL; ?>/frontsite/bahasa'">
            Bahasa (<?= $totalBahasa; ?>)
         </button>
            <button class="btn" onclick="window.location.href='<?= BASEURL; ?>/frontsite/ipt'">
            Ilmu Pengetahuan Teknologi (<?= $totalIpt; ?>)
         </button>
            <button class="btn" onclick="window.location.href='<?= BASEURL; ?>/frontsite/seni'">
            Seni Olahraga (<?= $totalSeni; ?>)
         </button>
            <button class="btn" onclick="window.location.href='<?= BASEURL; ?>/frontsite/sastra'">
            Kesusastraan (<?= $totalSastra; ?>)
         </button>
            <button class="btn" onclick="window.location.href='<?= BASEURL; ?>/frontsite/sejarah'">
            Sejarah Geografi (<?= $totalSejarah; ?>)
         </button>
         </div>
      </div>
   </div>

   <!-- Book Catalog -->
   <div class="services_section">
      <h2>My Books</h2>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for titles.." title="Type in a title">
      
      <div class="container mt-5">
         <div class="row" id="bookContainer">
            <?php foreach ($data['bahasa'] as $bahasa) : ?>
               <div class="col-md-3 mb-3 book-card" data-category="<?= $bahasa['kategori']; ?>">
                  <div class="card">
                     <img src="<?= BASEURL; ?>/public/assets/frontsite/img/foto_profile/<?= $bahasa['foto']; ?>" class="card-img-top" alt="Cover bahasa">
                     <div class="card-body">
                        <h5 class="card-title large-text"><?= $bahasa['judul']; ?></h5>
                        <p class="card-text">Pengarang: <?= $bahasa['pengarang']; ?></p>
                        <!-- <p class="card-text">Tahun Terbit: <?= $bahasa['tahunterbit']; ?></p> -->
                     </div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </div>




   <!-- Filter Books Script -->
   <script>
      function filterBooks(category) {
         var cards = document.getElementsByClassName("book-card");

         for (var i = 0; i < cards.length; i++) {
            var card = cards[i];
            var cardCategory = card.getAttribute("data-category");
            
            if (cardCategory === category || category === 'Karya Umum') {
               card.style.display = "block";
            } else {
               card.style.display = "none";
            }
         }

         var buttons = document.querySelectorAll('.btn-group .btn');
         buttons.forEach(function(btn) {
            btn.classList.remove('active');
         });
         event.target.classList.add('active');
      }

      function myFunction() {
         var input, filter, cards, card, title, i, txtValue;
         input = document.getElementById("myInput");
         filter = input.value.toUpperCase();
         cards = document.getElementsByClassName("card");

         for (i = 0; i < cards.length; i++) {
            card = cards[i];
            title = card.getElementsByClassName("card-title")[0];
            if (title) {
               txtValue = title.textContent || title.innerText;
               card.style.display = (txtValue.toUpperCase().indexOf(filter) > -1) ? "" : "none";
            }
         }
      }
   </script>

   <!-- Bootstrap JS -->
   <script src="<?=BASEURL;?>/assets/frontsite/js/bootstrap.bundle.min.js"></script>
</body>
</html>
