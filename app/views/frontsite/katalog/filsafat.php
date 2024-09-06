<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?=BASEURL;?>/assets/frontsite/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?=BASEURL;?>/assets/frontsite/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?=BASEURL;?>/assets/frontsite/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?=BASEURL;?>/assets/frontsite/img/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?=BASEURL;?>/assets/frontsite/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.php"><img src="<?=BASEURL;?>/assets/frontsite/img/SMAN.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/home">home</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/profil">profil</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/tujuan">Tujuan</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/aturan">Aturan</a>
                     </li>
                     <li class="nav-item active ">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/katalog">katalog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/contact">contact</a>
                     </li>
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
      <!-- header section end -->
 <!-- services section start -->
 <div class="services_section">
               <style>
        * {
   box-sizing: border-box;
}

#myInput {
   background-image: url();
   background-position: 10px 10px;
   background-repeat: no-repeat;
   width: 100%;
   font-size: 24px;
   padding: 12px 20px 12px 40px;
   border: 1px solid #ddd;
   margin-bottom: 12px;
   color: black;
   /* Add padding to the left and right for spacing */
   padding-right: 20px;
   padding-left: 20px;
}
      </style>

              <h2>My Books</h2>

              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for titles.." title="Type in a title">

              <div class="container mt-5">
                <div class="row">
                  <?php foreach ($data['filsafat'] as $filsafat) : ?>
                    <div class="col-md-3 mb-3">
                      <div class="card">
                        <img src="<?= BASEURL; ?>/public/assets/frontsite/img/foto_profile/<?= $filsafat['foto']; ?>" class="card-img-top" alt="Cover filsafat">
                        <div class="card-body">
                        <h5 class="card-title large-text"><?= $filsafat['judul']; ?></h5>
                          <p class="card-text">Pengarang: <?= $filsafat['pengarang']; ?></p>
                          <!-- <p class="card-text">Tahun Terbit: <?= $filsafat['tahunterbit']; ?></p> -->
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
  </div>
</section>

<script>
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


                  
                 
                           
                  
                           
                           
               
            </div>
         </div>
      </div>
      <!-- services section end -->