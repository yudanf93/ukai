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
<!--     <meta name="twitter:description" content="<?php echo $title; ?>" />
    <meta name="twitter:title" content="<?php echo $title; ?>" />
    <meta name="twitter:site" content="@hairil_sp" />
    <meta name="keywords" content="<?php echo $metades; ?>">
    <meta name="description" content="<?php echo $metades; ?>">
    <meta itemprop="description" content="<?php echo $metades; ?>">
    <meta name="twitter:description" content="<?php echo $metades; ?>">
    <meta property="og:description" itemprop="description" content="<?php echo $metades; ?>"> -->
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
          <a class="nav-link" href="<?php echo base_url('home'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('profil'); ?>">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('paket'); ?>">Paket Soal</a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <a href="<?php echo base_url().'login/logout' ?>"><i class="fa fa-user" style="color: #9E1F63"></i> Logout</a>
      </div>
    </div>
  </nav>

  <section id="latihan">
    <div class="container">
      <div class="row wrap">
        <div class="col-lg-3 col-md-12">
          <div class="card">
            <div class="card-header">Data Peserta</div>
            <div class="card-body">
              <table class="table soal">
                <tbody>
                  <tr class="t">
                    <td>Nama:</td>
                  </tr>
                  <tr>
                    <td>Andin Fathiannisa</td>
                  </tr>
                  <tr class="t">
                    <td>ID:</td>
                  </tr>
                  <tr>
                    <td>200497</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="card">
            <div class="card-header">Sisa Waktu</div>
            <div class="card-body">
              <h1 class="countdown"></h1>
            </div>
          </div>

          <div class="card">
            <div class="card-header">Keterangan Warna</div>
            <div class="card-body">
              <div class="row body">
                <div class="ind-yakin"></div>: Jawaban yakin
              </div>
              <div class="row body">
                <div class="ind-ragu"></div>: Ragu-ragu
              </div>
              <div class="row body">
                <div class="ind-belum"></div>: Belum dijawab
              </div>
              <div class="row body">
                <div class="ind-posisi"></div>: Posisi sekarang
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header">Soal</div>
            <div class="card-body">
              <div class="wrap-soal">
                <p class="nomor">No.1</p>
                <p class="description-soal">Apoteker di industri farmasi akan melakukan sebuah pembelian mesin cetak tablet. Ketika mesin datang ke industri tersebut, dilakukan kualifikasi untuk melihat bagaimana kinerja mesin pertama kali sesuai standar protokol yang berlaku dari vendor/supplier. Kualifikasi apakah yang dilakukan oleh industri farmasi dimaksud?</p>
                <div class="funkyradio">
                  <div class="funkyradio-success">
                    <input type="radio" name="radio" id="radio1" />
                    <label for="radio1">A. Kualifikasi Personil</label>
                  </div>
                </div>
                <div class="funkyradio">
                  <div class="funkyradio-success">
                    <input type="radio" name="radio" id="radio2" />
                    <label for="radio2">B. Kualifikasi Kinerja</label>
                  </div>
                </div>
                <div class="funkyradio">
                  <div class="funkyradio-success">
                    <input type="radio" name="radio" id="radio3" />
                    <label for="radio3">C. Kualifikasi Instalasi</label>
                  </div>
                </div>
                <div class="funkyradio">
                  <div class="funkyradio-success">
                    <input type="radio" name="radio" id="radio4" />
                    <label for="radio4">D. Kualifikasi Operasional</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">Indikator Soal</div>
            <div class="card-body">
              <div class="row wr">
                <div class="ind-wrap"><h6 class="wr">1</h6></div>
                <div class="ind-wrap"><h6 class="wr">2</h6></div>
                <div class="ind-wrap"><h6 class="wr">3</h6></div>
                <div class="ind-wrap"><h6 class="wr">4</h6></div>
                <div class="ind-wrap"><h6 class="wr">5</h6></div>
                <div class="ind-wrap"><h6 class="wr">6</h6></div>
                <div class="ind-wrap"><h6 class="wr">7</h6></div>
                <div class="ind-wrap"><h6 class="wr">8</h6></div>
                <div class="ind-wrap"><h6 class="wr">9</h6></div>
                <div class="ind-wrap"><h6 class="wr">10</h6></div>
                <div class="ind-wrap"><h6 class="wr">11</h6></div>
                <div class="ind-wrap"><h6 class="wr">12</h6></div>
                <div class="ind-wrap"><h6 class="wr">13</h6></div>
                <div class="ind-wrap"><h6 class="wr">14</h6></div>
                <div class="ind-wrap"><h6 class="wr">15</h6></div>
                <div class="ind-wrap"><h6 class="wr">16</h6></div>
                <div class="ind-wrap"><h6 class="wr">17</h6></div>
                <div class="ind-wrap"><h6 class="wr">18</h6></div>
                <div class="ind-wrap"><h6 class="wr">19</h6></div>
                <div class="ind-wrap"><h6 class="wr">20</h6></div>
                <div class="ind-wrap"><h6 class="wr">21</h6></div>
                <div class="ind-wrap"><h6 class="wr">22</h6></div>
                <div class="ind-wrap"><h6 class="wr">23</h6></div>
                <div class="ind-wrap"><h6 class="wr">24</h6></div>
                <div class="ind-wrap"><h6 class="wr">25</h6></div>
                <div class="ind-wrap"><h6 class="wr">26</h6></div>
                <div class="ind-wrap"><h6 class="wr">27</h6></div>
                <div class="ind-wrap"><h6 class="wr">28</h6></div>
                <div class="ind-wrap"><h6 class="wr">29</h6></div>
                <div class="ind-wrap"><h6 class="wr">30</h6></div>
                <div class="ind-wrap"><h6 class="wr">31</h6></div>
                <div class="ind-wrap"><h6 class="wr">32</h6></div>
                <div class="ind-wrap"><h6 class="wr">33</h6></div>
                <div class="ind-wrap"><h6 class="wr">34</h6></div>
                <div class="ind-wrap"><h6 class="wr">35</h6></div>
                <div class="ind-wrap"><h6 class="wr">36</h6></div>
                <div class="ind-wrap"><h6 class="wr">37</h6></div>
                <div class="ind-wrap"><h6 class="wr">38</h6></div>
                <div class="ind-wrap"><h6 class="wr">39</h6></div>
                <div class="ind-wrap"><h6 class="wr">40</h6></div>
                <div class="ind-wrap"><h6 class="wr">51</h6></div>
                <div class="ind-wrap"><h6 class="wr">52</h6></div>
                <div class="ind-wrap"><h6 class="wr">53</h6></div>
                <div class="ind-wrap"><h6 class="wr">54</h6></div>
                <div class="ind-wrap"><h6 class="wr">55</h6></div>
                <div class="ind-wrap"><h6 class="wr">56</h6></div>
                <div class="ind-wrap"><h6 class="wr">57</h6></div>
                <div class="ind-wrap"><h6 class="wr">58</h6></div>
                <div class="ind-wrap"><h6 class="wr">59</h6></div>
                <div class="ind-wrap"><h6 class="wr">60</h6></div>
                <div class="ind-wrap"><h6 class="wr">61</h6></div>
                <div class="ind-wrap"><h6 class="wr">62</h6></div>
                <div class="ind-wrap"><h6 class="wr">63</h6></div>
                <div class="ind-wrap"><h6 class="wr">64</h6></div>
                <div class="ind-wrap"><h6 class="wr">65</h6></div>
                <div class="ind-wrap"><h6 class="wr">66</h6></div>
                <div class="ind-wrap ragu"><h6 class="wr">67</h6></div>
                <div class="ind-wrap"><h6 class="wr">68</h6></div>
                <div class="ind-wrap"><h6 class="wr">69</h6></div>
                <div class="ind-wrap"><h6 class="wr">70</h6></div>
                <div class="ind-wrap"><h6 class="wr">71</h6></div>
                <div class="ind-wrap"><h6 class="wr">72</h6></div>
                <div class="ind-wrap"><h6 class="wr">73</h6></div>
                <div class="ind-wrap"><h6 class="wr">74</h6></div>
                <div class="ind-wrap posisi"><h6 class="wr">75</h6></div>
                <div class="ind-wrap"><h6 class="wr">76</h6></div>
                <div class="ind-wrap"><h6 class="wr">77</h6></div>
                <div class="ind-wrap"><h6 class="wr">78</h6></div>
                <div class="ind-wrap"><h6 class="wr">79</h6></div>
                <div class="ind-wrap"><h6 class="wr">80</h6></div>
                <div class="ind-wrap ragu"><h6 class="wr">81</h6></div>
                <div class="ind-wrap"><h6 class="wr">82</h6></div>
                <div class="ind-wrap"><h6 class="wr">83</h6></div>
                <div class="ind-wrap"><h6 class="wr">84</h6></div>
                <div class="ind-wrap"><h6 class="wr">85</h6></div>
                <div class="ind-wrap"><h6 class="wr">86</h6></div>
                <div class="ind-wrap ragu"><h6 class="wr">87</h6></div>
                <div class="ind-wrap"><h6 class="wr">88</h6></div>
                <div class="ind-wrap"><h6 class="wr">89</h6></div>
                <div class="ind-wrap"><h6 class="wr">90</h6></div>
                <div class="ind-wrap"><h6 class="wr">91</h6></div>
                <div class="ind-wrap"><h6 class="wr">92</h6></div>
                <div class="ind-wrap"><h6 class="wr">93</h6></div>
                <div class="ind-wrap"><h6 class="wr">94</h6></div>
                <div class="ind-wrap belum"><h6 class="wr">95</h6></div>
                <div class="ind-wrap"><h6 class="wr">96</h6></div>
                <div class="ind-wrap"><h6 class="wr">97</h6></div>
                <div class="ind-wrap"><h6 class="wr">98</h6></div>
                <div class="ind-wrap"><h6 class="wr">99</h6></div>
                <div class="ind-wrap"><h6 class="wr">100</h6></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-12">
          <div class="card">
            <div class="card-header">Navigasi Soal</div>
            <div class="card-body">
              <div class="row navigasi">
              <div class="col">
                <a href="<?php echo base_url('hasil'); ?>"><i class="fa fa-backward"></i> <br>Prev</a>
              </div>
              <div class="col">
                <a href="<?php echo base_url('hasil'); ?>"><i class="fa fa-step-forward"></i> <br>Skip</a>
              </div>
              <div class="col">
                <a href="<?php echo base_url('hasil'); ?>"><i class="fa fa-forward"></i> <br>Next</a>
              </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">Sisa Waktu</div>
            <div class="card-body">
              <div class="normal-lab">
                <a href="" class="btn btn-danger paket" data-toggle="modal" data-target="#exampleModalCenter">Detail Normal Lab</a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Normal Lab</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">Peneyelesaian Soal</div>
            <div class="card-body">
              <table class="table soal">
                <tbody>
                  <tr>
                    <td>Jumlah Soal</td>
                    <td>: 100</td>
                  </tr>
                  <tr>
                    <td>Sudah dijawab</td>
                    <td>: 100</td>
                  </tr>
                  <tr>
                    <td>Ragu-ragu</td>
                    <td>: 100</td>
                  </tr>
                  <tr>
                    <td>Belum dijawab</td>
                    <td>: 100</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
      <img class="img-fluid logo" src="<?php echo base_url(); ?>assets/frontend/images/logo-perusahaan.png" alt="logo-perusahaan">
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

  <script type="text/javascript">
    $(document).ready(function() {
        var detik = 59;
        var menit = 59;
        var jam = 1;
        function hitung() {
        setTimeout(hitung,1000);
        $('.countdown').html( '' + jam + ':' + menit + ':' + detik + ' ');
          detik --;
          if(detik < 0) {
          detik = 59;
          menit = 59;
          jam --;
          if(menit < 0) {
          detik = 59;
          menit = 59;
          jam --;
          }
          if(jam < 0) {
          jam = 0;
          menit = 0;
          detik = 0;
          }
        }
      }
      hitung();
    });
    $(document).ready(function() {
        var detik = 59;
        var menit = 59;
        var jam = 23;
        function hitung() {
        setTimeout(hitung,1000);
        $('.countdownhasil').html( '' + jam + ':' + menit + ':' + detik + ' ');
          detik --;
          if(detik < 0) {
          detik = 59;
          menit = 59;
          jam --;
          if(menit < 0) {
          detik = 59;
          menit = 59;
          jam --;
          }
          if(jam < 0) {
          jam = 0;
          menit = 0;
          detik = 0;
          }
        }
      }
      hitung();
    });
  </script>
</body>
</html>