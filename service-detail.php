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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
  <!--   <script>
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


 -->
  <!--   <script>
    loadCSS('css/bootstrap.css');
    loadCSS('css/shop-homepage.css');
    loadCSS('css/animate.css');
    loadCSS('css/bootsnav.css');
    loadCSS('css/style.css');
    loadCSS('css/from.css');
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
  <link href="css/from.css" rel="stylesheet">
  <link href="css/bootstrap-touch-slider.css" rel="stylesheet" media="all">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.default.css" rel="stylesheet">
  <link href="css/swiper.min.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/star.css" rel="stylesheet">

  <!-- </noscript> -->

  <!-- START JAVASCRIPT -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Bootsnavs -->
  <script src="js/bootsnav.js"></script>



  <!-- <script src="js/jquery.touchSwipe.min.js"></script> -->

  <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
  <!-- <script src="js/bootstrap-touch-slider.js"></script> -->
  <!-- <script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
  </script> -->




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->






</head>

<body>

  <!-- Navigation -->
  <?php include("header.php");?>

  <!-- Page Content -->


  <?php include("navigation.php");?>





  <div class="container-fluid">
    <h2 class="h2"><img src="images/icon_logo.png"> ธุรกิจบริการ</h2>



    <div class="row">


      <div class="col-lg-9 col-md-12">
        <div class="row">
          <div class="col-lg-7">
            <img id="show-product" class="img-responsive" src="upload/service02.jpg" width="100%"
              style="margin-bottom: 10px;">




            <div id="owl-product" class="owl-carousel owl-theme">

              <?php for($i=1;$i<=3;$i++){?>
              <div class="item">
                <a href="javascript:void(0)" id="list" data-test="service02.jpg"><img class="img-responsive"
                    data-image="original" src="upload/service02.jpg" alt="service-detail"></a>
              </div>
              <div class="item">
                <a href="javascript:void(0)" id="list" data-test="service03.jpg"><img class="img-responsive"
                    data-image="original" src="upload/service03.jpg" alt="service-detail"></a>
              </div>
              <div class="item">
                <a href="javascript:void(0)" id="list" data-test="service04.jpg"><img class="img-responsive"
                    data-image="original" src="upload/service04.jpg" alt="service-detail"></a>
              </div>
              <?php } ?>


            </div>


          </div>
          <div class="col-lg-5">





            <h5><i class="fas fa-tags text-red"></i> น้อยการช่าง</h5>

            <p class="ma-0">
              <i class="fas fa-star text-yellon"></i>
              <i class="fas fa-star text-yellon"></i>
              <i class="fas fa-star text-yellon"></i>
              <i class="fas fa-star text-yellon"></i>
              <i class="fas fa-star text-yellon"></i>
            </p>


            <span class="d-box-day">วันที่ 12-10-2018</span><span class="d-box-time">เวลา 09.00 น</span>
            <div class="clearfix"></div>
            <br>
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td width="20%"><b>หมวดหมู่</b></td>
                  <td>บริการช่าง </td>
                </tr>
                <tr>
                  <td width="20%"><b>ประเภท</b></td>
                  <td>ว่าจ้าง </td>
                </tr>
                <tr>
                  <td width="20%"><b>ชื่อผู้ประกาศ</b></td>
                  <td>User551234</td>
                </tr>
                <tr>
                  <td width="20%"><b>ที่อยู่</b></td>
                  <td>89/27 ซ.พหลโยธิน52 แยก27 (ม.ทิมเรืองเวช) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 </td>
                </tr>
                <tr>
                  <td width="20%"><b>เบอร์โทรติดต่อ</b></td>
                  <td>021-005-055_</td>
                </tr>
                <tr>
                  <td width="20%"><b>อีเมล์</b></td>
                  <td>servicebythai@gmail.com</td>
                </tr>
              </tbody>
            </table>





          </div>

          <div class="clearfix"></div>
          <br>
          <div class="col-md-12">
            <p>เอสทีเรสซิเด้นท์ ให้บริการเช่าห้องพักรายเดือนระยะสั้น โดยกลุ่มลูกค้าหลักใด้แก่ นักเรียน/นักศึกษา
              รับราชการ/รัฐวิสาหกิจ พนักงานบริษัทเอกชน และธุรกิจส่วนตัว/ค้าขาย
              บริเวณใกล้เคียงซอยระแวกเดียวกันมีอพาร์ทเม้นท์ระดับล่างเปิดให้บริการรูปแบบเดี๋ยวกันกระจายอยู่ทั่วไปตามซอยระแวกดังนี้
              ซอยลาดพร้าว 71, 81, 83, 87, 94, 101, 112, 122</p>

            <p>มากกว่านี้สถานที่ตั่งของเราอยู่ใกล้แหล่งชุมชน อาทิห่างจากเดอะมอลล์บางกะปิเพียง 4 กิโลเมตร
              ห่างจากบิ๊กซีลาดพร้าวเพียง 1 กิโลเมตร ห่างจากโรงเรียนบดินทร์เดชาและทาวน์อินทาวน์เพียง 2 กิโลเมตร
              นอกเหนือจากนี้สถานที่ใกล้เคียงที่สำคัญอื่นๆเช่น 7-ELEVEN ออมนิอเวนิว โรงเรียนอุดมศึกษา มหาวิทยาลัยรามคำแหง
              มหาวิทยาลัยอัสสัมชัญ</p>


            <p>ต่อมาภายในห้องพักรายเดือนมีการตกแต่งสไตล์เรียบง่าย
              ด้านห้องพักและอาคารมีการปรับปรุงเพื่อให้มีบริการที่เหมาะสมกับความต้องการของลูกค้า
              ส่วนด้านบริการเสริมนั้นเรามีบริการกล้องวงจรปิดรักษาความปลอดภัย
              มีบริการแม่บ้านทำความสะอาดห้องพักและพื้นที่ส่วนกลาง มีกระบวนการทำงานของพนักงานที่สนับสนุนงานบริการลูกค้า
              มีสำนักงานติดต่อให้ความช่วยเหลือภายใน 24 ชม.
              มีบริการเครื่องซักผ้าหยอดเหรียญด้วยตนเองที่เพียงพอต่อปริมาณการใช้งานของลูกค้า
              มีบริการพื้นที่ร้านค้าให้เช่าเชิงพาณิชย์ และมีบริการอินเตอร์เน็ตไร้สายภายในอาคาร
              มากกว่านี้เราใด้มีการเปรียบเทียบคุณลักษณะบริการห้องพัก และประสบการของผู้เช่าในย่านซอยลาดพร้าว 71, 81, 83,
              87,94, 101, 112, 122 ดังนี้</p>
            <p>ส่วนด้านราคาค่าเช่าห้องรายเดือน เราให้บริการในราคาที่ถูกกว่าและใกล้แหล่งชุมชน แหล่งงาน แหล่งรายใด้
              แหล่งการศึกษา และเดินทางสะดวกซึ่งราคาค่าเช่ารายเดือนเริ่มต้น 2,700-4,100 บาท</p>

            <p>ท้ายที่สุดนี้เราใด้มีการปรับปรุงห้องพักรายเดือนเพื่อให้เหมาะสมกับความต้องการของลูกค้าปัจจุบัน
              เราใด้ปรับปรุงและพัฒนาในด้านห้องพักรายเดือนและด้านอาคารที่ทรุดโทรม
              อีกทั้งเราใด้มีกระบวนการด้านงานบริการซึ่งช่วยส่งเสริมประสิทธิภาพการทำงานเป็นทีม
              และแก้ไขปัญหาการย้ายออกหรือเลิกใช้บริการของลูกค้า ท่านสามารถเข้าชมข้อมูลใด้ที่</p>


            <a class="text-blue" href="https://www.cw.in.th/" title="น้อยการช่าง" target="_blank">#น้อยการช่าง</a>
            <a class="text-blue" href="https://www.cw.in.th/" title="น้อยการช่าง" target="_blank">#น้อยการช่าง</a>
            <a class="text-blue" href="https://www.cw.in.th/" title="น้อยการช่าง" target="_blank">#น้อยการช่าง</a>
            <a class="text-blue" href="https://www.cw.in.th/" title="น้อยการช่าง" target="_blank">#น้อยการช่าง</a>
            <a class="text-blue" href="https://www.cw.in.th/" title="น้อยการช่าง" target="_blank">#น้อยการช่าง</a>
            <a class="text-blue" href="https://www.cw.in.th/" title="น้อยการช่าง" target="_blank">#น้อยการช่าง</a>
          </div>

          <div class="clearfix"></div>
          <br>
          <div class="clearfix"></div>

          <div class="col-md-6">
            <h5><i class="fas fa-video text-red"></i> วีดีโอ</h5>
            <br>

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0ONbON1xMOU" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>

          </div>
          <div class="col-md-6">

            <h5><i class="fas fa-map-marked-alt text-red"></i> Google Map</h5>
            <br>

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=" frameborder="0"
                style="border:0" allowfullscreen></iframe>

            </div>


          </div>
          <div class="clearfix"></div>
          <br>
