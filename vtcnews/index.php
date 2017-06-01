<?php
//dung bien session de luu tru login thanh cong
//idUsers hoten  username idgroup tao ra 4 sesssion
session_start();
require "lib/dbCon.php"; 
require "lib/trangchu.php";
/*if(isset($_GET["p"]))
 { $p=$_GET["p"];

}
else
  $p="";*/
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="vi"/>

  <title>VTC News: Tin tức 24h trong ngày - Đọc báo điện tử mới nhất hôm nay</title>

  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link href="css/exp.css" rel="stylesheet" type="text/css" />
  <div id="abdMasthead" style="margin:0 auto; width:970px"></div>
  <link rel="alternate" href="/nb.rss" type="application/atom+xml" title="Bài nổi bật" />
</head>
<body>
  

  <?php
  require "block/menu_left.php"; 
  ?>
  <!-- /#cssmemu --><div class="wrapper">
  <div id="header-sticky-wrapper" class="sticky-wrapper">
    <div id="header">
      <?php
      require "block/header_menu.php"; 
      ?>
    </div>
  </div><div class="news_hot pkg">
  <?php
  require "block/maraquee_hot.php"; 
  ?>
  <ul class="fr list_weather">
    <li style="float: right;"><a title="Sự kiện nóng trong ngày" href="/su-kien-nong/">SỰ KIỆN HOT</a></li>
    <li style="float: right; margin: 0;">HOTLINE: MB - 01255911911, MN - 0911848186</li>
  </ul>
  <div style="clear: both;"></div>
</div>
<div class="ads marbottom15"></div>
<div class="content_home pkg home-wrap-1">
  <div class="col100per fl">
    <div class="mar300 pkg box_comtent_home" style="margin-bottom: 0;">
      <?php
      require "block/top_trangchu.php"; 
      ?>
      <div class="col20per fl">
        <div class="head_bar pkg">
          <span class="f14 pkg">
            <span class="divblock">
              <span class="bullet_white"></span>
              <span class="fl">TIN Mới nhất</span>
              <span class="bullet_white"></span>
            </span>
          </span>
        </div>
        <?php
        require "block/tin_news.php"; 
        ?>


      </div></div>
    </div>

  </div></div>
</div>


<div class="adv" style="margin-top:8px;margin-bottom:13px;"><div class="e" style="">
</div></div>
<div class="content_home pkg" style="margin-left: 30px">
  <div class="col100per fl">

    <?php
    require "block/tin_xahoi.php"; 
    ?>

    <div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;">
      <?php
      require "block/tin_kinhte.php"; 
      ?>
      <?php
      require "block/thegioi.php"; 
      ?>


    </div>
    <?php
    require "block/tin_sport.php"; 
    ?>
    <div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;">

      <?php
      require "block/tin_oto.php"; 
      ?>

      <?php
      require "block/tin_baithuoc.php"; 
      ?>
    </div>
  </div>
  <div class="col300 fl">

    <div class="wrapper-weather">
     

      <div class="clear"></div></ul><p>Nguồn: Vietcombank</p></div><div style="margin-bottom: 13px;"></div>
      
      <?php
      require "block/event_hot.php"; 
      ?>
      <div class="adv" style="margin-top:0px;margin-bottom:15px;"><div class="e" style=""><!--- Script ANTS - 300x250 --> 
        <script async src="/e-vcdn.anthill.vn/delivery-ants/asset/1.0/ants.js"></script>
        <div class="583897076" data-ants-zone-id="583897076"></div>
        <!--- end ANTS Script --></div></div>
        <div class="box_300 pkg">

        <?php
        require "block/doanhnghiep.php"; 
        ?>
        <?php
        require "block/video_max.php"; 
        ?>
      </div>

    </div>
  </div>
  <div style="margin-left: 30px;">
  <?php
  require "block/giai_tri.php"; 
  ?>
  </div>
  <div class="content_home pkg">
    <div class="col100per fl">
      <div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;margin-left: 30px;">
        <?php
        require "block/phap_luat.php"; 
        ?>

        <?php
        require "block/giao_duc.php"; 
        ?>
      </div>
      <div style="margin-left: 30px;">
      <?php
      require "block/truyenhinh.php"; 
      ?>
      </div>
      <div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;margin-left: 30px;">
        <?php
        require "block/khoahoc.php"; 
        ?>
        <?php
        require "block/phong_su.php"; 
        ?>
      </div>
    </div>
    <div class="col300 fl">

      <?php
      require "block/tin_docnhieu.php"; 
      ?>

    </div>

  </div>
          

  <div class="content_home pkg marbottom20">
    <div class="content_home pkg ">
      <div class="col100per fl">
    
        <div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;margin-left: 30px;">
          <?php
          require "block/dia_oc.php"; 
          ?>

          <?php
          require "block/suc_khoe.php"; 
          ?>

        </div>
        <div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;margin-left: 30px;">
         <?php
         require "block/cam_nang_cuoc_song.php"; 
         ?>
          <?php
       require "block/song_dep.php"; 
       ?>

       </div>

       

     </div>

     <div class="col300 fl">
      <div class="adv" style="margin-top:0px;margin-bottom:0px;"><div class="e" style=""><a href="http://ads.vtc.vn/api/adv?id=459&demo&u=https%3A%2F%2Fwww.facebook.com%2F9shop18tamtrinh%2F" target="_blank" rel="nofollow"><img src="http://image.vtcns.com/files/qc/2017/04/20/banner 9shop hang thai .jpg" alt="" /></a></div></div></div>
    </div>
    <div class="adv" style="margin-top:0px;margin-bottom:0px;"></div><div id="advLeft"><div class="adv" style="margin-top:0px;margin-bottom:0px;"></div></div></div>
    <?php
    require "block/footer.php"; 
    ?>
    <!--<div style="height: 34px; width: 100%;"></div>-->
</div>
  </div>
</body>
</html>
