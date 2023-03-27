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
    <h2 class="h2"><img src="images/icon_logo.png"> ฝากบทความ</h2>
    <br>
    <div class="row">



      <div class="col-md-2"></div>
      <div class="col-md-8">


        <div class="book-appointment">
          <div class="book-form agileits-login">
            <form action="#" method="post">
              <div class="row">






                <div class="col-lg-8 col-sm-8">
                  <div class="book_date form-group-custom">
                    <label><span class="text-red">*</span> หัวข้อบทความ(ไม่เกิน 80 ตัวอักษร) : </label>
                    <input name="Text" type="text" value="" required="">
                  </div>
                </div>
                <div class="clearfix"></div>







                <div class="col-lg-8">

                  <div class="book_date form-group-custom">
                    <label><span class="text-red">*</span> ภาพหน้าปก(กรุณาใช้รูปภาพขนาดประมาณ 408 x 197 pixels) :
                    </label>
                  </div>



                  <div class="row">


                    <div class="col-md-5">
                      <div style="margin-bottom:10px">
                        <img class="img-responsive thumbnail padding-bot5" src="upload/service00.jpg" alt="preview"
                          id="preview">
                        <!-- <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash"></span>
                                    Delete</a> -->
                      </div>
                    </div>

                    <div class="col-md-7">
                      <div class="book-form agileits-login">

                        <div class="book_date book_date-costom-i">
                          <i class="fas fa-file-upload "></i>
                          <input name="Text" type="file" value="" onfocus="this.value = '';" required="">
                        </div>

                        <p class="text-red">อัพโหลดได้เฉพาะไฟล์รูปภาพประเภท jpg png และมีขนาดไม่เกิน 2 Mb</p>

                      </div>
                    </div>


                  </div>


                </div>

                <div class="col-sm-12">


                  <div class="book_date">

                    <label><span class="text-red">*</span> รายละเอียดย่อย :</label>

                  </div>
                  <div class="form-text">
                    <textarea id="datepicker1" name="Text" type="text" placeholder=""></textarea>
                  </div>


                </div>

                <div class="clearfix"></div>


                <div class="col-lg-12 col-sm-12">
                  <div class="book_date form-group-custom">
                    <label><span class="text-red">*</span> รายละเอียด : </label>
                    <textarea class="tiny" name="Text" type="text" placeholder="ระบุข้อความ"></textarea>
                  </div>
                </div>
                <div class="clearfix"></div>
                <br>




                <div class="clearfix"></div>


                <div class="col-lg-8">

                  <div class="book_date form-group-custom">
                    <label>ภาพแกลลอรี่(กรุณาใช้รูปภาพหขนาดไม่เกิน 2 Mb) : </label>
                  </div>


                  <div id="add_row">

                    <div class="row" id="images_row_0">


                      <div class="col-md-5">
                        <div style="margin-bottom:10px">
                          <img class="img-responsive thumbnail padding-bot5" src="upload/service00.jpg" alt="preview"
                            id="preview_0">
                          <!-- <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash"></span>
                                    Delete</a> -->
                        </div>

                      </div>

                      <div class="col-md-7">


                        <div class="book-form agileits-login">

                          <div class="book_date book_date-costom-i">
                            <i class="fas fa-file-upload "></i>
                            <input name="Text" type="file" name="imagesName[]" class="check_fileimage" value=""
                              onfocus="this.value = '';" required="">
                          </div>



                          <p class="text-red">อัพโหลดได้เฉพาะไฟล์รูปภาพประเภท jpg png</p>



                        </div>


                        <!-- <div class="text-right">
<button onclick="remove_rows(0)" type="button" class="btn btn-primary">ลบ</button>
</div> -->


                      </div>
                    </div>




                  </div>

                </div>


                <div class="clearfix"></div>
                <div class="col-md-12">
                  <button onclick="addRowimage();" type="button" class="btn btn-warning"><span
                      class="fas fa-plus-circle"></span>
                    เพื่มรูปภาพ</button>
                </div>



                <div class="clearfix"></div>
                <br>


                <div class="col-lg-8">

                  <div class="book_date form-group-custom">
                    <label>วีดีโอ (Youtube iframe VDO) : </label>
                  </div>


                  <div id="add_row-vdo">
                    <div class="row" id="vdo_row_0">



                      <div class="col-xs-10">


                        <div class="book-form agileits-login">

                          <div class="book_date book_date-costom-i">
                            <i class="fas fa-file-video"></i>
                            <input name="Text" type="Text" name="vdosName[]" class="check_filevdo" value=""
                              onfocus="this.value = '';" required="">
                          </div>

                        </div>


                      </div>


                      <div class="col-xs-2">
                        <!-- <div class="text-right">
