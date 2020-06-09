<!doctype html>
<html lang="in">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="icon" href="assets/images/favicon-laut-tawar.png">
    <title>Teman UKAI</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/media.css') ?>">
    <link rel="icon" href="<?php echo base_url(); ?>assets/frontend/images/favicon-laut-tawar.png">
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
          <a class="nav-link" href="<?php echo base_url('home') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('profil') ?>">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('paket') ?>">Paket Soal</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <a href="<?php echo base_url().'login/logout' ?>"><i class="fa fa-user" style="color: #9E1F63"></i> Logout</a>
      </div>
    </div>
  </nav>

  <section id="pembayaran">
    <div class="container">
      <div class="row wrap">
        <h2 class="title-pembayaran">Informasi Pembayaran</h2>
        <hr class="line-pembayaran">
        <table class="table pembayaran">
          <tbody>
            <tr>
              <td>Kode Transaksi</td>
              <td class="r"><?php echo $invoice?></td>   
            </tr>
            <tr>
              <td>Nominal Transfer</td>
              <td class="r">Rp. <?php echo number_format($paket_b->harga_booster,'0','.','.');?>
                
              </td>
            </tr>
            <tr>
              <td>Nama Rekening Tujuan</td>
              <td class="r">Teman Ukai</td>
            </tr>
            <tr>
              <td>Nama Paket</td>
              <td class="r">Paket soal reguler</td>
            </tr>
            <tr>
              <td>Rekening Bank</td>
              <td class="r">801254649</td>
            </tr>
            <tr>
              <td>Harga Paket</td>
              <td class="r">Rp. <?php echo number_format($paket_b->harga_booster,'0','.','.') ?></td>
            </tr>
          </tbody>
        </table>
      </div>
     
      <div class="row wrap">
        <h2 class="title-pembayaran">   
          Konfirmasi Pembayaran  
          <div class="float-right pembayaran"><?php echo $invoice?></div>
        </h2>
        <hr class="line-pembayaran">
            <div class="col-md-12">          
        <?php echo validation_errors('<div class="alert alert-danger"> ','</div>');?>
            <?php echo form_open_multipart(site_url('pembayaran/paket_bs/'.$paket_b->slug)); ?>  
          <form class="form-wrap"> 
            <div class="form-row">
              <div class="form-group col-md-6">  
                <span>Nama Pembayar</span>
                <input type="text" class="form-control" value="<?php echo $get_user['nama_lengkap']?>" name="id_user" id="" readonly>
              </div>
              <div class="form-group col-md-6">
                <span>a/n Rekening Pembayar</span>
                <input type="text" class="form-control" id="" placeholder="Masukkan a/n Nama Pembayar" name="an_rekening">
              </div>
                <input type="text" class="form-control" value="<?php echo $invoice?>" name="kode_transaksi" id="" hidden>
                <input type="text" class="form-control" value="<?php echo $paket_b->kode_paket?>" name="kode_paket" id="" hidden>
                <input type="text" class="form-control" value="0" name="status_transaksi" id="" hidden>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <span>Bank</span>
                <input type="text" class="form-control" id="" placeholder="Masukkan Bank" name="kode_bank">
              </div>
              <div class="form-group col-md-6">
                <span>Jumlah Pembayaran</span>
                <input type="text" class="form-control" id="" placeholder="Masukkan Jumlah Pembayaran" name="nominal_transfer" >
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6"> 
                <span>Tanggal Bayar</span>
                <input type="date" class="form-control" name="tanggal" >
              </div>
              <div class="form-group col-md-6">
                <span>Bukti Transfer</span>
                <input type="file" class="form-control-file pembayaran" name="bukti_transfer" >
              </div>
            </div>
            <button type="submit" class="btn btn-danger color login pl-5 pr-5">Konfirmasi Pembayaran</button>
          </form>
          <?php echo form_close(); ?>
        </div>
      </div>          
      </div>
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
                  <a href="<?php echo base_url('home'); ?>#booster">Paket Booster</a>
              </li>
              <li>
                  <a href="<?php echo base_url('home'); ?>#reguler">Paket Reguler</a>
              </li>
              <li>
                  <a href="<?php echo base_url('home'); ?>#klien">Klien Kami</a>
              </li>
              <li>
                  <a href="<?php echo base_url('home'); ?>#testimoni">Testimoni</a>
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