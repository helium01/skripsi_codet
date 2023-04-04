<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Siteladan absensi siswa</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('client')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('client')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/css/owl.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Siteladan</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#jadwal">Jadwal</a></li>
                      <li class="scroll-to-section"><a href="#siswa">Siswa</a></li>
                      <li class="scroll-to-section"><a href="#absensi">Absensi</a></li>
                      <li class="scroll-to-section"><a href="#teladan">Siswa Teladan</a></li>
                      <li class="scroll-to-section"><a href="/login">Login</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Siteladan Siswa Teladan</span>
                <h2>Siswa Teladan Hari ini Adalah : </h2>
                <p>
                  @foreach($siswa_teladan as $sw)
                  <h2 class="h2 text-info">{{$sw->nama_siswa}}</h2>
                  @endforeach
                </p>
                <div class="buttons">
                  
                </div>
              </div>
            </div>
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Siteladan</span>
                <h2>Siteladan Menentukan Siswa Rajin</h2>
                <p>Jadilah Rajin Ke Kesolah Karena Anda Akan Menjadi Siswa Teladan</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Go Siteladan</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @yield('content')
  
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('client')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('client')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{asset('client')}}/assets/js/isotope.min.js"></script>
  <script src="{{asset('client')}}/assets/js/owl-carousel.js"></script>
  <script src="{{asset('client')}}/assets/js/counter.js"></script>
  <script src="{{asset('client')}}/assets/js/custom.js"></script>

  </body>
</html>