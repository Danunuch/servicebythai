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
    <h2 class="h2"><img src="images/icon_logo.png"> โฆษณากับเรา</h2>

    <h3 class="h4">สนใจลงโฆษณา ติดต่อ : <b class="text-red">genatt11@gmail.com</b></h3>

    <p>ท่านสามารถลงโฆษณากับเราในตำแหน่งพิเศษต่างๆ ได้ โดยในแต่ละตำแหน่งจะมีราคาที่แตกต่างกันออกไปค่ะ
      ซึ่งสามารถแบ่งออกเป็นประเภทต่างๆ ดังนี้</p>

    <div class="row">

<?php for($i=1;$i<=4;$i++){?>
      <div class="col-lg-12 col-md-12">

        <h4 class="page-header"><?=$i?>. หน้าแรก</h4>


        <div class="row">

          <div class="col-sm-8">
            <img class="img-responsive" src="upload/advertisement.png">
          </div>


          <div class="col-sm-4">


            <h5><i class="fas fa-tags text-red"></i> ตำแหน่ง <b class="text-blue">A.</b></h5>

            <table class="table table-striped">
              <tbody>
                <tr>
                  <td><b>การแสดงผล</b></td>
                  <td>เฉพาะหน้าแรก</td>
                </tr>
                <tr>
                  <td><b>รูปแบบ</b></td>
                  <td>รูปภาพ</td>
                </tr>
                <tr>
                  <td><b>ขนาด</b></td>
                  <td>120x120</td>
                </tr>
                <tr>
                  <td style="background: #39aec4;color: #ffffff;">
                    <div align="center">จำนวน</div>
                  </td>
                  <td style="background: #123c69;color: #ffffff;">
                    <div align="center">ราคา/บาท</div>
                  </td>
                </tr>
                <tr>
                  <td><b>1 เดือน</b></td>
                  <td>500</td>
                </tr>
                <tr>
                  <td><b>3 เดือน</b></td>
                  <td>1,400</td>
                </tr>
                <tr>
                  <td><b>6 เดือน</b></td>
                  <td>2,700</td>
                </tr>
                <tr>
                  <td><b>12 เดือน</b></td>
                  <td>5,000</td>
                </tr>
              </tbody>
            </table>



            <h5><i class="fas fa-tags text-red"></i> ตำแหน่ง <b class="text-blue">B.</b></h5>

            <table class="table table-striped">
              <tbody>
                <tr>
                  <td><b>การแสดงผล</b></td>
                  <td>เฉพาะหน้าแรก</td>
                </tr>
                <tr>
                  <td><b>รูปแบบ</b></td>
                  <td>รูปภาพ</td>
                </tr>
                <tr>
                  <td><b>ขนาด</b></td>
                  <td>120x120</td>
                </tr>
                <tr>
                  <td style="background: #39aec4;color: #ffffff;">
                    <div align="center">จำนวน</div>
                  </td>
                  <td style="background: #123c69;color: #ffffff;">
                    <div align="center">ราคา/บาท</div>
                  </td>
                </tr>
                <tr>
                  <td><b>1 เดือน</b></td>
                  <td>500</td>
                </tr>
                <tr>
                  <td><b>3 เดือน</b></td>
                  <td>1,400</td>
                </tr>
                <tr>
                  <td><b>6 เดือน</b></td>
                  <td>2,700</td>
                </tr>
                <tr>
                  <td><b>12 เดือน</b></td>
                  <td>5,000</td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>

      </div>
<?php } ?>

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



  <script src="js/header.js"></script>
  <?php include("bt.php");?>
</body>

</html>