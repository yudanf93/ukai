<!DOCTYPE html>

<html lang="in">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/media.css') ?>">

    <link rel="icon" href="<?php echo base_url(); ?>assets/frontend/images/favicon-laut-tawar.png">

    <title>Teman UKAI</title>

    <meta property="og:locale" content="id_ID" />

    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:description" content="<?php echo $title; ?>" />

    <meta name="twitter:title" content="<?php echo $title; ?>" />

    <meta name="twitter:site" content="@hairil_sp" />

    <meta name="keywords" content="<?php echo $metades; ?>">

    <meta name="description" content="<?php echo $metades; ?>">

    <meta itemprop="description" content="<?php echo $metades; ?>">

    <meta name="twitter:description" content="<?php echo $metades; ?>">

    <meta property="og:description" itemprop="description" content="<?php echo $metades; ?>">

</head>

<body>

  <a href="https://api.whatsapp.com/send?phone=628515533724&amp;text=Hallo%20admin%20teman%20UKAI...." class="my-wa" target="_blank" title="Hubungi kami sekarang!"><i class="fa fa-whatsapp my-float"></i></a>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="landingpage">

    <a class="navbar-brand" href="<?php echo base_url('home'); ?>">

      <img class="img-fluid logo" src="<?php echo base_url(); ?>assets/frontend/images/logo-perusahaan.png" alt="logo-perusahaan">

    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">

          <a class="nav-link" href="#home">Home</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#booster">Paket Booster</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#reguler">Paket Reguler</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#klien">Klien Kami</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#testimoni">Testimoni</a>

        </li>

      </ul>

      <div class="form-inline my-2 my-lg-0">

        <a class="mr-3" data-toggle="modal" data-target="#login-start"><i class="fa fa-user" style="color: #9E1F63"></i> Login</a>

        <a href="<?php echo base_url('daftar'); ?>"><button class="btn btn-danger color my-2 my-sm-0">Daftar Sekarang</button></a>

      </div>

    </div>

  </nav>



  <!-- popup login -->

  <div class="modal fade" id="login-start" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

      <div class="modal-content">

        <div class="modal-body login">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

          <div class="row">

            <div class="col-lg-6 col-12">

              <img class="img-fluid login" src="<?php echo base_url(); ?>assets/frontend/images/login.png" alt="daftar">

            </div>

            <div class="col-lg-6 col-12">

              <h3 class="title-login">Login Sekarang</h3>

              <hr class="line-login">

              <p class="description-login">Selamat datang kembali, silahkan masuk</p>

              <form action="profil.html">

                <div class="form-group">

                  <label for="">Email</label>

                  <input type="email" class="form-control" id="" placeholder="Isikan email anda">

                </div>

                <div class="form-group">

                  <label for="">Password</label>

                  <input type="password" class="form-control" id="" placeholder="Isikan password anda">

                </div>

                <button type="submit" class="btn btn-danger color login pl-5 pr-5">Login</button>

              </form>

              <div class="link login">

                <p>Lupa password? <a href="reset-password.html">Reset</a></p>

                <p>Belum punya akun? <a href="daftar.html">Daftar</a></p>

              </div>

            </div>



          </div>

        </div>

      </div>

    </div>

  </div>



  <section id="home">

    <div class="container">

      <div class="row">

        <h1 class="title-header">Platform Penyedia Layanan <br class="enter"> Latihan Soal UKAI Berbasis Teknologi</h1>

        <p class="description-header">Akses belajar asik dan santai dengan program kelas online untuk <br class="enter"> mempersiapkan UKAI bagi calon Apoteker baru Indonesia.</p>

      </div>

    </div>

  </section>



  <section id="booster">

    <div class="container">

      <div class="row">

        <!-- mobile -->

        <div class="col-md-6 d-block d-sm-none">

          <img class="img-fluid" src="<?php echo base_url(); ?>assets/frontend/images/paket-booster.png" alt="paket-booster">

        </div>

        <div class="col-lg-5 col-md-6" style="margin: auto;">

          <h2 class="title-paket">Paket <br><b>Booster</b></h2>

          <p class="description-paket">Platform terbaik untuk belajar mempersiapkan menuju UKAI mendatang. Menyuguhkan pembelajaran UKAI secara online berupa latihan soal dengan jenis bervariatif serta dilengkapi pembahasan secara ringkas dengan Mentor Teman UKAI.</p>

          <a href="#daftar"><button class="btn btn-danger color" type="submit">Daftar Sekarang</button></a>

        </div>

        <!-- dekstop -->

        <div class="col-md-6 d-none d-sm-block">

          <img class="img-fluid" src="<?php echo base_url(); ?>assets/frontend/images/paket-booster.png" alt="paket-booster">

        </div>

      </div>

    </div>

  </section>



  <section id="reguler">

    <div class="container">

      <div class="row">

        <div class="col-md-6">

          <img class="img-fluid" src="<?php echo base_url(); ?>assets/frontend/images/paket-reguler.png" alt="paket-reguler">

        </div>

        <div class="col-lg-5 col-md-6" style="margin: auto;">

          <h2 class="title-paket">Paket <br><b>Reguler</b></h2>

          <p class="description-paket">Platform terbaik untuk mengasah kemampuan menjawab soal untuk mempersiapkan menuju UKAI mendatang. Menyuguhkan pembelajaran UKAI secara online berupa latihan soal dengan jenis bervariatif serta dilengkapi pembahasan secara ringkas dengan Mentor Teman UKAI.</p>

          <a href="#daftar"><button class="btn btn-danger color" type="submit">Daftar Sekarang</button></a>

        </div>

      </div>

    </div>

  </section>



  <section id="klien">

    <div class="container">

      <div class="row">

        <h3 class="title-klien">Klien <b>Kami</b></h3>

      </div>

        <div class="wrap-klien">

      <div class="row">

        <div class="col-12 col-md-4">

          <div class="card">

            <img class="card-img-top klien" src="<?php echo base_url(); ?>assets/frontend/images/klien-pt.png" alt="klien-pt">

            <p class="card-text stat-count highlight">25</p>

            <p class="title-peserta">Perguruan Tinggi</p>

          </div>

        </div>



        <div class="col-12 col-md-4">

          <div class="card">

            <img class="card-img-top klien" src="<?php echo base_url(); ?>assets/frontend/images/klien-peserta.png" alt="klien-peserta">

            <p class="card-text stat-count highlight">482</p>

            <p class="title-peserta">Peserta</p>

          </div>

        </div>



        <div class="col-12 col-md-4">

          <div class="card">

            <img class="card-img-top klien" src="<?php echo base_url(); ?>assets/frontend/images/klien-produk.png" alt="klien-produk">

            <p class="card-text stat-count highlight">2</p>

            <p class="title-peserta">Produk</p>

          </div>

        </div>

        </div>

      </div>

    </div>

  </section>



  <section id="testimoni">

    <div class="container">

      <div class="row">

        <h3 class="title-klien">Apa kata <b>Mereka?</b></h3>

        <div id="testim" class="testim">

          <div class="wrap">

            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>

            <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>

            <ul id="testim-dots" class="dots">

              <li class="dot active"></li>

              <li class="dot"></li>

              <li class="dot"></li>

            </ul>

            <div id="testim-content" class="cont">                    

              <div class="active">

                <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt=""></div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>               

                <div class="h4">Kellie</div>

                <div class="h5">CEO Sevenpion</div>

              </div>

              <div>

                <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    

                <div class="h4">Jessica</div>

                <div class="h5">CEO Sevenpion</div>

              </div>



              <div>

                <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    

                <div class="h4">Kellie</div>

                <div class="h5">CEO Sevenpion</div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>



  <section id="daftar">

    <div class="container">

      <h3 class="title-daftar">Siap untuk <b>Belajar?</b></h3>

      <p class="description-daftar">Rasakan pengalaman belajar asik dan santai bersama Teman UKAI.</p>

      <center>

        <a href="daftar.html"><button class="btn btn-danger color" type="submit">Daftar Sekarang</button></a>

      </center>

    </div>

  </section>



  <footer id="footer">

    <div class="container">

      <div class="row">

        <div class="col-md-5">

          <img class="image-footer" src="<?php echo base_url(); ?>assets/frontend/images/logo-perusahaan.png" alt="logo-perusahaan">

          <p class="description-footer">Media belajar berbasis teknologi yang terfokus pada kemampuan menjawab soal untuk persiapan ujian UKAImu yang lebih baik. Dengan sistem yang selalu berkambang sesuai kebutuhan, Teman UKAI hadir sebagai solusi belajarmu untuk menjadi teman berjuang menuju perjalanan impianmu.</p>

        </div>

        <div class="col-md-1 ipad">

        </div>

        <div class="col-md-3 d-none d-sm-block" id="about-footer">

          <div class="single-widget widget-contact">

            <h5 class="widget-title">Menu</h5>

            <ul>

              <li>

                  <a href="#booster">Paket Booster</a>

              </li>

              <li>

                  <a href="#reguler">Paket Reguler</a>

              </li>

              <li>

                  <a href="#klien">Klien Kami</a>

              </li>

              <li>

                  <a href="#testimoni">Testimoni</a>

              </li>

            </ul>

          </div>

        </div>

        <div class="col-lg-3 col-md-3 col-12">

          <div class="single-widget widget-contact">

            <h5 class="widget-title">Kontak Kami</h5>

            <ul>

              <li class="phone">

                  <span class="icon"><i class="fa fa-phone"></i></span>

                  <a href="wa.me/628515533724">0851 5533 724</a>

              </li>

              <li class="fax">

                  <span class="icon"><i class="fa fa-instagram"></i></span>

                  <a href="https://www.instagram.com/teman.ukai/">@teman.ukai</a>

              </li>

              <li class="email">

                  <span class="icon"><i class="fa fa-envelope-o"></i></span>

                  <a href="mailto:info@temanukai.com">info@temanukai.com</a>

              </li>

            </ul>

          </div>

        </div>

      </div>

      <hr class="f-line">

      <div id="copyright">

        <p class="copyright-text">Copyright &copy Teman UKAI 2020</p>

      </div>

    </div>

  </footer>



  <!-- javascript -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- tambahan -->

  <script type="text/javascript">

    (function($) {

    "use strict";

    function count($this){

    var current = parseInt($this.html(), 10);

    current = current + 1; /* Where 50 is increment */  

    $this.html(++current);

      if(current > $this.data('count')){

        $this.html($this.data('count'));

      } else {    

        setTimeout(function(){count($this)}, 50);

      }

    }         

    $(".stat-count").each(function() {

      $(this).data('count', parseInt($(this).html(), 10));

      $(this).html('0');

      count($(this));

    });

   })(jQuery);

  </script>

  <script type="text/javascript">

    // vars

    'use strict'

    var testim = document.getElementById("testim"),

        testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),

        testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),

        testimLeftArrow = document.getElementById("left-arrow"),

        testimRightArrow = document.getElementById("right-arrow"),

        testimSpeed = 4500,

        currentSlide = 0,

        currentActive = 0,

        testimTimer,

        touchStartPos,

        touchEndPos,

        touchPosDiff,

        ignoreTouch = 30;

    ;

    window.onload = function() {

        // Testim Script

        function playSlide(slide) {

            for (var k = 0; k < testimDots.length; k++) {

                testimContent[k].classList.remove("active");

                testimContent[k].classList.remove("inactive");

                testimDots[k].classList.remove("active");

            }

            if (slide < 0) {

                slide = currentSlide = testimContent.length-1;

            }

            if (slide > testimContent.length - 1) {

                slide = currentSlide = 0;

            }

            if (currentActive != currentSlide) {

                testimContent[currentActive].classList.add("inactive");            

            }

            testimContent[slide].classList.add("active");

            testimDots[slide].classList.add("active");

            currentActive = currentSlide;        

            clearTimeout(testimTimer);

            testimTimer = setTimeout(function() {

                playSlide(currentSlide += 1);

            }, testimSpeed)

        }

        testimLeftArrow.addEventListener("click", function() {

            playSlide(currentSlide -= 1);

        })

        testimRightArrow.addEventListener("click", function() {

            playSlide(currentSlide += 1);

        })    

        for (var l = 0; l < testimDots.length; l++) {

            testimDots[l].addEventListener("click", function() {

                playSlide(currentSlide = testimDots.indexOf(this));

            })

        }

        playSlide(currentSlide);

        // keyboard shortcuts

        document.addEventListener("keyup", function(e) {

            switch (e.keyCode) {

                case 37:

                    testimLeftArrow.click();

                    break;                    

                case 39:

                    testimRightArrow.click();

                    break;

                case 39:

                    testimRightArrow.click();

                    break;

                default:

                    break;

            }

        })      

        testim.addEventListener("touchstart", function(e) {

            touchStartPos = e.changedTouches[0].clientX;

        })

        testim.addEventListener("touchend", function(e) {

            touchEndPos = e.changedTouches[0].clientX;

            touchPosDiff = touchStartPos - touchEndPos;

            console.log(touchPosDiff);

            console.log(touchStartPos); 

            console.log(touchEndPos); 

            if (touchPosDiff > 0 + ignoreTouch) {

                testimLeftArrow.click();

            } else if (touchPosDiff < 0 - ignoreTouch) {

                testimRightArrow.click();

            } else {

              return;

            }

        })

    }

  </script>

</body>

</html>

