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
        <h2 class="h2"><img src="images/icon_logo.png"> สินค้าเเเนะนำ</h2>



        <div class="row">


          <div class="col-lg-9 col-md-12">
            <div class="row">
              <div class="col-lg-7">
                <img id="show-product" class="img-responsive" src="upload/product01.jpg" width="100%"
                style="margin-bottom: 10px;">




                <div id="owl-product" class="owl-carousel owl-theme">

                  <?php for($i=1;$i<=3;$i++){?>
                    <div class="item">
                      <a href="javascript:void(0)" id="list" data-test="product01.jpg"><img class="img-responsive"
                        data-image="original" src="upload/product01.jpg" alt="service-detail"></a>
                      </div>
                      <div class="item">
                        <a href="javascript:void(0)" id="list" data-test="product02.jpg"><img class="img-responsive"
                          data-image="original" src="upload/product02.jpg" alt="service-detail"></a>
                        </div>
                        <div class="item">
                          <a href="javascript:void(0)" id="list" data-test="product03.jpg"><img class="img-responsive"
                            data-image="original" src="upload/product03.jpg" alt="service-detail"></a>
                          </div>
                        <?php } ?>


                      </div>


                    </div>
                    <div class="col-lg-5">





                      <h5><i class="fas fa-tags text-red"></i> แบรนด์รังนกแท้สูตรน้ำมะพร้าว</h5>

                      <br>

                      <span class="d-box-day">วันที่ 12-10-2018</span><span class="d-box-time">เวลา 09.00 น</span>
                      <div class="clearfix"></div>
                      <br>
                      <table class="table table-striped">
                        <tbody>
                          
                          <tr>
                            <td width="20%"><b>ราคาขาย</b></td>
                            <td><span class="text-red">545.00 บาท</span></td>
                          </tr>
                        </tbody>
                      </table>

                      <p>คัดสรรรังนกแท้เกรดคุณภาพด้วยเทคโนโลยีเฉพาะของแบรนด์ ทำให้ได้ชิ้นรังนกสีขาวนวล ผสานด้วยน้ำมะพร้าวจากธรรมชาติ ให้คุณได้ดื่มด่ำรังนกแท้พร้อมความหอม หวานอร่อยจากน้ำมะพร้าวธรรมชาติ</p>
                      <p>คัดสรรรังนกแท้เกรดคุณภาพด้วยเทคโนโลยีเฉพาะของแบรนด์ ทำให้ได้ชิ้นรังนกสีขาวนวล ผสานด้วยน้ำมะพร้าวจากธรรมชาติ ให้คุณได้ดื่มด่ำรังนกแท้พร้อมความหอม หวานอร่อยจากน้ำมะพร้าวธรรมชาติ</p>
                      <p>คัดสรรรังนกแท้เกรดคุณภาพด้วยเทคโนโลยีเฉพาะของแบรนด์ ทำให้ได้ชิ้นรังนกสีขาวนวล ผสานด้วยน้ำมะพร้าวจากธรรมชาติ ให้คุณได้ดื่มด่ำรังนกแท้พร้อมความหอม หวานอร่อยจากน้ำมะพร้าวธรรมชาติ</p>
                      <p>คัดสรรรังนกแท้เกรดคุณภาพด้วยเทคโนโลยีเฉพาะของแบรนด์ ทำให้ได้ชิ้นรังนกสีขาวนวล ผสานด้วยน้ำมะพร้าวจากธรรมชาติ ให้คุณได้ดื่มด่ำรังนกแท้พร้อมความหอม หวานอร่อยจากน้ำมะพร้าวธรรมชาติ</p>



                    </div>

                    <div class="clearfix"></div>
                    <br>
                    <div class="col-md-12">
                      <ul> 
                        <li>ยอดขายดีอันดับ 1 ในไทยและฮ่องกง</li>
                        <li>กว่า 157 ขั้นตอน ในการผลิตและการตรวจสอบคุณภาพ เพื่อให้มั่นใจได้ว่าจะได้แต่รังนกแท้คุณภาพดีเท่านั้น</li>
                        <li>ไม่เจือสีสังเคราะห์ ไม่ใช้วัตถุกันเสีย</li>
                        <li>ดื่มด่ำรังนกแท้พร้อมความหอม หวาน อร่อยจากน้ำมะพร้าวจากธรรมชาติ</li>
                      </ul>


                      <h6>ข้อมูลผลิตภัณฑ์</h6>


                      <ul> 
                        <li>นับตั้งแต่ปี 1982 แบรนด์รังนกแท้ได้ส่งออกเครื่องดื่มรังนกแท้เกรดคุณภาพไปสู่หลายทวีปทั่วโลกทั้งเอเซีย อเมริกาเหนือ ออสเตรเลีย และยุโรปจนเป็นที่ชื่นชอบและวางใจของทุกๆ คน</li>
                        <li>คัดสรรเฉพาะรังนกแท้ ซึ่งเป็นที่ยอมรับกันในวงการของผู้เชี่ยวชาญด้านรังนกว่า เป็นรังนกแท้เกรดคุณภาพ</li>
                        <li>เนื้อรังนกมีสีขาวนวล และรสชาตินุ่มละมุน เปรียบประดุจของขวัญล้ำค่าจากธรรมชาติ</li>
                        <li>นำมาผ่านกระบวนการตรวจสอบด้วยเครื่องตรวจเอกลักษณ์เฉพาะรังนกแท้ เพื่อให้มั่นใจได้ว่าจะได้แต่รังนกแท้คุณภาพดีเท่านั้น</li>
                        <li>พิถีพิถันทุ่มเทกว่า 157 ขั้นตอน ในการผลิตและการตรวจสอบคุณภาพ</li>
                        <li>หวานอร่อยด้วยน้ำตาลกรวด ไม่เจือสีสังเคราะห์ ไม่ใช้วัตถุกันเสีย</li>
                        <li>สามารถเก็บไว้ได้นานโดยไม่ต้องแช่เย็น ช่วยประหยัดเวลาในการเตรียมรังนกของคุณ เมื่อเปิดแล้วควรดื่มให้หมดทันที</li>
                      </ul>


                      <h6>เหมาะสำหรับ</h6>

                      <ul>
                        <li>ผู้ที่ต้องการดูแลสุขภาพร่างกาย ทั้งผู้หญิงและผู้ชาย</li>
                      </ul>

                      <h6>แนะนำให้ทาน</h6>
                      <ul>
                        <li>ดื่มได้ทั้งเย็นและอุ่นร้อน ดื่มอร่อยได้หลากหลายวิธีทั้งอุณหภูมิปกติ แช่เย็น หรือผสมน้ำอุ่น และสามารถเก็บไว้ได้นานโดยไม่ต้องแช่เย็น จึงช่วยประหยัดเวลาในการเตรียมรังนกของคุณ</li>
                      </ul>

                      <a class="text-blue" href="https://www.cw.in.th/" title="แบรนด์รังนกแท้สูตรน้ำมะพร้าว" target="_blank">#แบรนด์รังนกแท้สูตรน้ำมะพร้าว</a>
                      <a class="text-blue" href="https://www.cw.in.th/" title="แบรนด์รังนกแท้สูตรน้ำมะพร้าว" target="_blank">#แบรนด์รังนกแท้สูตรน้ำมะพร้าว</a>
                      <a class="text-blue" href="https://www.cw.in.th/" title="แบรนด์รังนกแท้สูตรน้ำมะพร้าว" target="_blank">#แบรนด์รังนกแท้สูตรน้ำมะพร้าว</a>
                      <a class="text-blue" href="https://www.cw.in.th/" title="แบรนด์รังนกแท้สูตรน้ำมะพร้าว" target="_blank">#แบรนด์รังนกแท้สูตรน้ำมะพร้าว</a>
                      <a class="text-blue" href="https://www.cw.in.th/" title="แบรนด์รังนกแท้สูตรน้ำมะพร้าว" target="_blank">#แบรนด์รังนกแท้สูตรน้ำมะพร้าว</a>
                      <a class="text-blue" href="https://www.cw.in.th/" title="แบรนด์รังนกแท้สูตรน้ำมะพร้าว" target="_blank">#แบรนด์รังนกแท้สูตรน้ำมะพร้าว</a>
                    </div>

                    <div class="clearfix"></div>
                    <br>
                    <div class="clearfix"></div>


                    <div class="col-md-12">
                     <h5><i class="fas fa-video text-red"></i> วีดีโอ</h5>
                   </div>

                   <div class="col-md-6">
                     
                    <br>

                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mgS3fguc8Es" frameborder="0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
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

                  <style type="text/css">
                    .fb-comments.fb_iframe_widget,
                    .fb_iframe_widget span,
                    .fb_iframe_widget span iframe {
                      width: 100% !important;
                    </style>


                    <div class="col-md-12">
                      <div class="fb-comments" data-numposts="5" data-colorscheme="light"></div>


                      <br>

                    </div>






                  </div>


                </div>

                <div class="col-lg-3 col-md-12">


                  <div class="row">


                    <div class="col-lg-12 col-md-6 col-sm-12">

                      <div class="d-box-link-in">
                        <h2 class="h4 ma-0">สินค้าเเเนะนำที่เกี่ยวข้อง</h2>
                      </div>
                      <div id="o-banner" class="owl-carousel owl-theme">


                        <?php for($i=1;$i<=3;$i++){?>


                          <div class="item">


                            <a href="product-detail.php" class="thumbnail ma-0" title="แบรนด์รังนกแท้ สูตรน้ํามะพร้าว">
                              <img src="upload/product01.jpg" alt="">
                              <div class="caption">
                                <div class="text-center">
                                  <h4>แบรนด์รังนกแท้ สูตรน้ํามะพร้าว
                                  </h4>
                                </div>
                                <p>ด้วยกรรมวิธีการผลิตคุณภาพสูงจากบริษัท CPF ทำให้คุณมั่นใจได้ในคุณภาพ ของสินค้า คงคุณค่าอย่างครบถ้วน สะอาด ถูกหลักอนามัย </p>
                              </div>
                              <div class="text-right">
                                <p class="ma-0"><span class="btn btn-warning">ดูรายละเอียด</span></p>
                                
                              </div>
                            </a>





                          </div>


                        <?php } ?>

                      </div>



                      <br>

                    </div>



                    <div class="col-lg-12 col-md-6 col-sm-12">

                      <div class="d-box-link-in">
                        <h2 class="h4 ma-0">สินค้าเเเนะนำล่าสุด</h2>
                      </div>
                      <div id="o-banner2" class="owl-carousel owl-theme">


                        <?php for($i=1;$i<=3;$i++){?>


                          <div class="item">


                           <a href="product-detail.php" class="thumbnail ma-0" title="แบรนด์รังนกแท้ สูตรน้ํามะพร้าว">
                            <img src="upload/product01.jpg" alt="">
                            <div class="caption">
                              <div class="text-center">
                                <h4>แบรนด์รังนกแท้ สูตรน้ํามะพร้าว
                                </h4>
                              </div>
                              <p>ด้วยกรรมวิธีการผลิตคุณภาพสูงจากบริษัท CPF ทำให้คุณมั่นใจได้ในคุณภาพ ของสินค้า คงคุณค่าอย่างครบถ้วน สะอาด ถูกหลักอนามัย </p>
                            </div>
                            <div class="text-right">
                              <p class="ma-0"><span class="btn btn-warning">ดูรายละเอียด</span></p>
                              
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

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2"></script>

<?php include("bt.php");?>
</body>

</html>