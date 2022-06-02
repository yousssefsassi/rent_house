<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dari</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="antialiased">
       
       

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Selectionner votre choix </h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>Type</option>
                <option>A louer</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">City</label>
              <select class="form-control form-select form-control-a" id="city">
                <option> Ville disponible</option>
                <option>Hammemet</option>
                <option>Djerba</option>
                <option>Sousse</option>
                <option>Ariana</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Bedrooms</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>choisir</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Garages</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>choisir</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Bathrooms</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>choisir</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Prix</label>
              <select class="form-control form-select form-control-a" id="price">
                <option>choisir</option>
                <option>500 DT</option>
                <option>2100 DT</option>
                <option>2000 DT</option>
                <option>3000 DT</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">chercher </button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Dari<span class="color-b"></span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="/">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="\about">À propos de nous </a>
          </li>  <li class="nav-item">
          @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}"  class="nav-link " >Session</a></li>
                    @else  </li><li class="nav-item"> 
                        <a href="{{ route('login') }}"   class="nav-link ">@lang ('Log in')</a>
                        <li class="nav-item">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"  class="nav-link ">@lang('Register')</a>
                        @endif
                    @endauth
              
            @endif </li>
          

        
          <li class="nav-item">
            <a class="nav-link " href="#a" >Contact</a>
            

          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> 
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b"> </span> Hammemet
                      <br> 8056
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">louer |  2000 DT</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> 
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"> </span> Sousse
                      <br> 4000
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">louer |  2100 DT</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> 
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"> </span> Ariana
                      <br> 2080
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">louer | 500 DT</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Nos offre</h2>
              </div>
              <div class="title-link">
                
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/property-9.jpg" alt=""  class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a  class="category-b">House</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a >Nabeul
                          <br> </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/property-4.jpg" alt=""  class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a  class="category-b">House</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a > Kelibia
                          <br> </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/property-10.jpg" alt=""   class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a class="category-b">House</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a >Tabarka
                          <br> </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/property-8.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a  class="category-b">House</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a > Nabeul 
                          <br> </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->


    <!-- ======= section des image de maison ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
              </div>
              <div class="title-link">
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/property-6.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a > Hammemet
                          <br /> Galaxy Hammemet</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Louer |  2000 DT</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>340m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Lits</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salle de bain</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garage</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/property-3.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a >Sousse
                          <br /> Kantawi++</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Louer | 2100 DT</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>340m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Lits</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salle de bain</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garage</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/property-7.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a >Ariana
                          <br /> Appartement El Nour </a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Louer | 500DT</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>340m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Lits</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salle de bain</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garage</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/property-10.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a>Djerba
                          <br /> Houmet Souk</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Louer |  3000 DT</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>340m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Lits</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Salle de bain</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garage</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

   
    
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- ======= Footer ======= -->
<section class="section-footer" id='a'>

            
<div class="container">
  <div class="row">

    <div class="col-sm-12 col-md-4">
    
      <div class="widget-a">
 
        <div class="w-header-a">
      
          <h3 class="w-title-a text-brand">Dari</h3>
      
        </div>
        <div class="w-body-a">
          <p class="w-text-a color-text-a">
          Notre ambition est de simplifier, faciliter, sécuriser, accompagner un projet immobilier grâce à des outils numériques, afin d’optimiser la prise de décision et l’expérience utilisateur. DARI est une plateforme dynamique, elle répond à tous vos besoins que vous soyez annonceurs ou futur acquéreur ou locataire.
          </p>
        </div>
        <div class="w-footer-a">
          <ul class="list-unstyled">
            <li class="color-a">
              <span class="color-text-a">Phone .</span>+216 50 091 273 
            </li>
            <li class="color-a">
              <span class="color-text-a">Email .</span>  contact@example.com
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="col-sm-12 col-md-4 section-md-t3">
 
      <div class="widget-a">
    
        <div class="w-header-a">
     

  
          <h3 class="w-title-a text-brand">Location des maisons</h3>
        </div>
        <div class="w-body-a">
          <div class="w-body-a">
            <ul class="list-unstyled">
              <li class="item-list-a">
                <a>Louer maison Tunis Ariana</a>
              </li>
              <li class="item-list-a">
                 <a>Louer maison Hammemet</a>
              </li>
              <li class="item-list-a">
                 <a > Louer maison Djerba</a>
              </li>
              <li class="item-list-a">
                <a >Louer maison Sousse</a>
              </li>
              <li class="item-list-a">
              <a >Louer maison Tabarka</a>
              </li>
              <li class="item-list-a">
                 <a >Louer maison Kelibia</a>
              </li>
              <li class="item-list-a">
                 <a >Louer maison Nabeul</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4 section-md-t3">
      <div class="widget-a">
        <div class="w-header-a">
          <h3 class="w-title-a text-brand">Location d'appartements</h3>
        </div>
        <div class="w-body-a">
          <ul class="list-unstyled">
            <li class="item-list-a">
              <a >Tunis</a>
            </li>
            <li class="item-list-a">
              <a>Nabeul</a>
            </li>
            <li class="item-list-a">
             <a>Djerba</a>
            </li>
            <li class="item-list-a">
           <a >Tabarka</a>
            </li>
            <li class="item-list-a">
              <a>Sousse</a>
            </li>
            <li class="item-list-a">
              <a>Kelibia</a>
            </li>
          
          
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<footer>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <nav class="nav-footer">
        <ul class="list-inline">
          
          </li>
        </ul>
      </nav>
      <div class="socials-a">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">
              <i class="bi bi-facebook" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="bi bi-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="bi bi-instagram" aria-hidden="true"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="bi bi-linkedin" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="copyright-footer">
        <p class="copyright color-text-a">
          &copy; Copyright
          <span class="color-a">Dari</span> All Rights Reserved.
        </p>
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
      -->
      
      </div>
    </div>
  </div>
</div>
</footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



 
            </body>
<script>
    var botmanWidget = {
        aboutText: 'write something here',
        introMessage: "✋ Hi! welcome to our site"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
      
</html>
