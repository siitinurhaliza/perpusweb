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
      <title>Contact</title>
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
               <a class="navbar-brand"href="index.html"><img src="<?=BASEURL;?>/assets/frontsite/img/smpn1.png"></a>
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
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/tujuan">Ketentuan</a>
                     </li>
                    
                     <li class="nav-item ">
                        <a class="nav-link" href="<?=BASEURL;?>/frontsite/katalog">katalog</a>
                     </li>
                     <li class="nav-item active ">
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
 <!-- contact section start -->
 <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">SMP NEGERI 1 PANGKALAN KERINCI</h1>
               </div>
            </div>
            <style>
  .section-title {
    text-align: center;
  }

  .address {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
</style>

<div class="section-title">
  <div class="address">
    <i class="bi bi-geo-alt"></i>
    <p>Jl. Lintas Timur, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654</p>
  </div>
</div>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css
 integrity="sha512-MV7K8+y+gLIBoVD591QIYicR65iaqukzvf/nwasF0nqhPay5w/91JmvM2hMDcnK1OnMGCdVK+iQrJ71zPJQd1w==" 
 crossorigin="anonymous" referrerpolicy="no-referrer" />
 <div class="container-fluid px-4">
  
 <style>
        #map {
            height: 30vh;
        }
        </style>
                        <h1 class="mt-4">Lokasi SMP NEGERI 1 - PANGKALAN KERINCI</h1>
                        
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>

            getLocation(); 
             function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition); 
                }
             }
            function showPosition(position) {
                    let lat =  0.4019692638870597; 
                    let long = 101.8581865667018;

                  

            var map = L.map('map', {
                center: [lat, long],
                zoom: 13
            });
            L.marker([lat, long]).addTo(map);

let data = <?php echo json_encode($data); ?>;


data.map(function (d) {
L.marker([ 0.4019692638870597,  101.8581865667018], {
icon:myIcon
}).addTo(map).bindPopup(`
`);


})

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar', attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map) }
</script>
         </div>
      </div>
      <!-- contact section end -->
         </div>
      </div>
      <!-- contact section end -->