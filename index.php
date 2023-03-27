<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ประกาศบริการ รวมประกาศธุกิจบริการ">
  <meta name="keyword" content="ประกาศบริการ รวมประกาศธุกิจบริการ">
  <meta name="author" content="">
  <title>ประกาศบริการ รวมประกาศธุกิจบริการ</title>

  
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">




  <!-- Icons -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
        <link href=font-awesome-4.7.0/css/font-awesome.css?v=1001 rel=stylesheet type=text/css>
  <!-- Font Style -->



  <script>
    WebFontConfig = {
      google: {
        families: [
          'Prompt:300,400,500,600'
        ]
      }
    };
    (function () {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
  <script>
    function loadCSS(e, n, o, t) {
      "use strict";
      var d = window.document.createElement("link"),
        i = n || window.document.getElementsByTagName("script")[0],
        s = window.document.styleSheets;
      return d.rel = "stylesheet", d.href = e, d.media = "only x", t && (d.onload = t), i.parentNode.insertBefore(d, i),
        d.onloadcssdefined = function (n) {
          for (var o, t = 0; t < s.length; t++) s[t].href && s[t].href.indexOf(e) > -1 && (o = !0);
          o ? n() : setTimeout(function () {
            d.onloadcssdefined(n)
          })
        }, d.onloadcssdefined(function () {
          d.media = o || "all"
        }), d
    }
  </script>



<!--   <script>
    loadCSS('css/bootstrap.css');
    loadCSS('css/shop-homepage.css');
    loadCSS('css/animate.css');
    loadCSS('css/bootsnav.css');
    loadCSS('css/style.css');
    loadCSS('css/bootstrap-touch-slider.css');
    loadCSS('css/owl.carousel.css');
    loadCSS('css/owl.theme.default.css');
    loadCSS('css/swiper.min.css');
    loadCSS('css/header.css');
    loadCSS('css/custom.css');
  </script>
  <noscript> -->
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- Animate -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Bootsnav -->
    <link href="css/bootsnav.css" rel="stylesheet">

    <!-- Custom style -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-touch-slider.css" rel="stylesheet" media="all">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/from-search.css" rel="stylesheet">
    <link href="css/hunterPopup.css" rel="stylesheet">

  <!-- </noscript> -->

  





</head>

<body>

  <!-- Navigation -->
  <?php include("header.php");?>

  <!-- Page Content -->


<div id="Page-Content">


<!--   <div class="big-announce">
        <img class="img-responsive object-fit_cover" src="upload/slide1.jpg" width="100%">





        <div class="big-announce-text">

          <h3>
            สถานีบริการซ่อมรถยนต์ ทุกรุ้นทุกยี่ห้อ<br>
            โดยทีมชั้นที่ชำนานการกว่า 20 ปี<br>
            One Motor Express Co., Ltd.
          </h3>


        </div>






        <div class="big-announce-box">
          <h4>
            <span style="font-size: 130%;">ลงโฆษณา ตำเเหน่งนี้</span><br>
            โทร. 02 100 5055
          </h4>
        </div>


      </div> -->











  <?php include("slider.php");?>
  <?php include("search.php");?>

  <br>

  <!-- ...................section01......................... -->


  <div class="container-fluid">

    <div class="row">

      <div class="col-lg-9 col-md-12 col-sm-12">
        <h2 class="h2"><img src="images/icon_logo.png"> บริการเเนะนำ</h2>








        <div id="o-banner" class="owl-carousel owl-theme">


          <?php for($i=1;$i<=10;$i++){?>


          <div class="item">


            <a href="service-detail.php" class="thumbnail" title="ร้านทำขนมไทย เเบบพื้นบ้าน">
              <img src="upload/service01.jpg" alt="">
              <div class="caption">
                <div class="text-center">
                  <h4>ร้านทำขนมไทย เเบบพื้นบ้าน
                  </h4>
                </div>
                <p>รวมเมนูขนมไทย สูตรขนมไทย วิธีทําขนมไทยง่าย ๆ อาทิ บัวลอย ทองหยิบ ทองหยอด พร้อมคลิปวิธีทำขนมไทย
                  สูตรขนมแสนอร่อย</p>
              </div>
              <div class="ratings">
                <p class="pull-right ma-0"><span class="btn btn-primary">ดูบริการ</span></p>
                <p class="ma-0">
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                </p>
              </div>
            </a>




          </div>

          <?php } ?>

        </div>








      </div>

      <div class="col-lg-3 col-md-12 col-sm-12">
        <h2 class="h2"><img src="images/icon_logo.png"> โพสฝาก Link</h2>


        <div class="d-box-link">


          <h3 class="h4 ma-0">โพสข้อความของคุณในตำเเหน่งนี้</h3>
          <p class="ma-0 text-white">ไม่เกิน 40 ตัวอักษร</p>

        </div>






        <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">

            <?php for($i=1;$i<=12;$i++){?>

            <div class="swiper-slide">
               <a href="https://www.cw.in.th/" class="d-box-link-info" target="_blank">
              วางข้อความของคุณในตำเเหน่งนี้เพื่อลิ้งไป
              </a>
            </div>
            <?php } ?>

          </div>


        </div>
        <center>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
        </center>
        <!-- Swiper JS -->





      </div>


    </div>
  </div>

  <!-- ///////////////////section01///////////////////////// -->


  <!-- ...................section02......................... -->
<div class="container-fluid">
<h2 class="h2"><img src="images/icon_logo.png"> ธุรกิจบริการ</h2>
<div class="bg-blue">


<div class="blue-row">

    <?php for($i=1;$i<=12;$i++){?>


          <div class="blue-grid">


            <a href="service-detail.php" class="thumbnail ma-0 bg-gay" title="น้อยการช่าง">
              <img src="upload/service02.jpg" alt="">
              <div class="caption">
                <div class="text-center">
                  <h4>น้อยการช่าง
                  </h4>
                </div>
                <p >ซ่อมเกียร์ ตั้งวาล์วรถ ถ่ายน้ำมันเครื่อง เช็คช่วงล่าง บริการรวดเร็ว รับประกันอะไหล่แท้ เปิดทุกวันจันทร์-เสาร์ 08.00 -17.30 น. </p>
              </div>
              <div class="ratings">
                <p class="pull-right ma-0"><span class="btn btn-warning">ดูบริการ</span></p>
                <p class="ma-0">
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                </p>
              </div>
            </a>




          </div>

          <?php } ?>

</div>

          <div class="clearfix"></div>

</div>
<div class="clearfix"></div>
<br>
<div class="text-right">
  <a href="" class="btn btn-warning btn-lg text-brown">ดูทั้งหมด</a>
</div>
</div>

  <!-- ///////////////////section02///////////////////////// -->



  <!-- ...................section03......................... -->

<div class="container-fluid">
<h2 class="h2"><img src="images/icon_logo.png"> สินค้าเเนะนำ</h2>
<div class="bg-blue">



<div class="blue-row">
    <?php for($i=1;$i<=8;$i++){?>


          <div class="blue-grid">


            <a href="product-detail.php" class="thumbnail ma-0 padding-bot5 bg-gay" title="แบรนด์รังนกแท้ สูตรน้ํามะพร้าว">
              <img src="upload/product01.jpg" alt="">
              <div class="caption">
                <div class="text-center">
                  <h4>แบรนด์รังนกแท้ สูตรน้ํามะพร้าว
                  </h4>
                </div>
                <p >ด้วยกรรมวิธีการผลิตคุณภาพสูงจากบริษัท CPF ทำให้คุณมั่นใจได้ในคุณภาพ ของสินค้า คงคุณค่าอย่างครบถ้วน สะอาด ถูกหลักอนามัย </p>
              </div>
              <div class="text-right">
                <p class="ma-0"><span class="btn btn-warning">ดูรายละเอียด</span></p>
                
              </div>
            </a>




          </div>

          <?php } ?>



          <div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
<br>
<div class="text-right">
  <a href="" class="btn btn-warning btn-lg text-brown">ดูทั้งหมด</a>
</div>
</div>

  <!-- ///////////////////section03///////////////////////// -->



  <!-- ...................section04......................... -->


<div class="container-fluid">
<h2 class="h2"><img src="images/icon_logo.png"> บทความ</h2>


<div class="row">
     <?php for($i=1;$i<=4;$i++){?>


          <div class="col-lg-3 col-md-4 col-sm-6">


            <a href="new-detail.php" class="ma-0 padding-bot5 bg-gay img-zoom-v2" title="Optimizing processes">
              <div class="hid-img">
              <img src="upload/blog.jpg" alt="" width="100%">
            </div>
              
                <div class="text-center">
                  <h4 class="margintop10">Optimizing processes
                  </h4>
                

                <p>By working with Swiss Post, customers can count on calculable costs, higher quality and data security in document management.</p>
         
        
                <p class="ma-0"><span class="btn btn-warning">ดูรายละเอียด</span></p>
                </div>
        
            </a>


<div class="clearfix"></div>
<br>

          </div>

          <?php } ?>



          <div class="clearfix"></div>

</div>
<div class="clearfix"></div>
<br>
<div class="text-right">
  <a href="" class="btn btn-warning btn-lg text-brown">ดูทั้งหมด</a>
</div>

<hr>

</div>

  <!-- ///////////////////section04///////////////////////// -->

  <!-- ...................section05......................... -->

<div class="container-fluid">
<h2 class="h2"><img src="images/icon_logo.png"> ข่าวอัพเดท</h2>


<div class="row">
    <?php for($i=1;$i<=4;$i++){?>


          <div class="col-lg-3 col-md-4 col-sm-6">


            <a href="new-detail.php" class="ma-0 padding-bot5 bg-gay img-zoom-v2" title="Optimizing processes">
              <div class="hid-img">
              <img src="upload/blog.jpg" alt="" width="100%">
            </div>
              
                <div class="text-center">
                  <h4 class="margintop10">Optimizing processes
                  </h4>
                

                <p>By working with Swiss Post, customers can count on calculable costs, higher quality and data security in document management.</p>
         
        
                <p class="ma-0"><span class="btn btn-warning">ดูรายละเอียด</span></p>
                </div>
        
            </a>


<div class="clearfix"></div>
<br>

          </div>

          <?php } ?>



          <div class="clearfix"></div>

</div>
<div class="clearfix"></div>
<br>
<div class="text-right">
  <a href="" class="btn btn-warning btn-lg text-brown">ดูทั้งหมด</a>
</div>

</div>

  <!-- ///////////////////section05///////////////////////// -->

  <div class="clearfix"></div>
  <br>





<?php include("footer.php");?>





</div>


<!-- START JAVASCRIPT -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Bootsnavs -->
  <script src="js/bootsnav.js"></script>


  <script src="js/jquery.touchSwipe.min.js"></script>

  <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
  <script src="js/bootstrap-touch-slider.js"></script>
  <script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
  </script>

  <script src="js/jquery-popup.js"></script>

        <script>
            $().ready(function(e) {

                var popupEvent = function() {
                    //弹出层中的事件
                }

                $('#popupsearch').hunterPopup({
                    width: '450px',
                    // height: '200px',
                    title: "ธุกิจบริการ",
                    content: $('#tablesearch'),
                    event: popupEvent
                });

            });
        </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->



  <!-- /.container -->
<script>$(function(){var d=window.location;var c=$("ul.nav li a").filter(function(){return this.href==d||d.href.indexOf(this.href)==0}).addClass("d-active").parent().parent()});</script>
  
  <!-- /.container -->
  <script src="js/owl.carousel.js"></script>
  <script type="text/javascript">
    $('#o-banner').owlCarousel({
      rtl: false,
      loop: true,
      margin: 30,
      autoplay: 5000,
      nav: true,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1024: {
          items: 2
        },
        2000: {
          items: 3
        }
      }
    })
  </script>

  <script src="js/swiper.min.js"></script>

  <script>
    var swiper = new Swiper('.swiper-container', {

      autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
      slidesPerView: 1,
      slidesPerColumn: 4,
      spaceBetween: 1,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 1,
          slidesPerColumn: 4,
          spaceBetween: 1,
        },
        768: {
          slidesPerView: 1,
          slidesPerColumn: 4,
          spaceBetween: 1,
        },
        640: {
          slidesPerView: 1,
          slidesPerColumn: 4,
          spaceBetween: 1,
        },
        320: {
          slidesPerView: 1,
          slidesPerColumn: 4,
          spaceBetween: 1,
        }
      }
    });
  </script>

  <script src="js/header.js"></script>
  <?php include("bt.php");?>
</body>

</html>