<button onclick="vdoremove_rows(0)" type="button" class="btn btn-primary">ลบ</button>
</div> -->
                      </div>



                    </div>
                  </div>



                </div>


                <div class="clearfix"></div>
                <div class="col-md-12">
                  <button onclick="addRowvdo();" type="button" class="btn btn-warning"><span
                      class="fas fa-plus-circle"></span>
                    เพื่มวีดีโอ</button>
                </div>



                <div class="clearfix"></div>
                <br>


                <div class="col-lg-4 col-sm-6">
                  <div class="book_date form-group-custom">
                    <label><span class="text-red">*</span> ผู้ลงประกาศ(ชื่อ หรือนามแฝง) : </label>
                    <input name="Text" type="text" value="" required="">
                  </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-12">
                  <img src="images/Captcha-demo.gif" width="280" height="76" alt="">
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-md-12 col-sm-12">
                  <div class="book_date form-group-custom">
                    <label>เมื่อลงประกาศเรียบร้อยแล้ว ถือว่าคุณได้ยอมรับ <u><a href="" target="_blank" class="text-info"
                          data-toggle="modal" data-target="#myModal">เงื่อนไข และข้อตกลง</a></u> แล้ว</label>
                    <div class="clearfix"></div>
                    <input type="submit" value="ลงประกาศ">
                    <input type="submit" value="ล้างข้อมูล">
                  </div>
                </div>


              </div>
            </form>
          </div>
        </div>


      </div>
      <div class="col-md-2"></div>







    </div>
  </div>

  <div class="clearfix"></div>
  <br>









  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="far fa-times-circle"></i></button>
          <h4 class="modal-title">เงื่อนไข และข้อตกลงในการใช้บริการ</h4>
        </div>
        <div class="modal-body">
          <p class="text-warning">"servicebythai.com" ต่อไปนี้เรียกว่า "ผู้ให้บริการ" และ "ผู้ลงประกาศ" ต่อไปนี้เรียกว่า
            "ผู้ใช้บริการ"</p>

          <p>เงื่อนไขและข้อตกลงต่อไปนี้ มีผลบังคับใช้ทันทีที่ผู้ใช้บริการเริ่มต้นใช้บริการ (ลงประกาศ) กับผู้ให้บริการ
            ซึ่งผู้ให้บริการได้ประกาศเอาไว้บนหน้าเว็บไซต์ อย่างชัดเจน และเมื่อผู้ใช้บริการยอมรับข้อตกลงและเงื่อนไข
            การให้บริการจากทางเราแล้ว ผู้ใช้บริการต้องปฎิบัติตามกฎระเบียบที่กำหนดไว้อย่างเคร่งครัด</p>

          <p>หากผู้ใช้บริการละเมิดข้อตกลงดังกล่าวด่านล้างนี้ ทำให้เกิดความเสียหาย ทางผู้ให้บริการ
            จะทำการลบประกาศของท่านออกโดยมิต้องแจ้งให้ทราบล่วงหน้า</p>


          <p><u><b>ผู้ให้บริการ ไม่อนุญาติ ให้ผู้ใช้บริการ ลงประกาศมีเนื้อหาเข้าข่ายดังต่อไปนี้</b></u></p>

          <ol>
            <li>
              ขายบริการทางเพศ รวมทั้งเว็บไซต์ที่มีลิงค์ไปยังเว็บไซต์ที่เกี่ยวกับสื่อลามก
            </li>
            <li>
              Hacker , Warez , Crack, เผยแพร่ไวรัส หนอนอินเตอร์เน็ต ทอร์จัน หรืออื่นๆ ที่เกี่ยวข้องกับซอฟท์แวร์ผิดกฏหมาย
            </li>
            <li>
              ประกาศมีเนื้อหาเกี่ยวกับ การพนัน ทุกประเภท
            </li>
            <li>
              ประกาศที่มีเนื้อหาเกี่ยวกับการ Download, MP3 , Software , VDO &amp; Voice Clips , Music Online
              ที่ถูกต้องตามกฎหมายและผิดกฏหมายทุกประเภท ซึ่งรวมไปถึงนามสกุลไฟล์อื่นๆ ที่พยายามหลบเลี่ยงด้วยก็ตาม
            </li>
            <li>
              ละเมิดเครื่องหมายการค้า ลิขสิทธิ หรือ ทรัพย์สินทางปัญญา ของผู้อื่นหรือคณะบุคคลอื่นในทุกประเทศทั่วโลก
            </li>
            <li>
              การขู่คุกคาม การโกง การแจ้งข้อมูลอันเป็นเท็จ เผยแพร่สิ่งหยาบคาย ยาเสพติด
            </li>
            <li>
              ประกาศซึ่งงนำมาถึงความเสื่อมเสียให้แก่ผู้ให้บริการ
            </li>
            <li>
              กิจกรรมใดๆ ของผู้ใช้บริการที่ก่อให้เกิดการฝ่าฝืนกฏหมายไทย ระหว่างประเทศ หรือ ทำให้เกิดความวุ่นวายต่อสถาบัน
              ชาติ ศาสนา พระมหากษัตริย์ หรือ สังคมทั่วไป ในทุกประเทศ ทางผู้ให้บริการ ขอปฏิเสธความรับผิดชอบแก่ประกาศนั้น
              จะไม่รับผิดชอบใดๆทั้งสิ้น พร้อมทั้งอาจจะฟ้องร้องเรียกค่าเสียหายที่เกิดขึ้น
              โดยขึ้นอยู่กับการพิจารณาเบื้องต้นจากผู้ให้บริการ
            </li>
            <li>
              ผู้ให้บริการ ขอปฏิเสธการรับผิดชอบในกรณีที่ข้อมูลภายในเว็บไซต์นั้นสูญหายไปไม่ว่า กรณีใดๆ
              หรือเนื่องจากความผิดพลาดของอุปกรณ์ ถึงแม้ว่าเราจะมีบริการสำรองข้อมูลทุกสัปดาห์
              แต่ก็ไม่สามารถรับประกันได้ว่า ข้อมูลนั้นจะมีความถูกต้องครบถ้วนในกรณีที่อุปกรณ์เกิดความผิดพลาด
              หรือจากเหตุสุดวิสัยอื่นใด
            </li>
            <li>
              การใช้บริการ จะต้องมีวัตถุประสงค์ที่ชอบด้วยกฎหมายเท่านั้น
              และจะต้องไม่ใช้ส่งเสริมหรือสนับสนุนต่อการกระทำหรือกิจกรรมใดที่เป็นการไม่ ชอบด้วยกฎมาย การใช้บริการ
              จะต้องเป็นการใช้ในการติดต่อสื่อสารที่เกี่ยวกับธุรกิจ การค้า การศึกษา การวิจัยและการพัฒนา
              การเผยแพร่ข้อมูลหรือข่าวสารใดซึ่งไม่ผิดต่อกฎหมายหรือระเบียบใด ๆ ที่ถือเป็นการต้องห้าม เช่น
              การละเมิดลิขสิทธิ์ของผู้อื่น การข่มขู่หรือลามกอนาจาร ข้อมูลข่าวสารที่ถือเป็นความลับทางการค้า เป็นต้น
              ในกรณีที่มีการกระทำดังกล่าวเกิดขึ้น ผู้ใช้บริการซึ่งได้กระทำการเช่นนั้น จะต้องชดใช้ค่าเสียหายต่าง ๆ
              ที่เกิดขึ้นแก่ผู้ให้บริการ หรือผู้ที่ได้รับความเสียหายนั้นทั้งสิ้น
              ผู้ใช้บริการยอมรับว่าหากถูกบุคคลอื่นฟ้องร้องหรือกล่าวหาว่ากระทำผิดกฎหมาย
              หรือกระทำละเมิดต่อบุคคลอื่นอันเนื่องมาจากการใช้บริการ ผู้ใช้บริการจะปกป้องและคุ้มครองผู้ให้บริการ
              ไม่ให้รับผิดต่อบุคคลอื่นนั้น ไม่ว่ากรณีใด ๆ ทั้งสิ้น
            </li>
            <li>
              ผู้ใช้บริการสัญญาว่าจะใช้บริการ ในลักษณะมีความประพฤติดี (Net Etiquette)
              ไม่ขัดต่อความสงบเรียบร้อยหรือศีลธรรมอันดีของประชาชน อาทิเช่น ไม่ละเมิดความเป็นส่วนตัวของผู้อื่น
              ไม่ใช้ภาษาไม่สุภาพ ไม่เผยแพร่ข้อความที่ทำให้ผู้อื่นเสียหายออกไปยังที่สาธารณะ
            </li>
            <li>
              ผู้ให้บริการมีสิทธิที่จะเก็บ วิเคราะห์ หรือนำสถิติการใช้ข้อมูลที่เกิดจากการใช้บริการ
              ไปใช้โดยไม่ต้องขออนุญาตจากผู้ใช้บริการก่อน
            </li>
            <li>
              ผู้ใช้บริการสัญญาว่าจะปฏิบัติตามเงื่อนไข กฎ ระเบียบ คำแนะนำที่ผู้ให้บริการกำหนดขึ้น
              เพื่อให้สอดคล้องกับนโยบายของผู้ให้บริการ และที่จะกำหนดต่อมาในอนาคต
            </li>
            <li>
              หากเกิดกรณีพิพาทไม่ว่าเรื่องใดๆ ก็ตาม คำตัดสินของ ผู้ให้บริการ ถือเป็นที่สุด
            </li>
          </ol>

          <br>
          <p class="text-red">หากมีการกระทำละเมิดหรือความประพฤติที่เสียหายโดยผู้ใช้บริการแล้ว
            ผู้ใช้บริการยอมรับว่าเป็นความรับผิดชอบของผู้ใช้บริการแต่เพียงฝ่ายเดียว
            ผู้ให้บริการไม่มีส่วนร่วมหรือรับรู้ในการกระทำหรือความประพฤตินี้แต่อย่างใด</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>





  <script>
    function vdoremove_rows(e) {
      $('#vdo_row_' + e).remove();
    }

    function addRowvdo() {
      var i = $('.check_filevdo').length;
      // alert(i);
      i++;

      var markup = '' +


        '<div class="row" id="vdo_row_' + i + '" style="display:none;">' +


        '<div class="col-xs-10">' +
        '<div class="book-form agileits-login">' +

        '<div class="book_date book_date-costom-i">' +
        '<i class="fas fa-file-video"></i>' +
        '<input name="Text" name="vdosName[]" type="Text" class="check_filevdo" value="" onfocus="this.value =null " required="">' +
        '</div>' +


        '</div>' +
        '</div>' +

        '<div class="col-xs-2">' +
        '<div class="text-right">' +
        '<button onclick="vdoremove_rows(' + i +
        ')" type="button" class="btn btn-primary"><span class="fas fa-trash-alt"></span> ลบ</button>' +
        '</div>' +
        '</div>' +


        '</div>';

      // console.log(markup);
      $('#add_row-vdo').append(markup);
      $('#vdo_row_' + i).fadeIn();

    }
  </script>

  <script>
    function remove_rows(e) {
      $('#images_row_' + e).remove();
    }

    function addRowimage() {
      var i = $('.check_fileimage').length;
      // alert(i);
      i++;

      var markup = '' +


        '<div class="row" id="images_row_' + i + '" style="display:none;">' +
        '<div class="col-md-5">' +
        '<div style="margin-bottom:10px">' +
        '<img class="img-responsive thumbnail padding-bot5" src="upload/service00.jpg" alt="preview" id="preview_' + i +
        '">' +

        '</div>' +

        '</div>' +

        '<div class="col-md-7">' +
        '<div class="book-form agileits-login">' +

        '<div class="book_date book_date-costom-i">' +
        '<i class="fas fa-file-upload "></i>' +
        '<input name="Text" name="imagesName[]" type="file" class="check_fileimage" value="" onfocus="this.value =null " required="">' +
        '</div>' +

        '<p class="text-red">อัพโหลดได้เฉพาะไฟล์รูปภาพประเภท jpg png</p>' +

        '</div>' +

        '<div class="text-right">' +
        '<button onclick="remove_rows(' + i +
        ')" type="button" class="btn btn-primary"><span class="fas fa-trash-alt"></span> ลบ</button>' +
        '</div>' +
        '</div>' +
        '</div>' +

        '</div>';

      // console.log(markup);
      $('#add_row').append(markup);
      $('#images_row_' + i).fadeIn();

    }
  </script>
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
  <script src="tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: '.tiny',
      menubar: false,
      force_br_newlines: true,
      force_p_newlines: false,
      forced_root_block: '',
      height: 250,
      //width : 1100,
      plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor colorpicker layer textpattern"
      ],
      toolbar: 'insertfile undo redo | table | styleselect fontselect fontsizeselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | print nonbreaking hr emoticons code',
    });
  </script>

  <script src="js/header.js"></script>
  <?php include("bt.php");?>
</body>

</html>