<div class="col-md-8">
      <h5><i class="fas fa-share-alt text-red"></i> Share on</h5>
<div class="product-share">
      <ul>
            <li>
                <a class="share-face" href="#" title="facebook">
                    <span> </span>
                </a>
            </li>
            <li>
                <a class="share-twitter" href="#" title="twitter">
                    <span> </span>
                </a>
            </li>
            <li>
                <a class="share-instagram" href="#" title="instagram">
                    <span> </span>
                </a>
            </li>

            <li>
                <a class="share-line" href="#" title="line">
                    <span> </span>
                </a>
            </li>
 



        </ul>
    </div>
    </div>


          <div class="col-md-12">
            <h5><i class="fas fa-comment-dots text-red"></i> ความคิดเห็น</h5>



            <?php for($i=1;$i<=2;$i++){?>

            <div class="media">
              <img src="upload/team1.jpg" alt="" class="img-fluid ">
              <div class="media-body">
                <h6 class=""><b>Joseph Goh </b></h6><span><i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i></span>
                <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
                  cursus eros.
                  Cras a ornare elit.</p>

              </div>
            </div>


            <div class="media">
              <img src="upload/team2.jpg" alt="" class="img-fluid ">
              <div class="media-body">
                <h6 class=""><b>Richard Spark </b></h6><span><i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i>
                  <i class="fas fa-star text-yellon"></i></span>
                <p>ท้ายที่สุดนี้เราใด้มีการปรับปรุงห้องพักรายเดือนเพื่อให้เหมาะสมกับความต้องการของลูกค้าปัจจุบัน
                  เราใด้ปรับปรุงและพัฒนาในด้านห้องพักรายเดือนและด้านอาคารที่ทรุดโทรม
                  อีกทั้งเราใด้มีกระบวนการด้านงานบริการซึ่งช่วยส่งเสริมประสิทธิภาพการทำงานเป็นทีม
                  และแก้ไขปัญหาการย้ายออกหรือเลิกใช้บริการของลูกค้า ท่านสามารถเข้าชมข้อมูลใด้ที่</p>

              </div>
            </div>
            <?php } ?>



            <br>

          </div>






          <div class="col-md-12 starright">

            <h5><i class="fas fa-award text-red"></i> ให้คะเเนนธุรกิจบริการ</h5>

            <br>

            <!-- Rating Stars Box -->
            <!-- <h4 style="color: #00bcd4;">ให้คะเเนนธุรกิจบริการ</h4> -->

            <input name="star_val" id="star_val" type="hidden" value="">
            <div class="clearfix"></div>
            <div class='rating-stars'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1' onclick="onchangestar(1)"
                  OnMouseOver="javascript:showColor(1);" OnmouseOut="javascript:resetColor(1)">
                  <i class='fa fa-star fa-fw Colorstar1 collor_check'></i>
                </li>
                <li class='star' title='Fair' data-value='2' onclick="onchangestar(2)"
                  OnMouseOver="javascript:showColor(2);" OnmouseOut="javascript:resetColor(2)">
                  <i class='fa fa-star fa-fw Colorstar2 collor_check'></i>
                </li>
                <li class='star' title='Good' data-value='3' onclick="onchangestar(3)"
                  OnMouseOver="javascript:showColor(3);" OnmouseOut="javascript:resetColor(3)">
                  <i class='fa fa-star fa-fw Colorstar3 collor_check'></i>
                </li>
                <li class='star' title='Excellent' data-value='4' onclick="onchangestar(4)"
                  OnMouseOver="javascript:showColor(4);" OnmouseOut="javascript:resetColor(4)">
                  <i class='fa fa-star fa-fw Colorstar4 collor_check'></i>
                </li>
                <li class='star' title='WOW!!!' data-value='5' onclick="onchangestar(5)"
                  OnMouseOver="javascript:showColor(5);" OnmouseOut="javascript:resetColor(5)">
                  <i class='fa fa-star fa-fw Colorstar5 collor_check'></i>
                </li>
              </ul>
            </div>


            <div class='success-box'>

              <div class='clearfix'></div>

              <div class='text-message' id="msg_star">คะเเนนความพึงพอใจ</div>
              <div class='clearfix'></div>
            </div>



            <br>



            <div class="book-appointment">
              <div class="book-form agileits-login">
                <form action="#" method="post">



                  <div class="book_date book_date-costom-i">
                    <i class="fas fa-comments"></i>
                    <textarea name="Text" type="text" placeholder="เเสดงความคิดเห็น"></textarea>
                  </div>


                  <div class="clear"></div>

                  <img src="images/Captcha-demo.gif" width="280" height="76" alt="">
                  <div class="clearfix"></div>
                  <br>
                  <div class="clearfix"></div>
                  <a href="" class="btn btn-warning btn-lg text-brown">ตกลง</a>
                  <a href="" class="btn btn-warning btn-lg text-brown">ล้างข้อมูล</a>
              </div>
              </form>
            </div>





          </div>
            <div class="clearfix"></div>
  <br>




        </div>




      </div>

      <div class="col-lg-3 col-md-12">


        <div class="row">


          <div class="col-lg-12 col-md-6 col-sm-12">

            <div class="d-box-link-in">
              <h2 class="h4 ma-0">บริการที่เกี่ยวข้อง</h2>
            </div>
            <div id="o-banner" class="owl-carousel owl-theme">


              <?php for($i=1;$i<=3;$i++){?>


              <div class="item">


                <a href="service-detail.php" title="น้อยการช่าง" class="thumbnail" style="margin-bottom: 0px;">
                  <img src="upload/service02.jpg" alt="">
                  <div class="caption">
                    <div class="text-center">
                      <h4>น้อยการช่าง
                      </h4>
                    </div>
                    <p>ซ่อมเกียร์ ตั้งวาล์วรถ ถ่ายน้ำมันเครื่อง เช็คช่วงล่าง บริการรวดเร็ว รับประกันอะไหล่แท้
                      เปิดทุกวันจันทร์-เสาร์ 08.00 -17.30 น. </p>
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



            <br>

          </div>



          <div class="col-lg-12 col-md-6 col-sm-12">

            <div class="d-box-link-in">
              <h2 class="h4 ma-0">บริการเเนะนำ</h2>
            </div>
            <div id="o-banner2" class="owl-carousel owl-theme">


              <?php for($i=1;$i<=3;$i++){?>


              <div class="item">


                <a href="service-detail.php"  title="ร้านทำขนมไทย เเบบพื้นบ้าน" class="thumbnail" style="margin-bottom: 0px;">
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



            <br>

          </div>

          <div class="clearfix"></div>

          <div class="col-lg-12 col-md-6 col-sm-12">

            <div class="d-box-link-in">
              <h2 class="h4 ma-0">โพสฝาก Link</h2>
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
            <br>
          </div>


          <div class="col-lg-12 col-md-6 col-sm-12">

            <div class="d-box-align">
              <div class="quote"><i class="fas fa-quote-left"></i></div>
              <h3>ว่าง<br>พื้นที่โฆษณา</h3>
              <div class="quote"><i class="fas fa-quote-right"></i></div>
              <br>

              <p>...กรุณาติดต่อเรา Servicebythai</p>
            </div>


          </div>
          <div class="clearfix"></div>
          <br>
          <div class="col-lg-12 col-md-6 col-sm-12">

            <div class="d-box-align">
              <div class="quote"><i class="fas fa-quote-left"></i></div>
              <h3>ว่าง<br>พื้นที่โฆษณา</h3>
              <div class="quote"><i class="fas fa-quote-right"></i></div>
              <br>

              <p>...กรุณาติดต่อเรา Servicebythai</p>
            </div>


          </div>
          <div class="clearfix"></div>
          <br>
        </div>

      </div>


    </div>

  </div>

  <div class="clearfix"></div>
  <br>


  <!-- /.container -->
  <script>
    $(function () {
      var d = window.location;
      var c = $("ul.nav li a").filter(function () {
        return this.href == d || d.href.indexOf(this.href) == 0
      }).addClass("d-active").parent().parent()
    });
  </script>
  <?php include("footer.php");?>
  <!-- /.container -->
  <script src="js/owl.carousel.js"></script>

  <script type="text/javascript">
    $('#o-banner').owlCarousel({
      rtl: false,
      loop: true,
      margin: 30,
      autoplay: 5000,
      nav: false,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1024: {
          items: 1
        },
        2000: {
          items: 1
        }
      }
    })

    $('#o-banner2').owlCarousel({
      rtl: false,
      loop: true,
      margin: 30,
      autoplay: 5000,
      nav: false,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1024: {
          items: 1
        },
        2000: {
          items: 1
        }
      }
    })
  </script>


  <script type="text/javascript">
    $('#owl-product').owlCarousel({
      rtl: false,
      loop: true,
      margin: 10,
      // autoplay: 5000,
      nav: false,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      dots: true,
      responsive: {
        0: {
          items: 4
        },
        600: {
          items: 5
        },
        1024: {
          items: 6
        },
        2000: {
          items: 6
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

  <script>
    $(document).ready(function () {
      $("a#list").click(function () {
        var list_y = $(this).attr("data-test");
        console.log(list_y);
        $("#show-product").fadeOut(50, function () {
          $(this).attr('src', 'upload/' + list_y);
        }).fadeIn(500);
        // $("#zoom-product").attr('src','').fadeIn(1000).attr('src', 'upload/' + list_y);
      });
      $("a#list").on("vclick", function () {
        var list_y = $(this).attr("data-test");
        console.log(list_y);
        $("#show-product").fadeOut(50, function () {
          $(this).attr('src', 'upload/' + list_y);
        }).fadeIn(500);
        // $("#zoom-product").attr('src','').fadeIn(1000).attr('src', 'upload/' + list_y);
      });

    });
  </script>

  <!-- <script>
    $(document).ready(function () {
      console.log("test");
      $("a#list").click(function () {
        var list_y = $(this).attr("data-test");
        console.log(list_y);
        $("#show-product").attr('src', 'upload/' + list_y);
        $("#zoom-product").attr('src', 'upload/' + list_y);
      });
      $("a#list").on("vclick", function () {
        var list_y = $(this).attr("data-test");
        console.log(list_y);
        $("#show-product").attr('src', 'upload/' + list_y);
        $("#zoom-product").attr('src', 'upload/' + list_y);
      });

    });
  </script> -->


  <script type="text/javascript">
    function onchangestar(e) {

      $('.collor_check').css('color', "#ccc");
      var msg = "คะเเนนความพึงพอใจ";
      if (e == 1) {
        $('.Colorstar1').css("color", "#fec824");
        msg = "เฉยๆ";
      } else if (e == 2) {
        $('.Colorstar1').css("color", "#fd9600");
        $('.Colorstar2').css("color", "#fd9600");
        msg = "พอได้อยู่";
      } else if (e == 3) {
        $('.Colorstar1').css("color", "#fd5c1b");
        $('.Colorstar2').css("color", "#fd5c1b");
        $('.Colorstar3').css("color", "#fd5c1b");
        msg = "โอเครเลย";
      } else if (e == 4) {
        $('.Colorstar1').css("color", "#fc0100");
        $('.Colorstar2').css("color", "#fc0100");
        $('.Colorstar3').css("color", "#fc0100");
        $('.Colorstar4').css("color", "#fc0100");
        msg = "ดีมากๆ";
      } else if (e == 5) {
        $('.Colorstar1').css("color", "#b60000");
        $('.Colorstar2').css("color", "#b60000");
        $('.Colorstar3').css("color", "#b60000");
        $('.Colorstar4').css("color", "#b60000");
        $('.Colorstar5').css("color", "#b60000");
        msg = "สุดยอดไปเลย";
      }


      $('#msg_star').html(msg);

      $('#star_val').val(e);
      // $('.selected').each(function(){

      // });
    }

    function showColor(e) {
      // alert(e);

      $('.collor_check').css('color', "#ccc");

      var msg = "คะเเนนความพึงพอใจ";
      if (e == 1) {
        $('.Colorstar1').css("color", "#fec824");
        msg = "เฉยๆ";
      } else if (e == 2) {
        $('.Colorstar1').css("color", "#fd9600");
        $('.Colorstar2').css("color", "#fd9600");
        msg = "พอได้อยู่";
      } else if (e == 3) {
        $('.Colorstar1').css("color", "#fd5c1b");
        $('.Colorstar2').css("color", "#fd5c1b");
        $('.Colorstar3').css("color", "#fd5c1b");
        msg = "โอเครเลย";
      } else if (e == 4) {
        $('.Colorstar1').css("color", "#fc0100");
        $('.Colorstar2').css("color", "#fc0100");
        $('.Colorstar3').css("color", "#fc0100");
        $('.Colorstar4').css("color", "#fc0100");
        msg = "ดีมากๆ";
      } else if (e == 5) {
        $('.Colorstar1').css("color", "#b60000");
        $('.Colorstar2').css("color", "#b60000");
        $('.Colorstar3').css("color", "#b60000");
        $('.Colorstar4').css("color", "#b60000");
        $('.Colorstar5').css("color", "#b60000");
        msg = "สุดยอดไปเลย";
      }


      $('#msg_star').html(msg);
    }

    function resetColor(e) {
      $('.collor_check').css('color', "#ccc");

      var star_val = $('#star_val').val();
      var msg = "คะเเนนความพึงพอใจ";
      if (star_val == 1) {
        msg = "เฉยๆ";
        $('.Colorstar1').css("color", "#fec824");
      } else if (star_val == 2) {
        msg = "พอได้อยู่";
        $('.Colorstar1').css("color", "#fd9600");
        $('.Colorstar2').css("color", "#fd9600");
      } else if (star_val == 3) {
        msg = "โอเครเลย";
        $('.Colorstar1').css("color", "#fd5c1b");
        $('.Colorstar2').css("color", "#fd5c1b");
        $('.Colorstar3').css("color", "#fd5c1b");
      } else if (star_val == 4) {
        msg = "ดีมากๆ";
        $('.Colorstar1').css("color", "#fc0100");
        $('.Colorstar2').css("color", "#fc0100");
        $('.Colorstar3').css("color", "#fc0100");
        $('.Colorstar4').css("color", "#fc0100");
      } else if (star_val == 5) {
        msg = "สุดยอดไปเลย";
        $('.Colorstar1').css("color", "#b60000");
        $('.Colorstar2').css("color", "#b60000");
        $('.Colorstar3').css("color", "#b60000");
        $('.Colorstar4').css("color", "#b60000");
        $('.Colorstar5').css("color", "#b60000");
      } else {
        $('.collor_check').css('color', "#ccc");
        msg = "คะเเนนความพึงพอใจ";
      }

      $('#msg_star').html(msg);
    }
  </script>






  <script src="js/header.js"></script>

<?php include("bt.php");?>
  
</body>

</html>