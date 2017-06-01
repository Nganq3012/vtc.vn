<?php
require "lib/dbCon.php"; 
require "lib/chitiettin.php";
if(isset($_GET["idTin"]))
 { $idTin=$_GET["idTin"];
   settype($idTin,"int");
}
else
  $idTin=1;


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head prefix="og: http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#">
      <link rel="shortcut icon" href="/favicon.ico" />
      <link rel="amphtml" href="http://www.phapluatplus.vn/news/4617.amp">
      <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-68148973-1', 'auto');
         ga('send', 'pageview');
         
      </script>
      <meta name="eclick_verify" content="dFFUXlYXLRcYGVlEahMECBMHMAIYGQ8eNk0aBw=="/>
      <link rel="stylesheet" type="text/css" href="/lib/explus/explus.css?v=0" />
      <title>''Mổ xẻ'' bài thuốc nam chữa khỏi bệnh trĩ bằng Đông y ở Việt Nam</title>
      <link rel="stylesheet" href="http://www.phapluatplus.vn/templates/themes/css/bootstrap.min.css?v=1.1.5" type="text/css" media="all" />
      <link rel="stylesheet" type="text/css" href="http://www.phapluatplus.vn/templates/themes/css/style.css?v=1.1.5"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   </head>
   <body>
      <header>
      <div class="details">
         <div class="pull-left" style="width: calc(100% - 300px - 20px);">
           <!--  <ul id="breaknews" style="display: none;">
               <li>
                  <h2 class="title">
                  <a href="http://www.phapluatplus.vn/lien-hop-quoc-len-an-trieu-tien-thu-ten-lua-d43307.html" class="" title="Liên Hợp Quốc lên án Triều Tiên thử tên lửa">Liên Hợp Quốc lên án Triều Tiên thử tên lửa</a></h2 class="title">
               </li>
               <li>
                  <h2 class="title">
                  <a href="http://www.phapluatplus.vn/trieu-tien-cong-bo-loat-anh-thu-ten-lua-moi-nhat-d43256.html" class="" title="Triều Tiên công bố loạt ảnh thử tên lửa mới nhất">Triều Tiên công bố loạt ảnh thử tên lửa mới nhất</a></h2 class="title">
               </li>
               <li>
                  <h2 class="title">
                  <a href="http://www.phapluatplus.vn/jennifer-pham-do-sac-cung-la-thanh-huyen-va-truong-quynh-anh-sau-khi-sinh-con-thu-3-d43221.html" class="" title="Jennifer Phạm đọ sắc cùng Lã Thanh Huyền và Trương Quỳnh Anh sau khi sinh con thứ 3">Jennifer Phạm đọ sắc cùng Lã Thanh Huyền và Trương Quỳnh Anh sau khi sinh con thứ 3</a></h2 class="title">
               </li>
            </ul>
            --> <article class="pull-left" style="width: calc(100% - 160px - 20px)">
               
               <?php
                  require "block2/content_main.php"; 
                  ?>
            </article>
            <?php
               require "block2/tin_lienquan_left.php"; 
                            ?>
            <div class="clearfix"></div>
            <?php
               require "block2/tin_lienquan_bottom.php"; 
                            ?>
         </div>
         <div class="col-fixed-300 pull-right">
            <div style="text-align:center;margin-top:0px;margin-bottom:0px;">
               <div style="width:300px;height:250px;">
                  <script type="text/javascript" src="//media1.admicro.vn/ads_codes/ads_box_38749.ads"></script>
               </div>
            </div>
            <div class="space20"></div>
            <style>
               .box-paper {position: relative;}
               .box-paper .bx-controls .bx-prev {display: inline-block; width: 24px; height: 30px; position: absolute; left: 0; top: 34%; background: url('/templates/themes/images/slide-button-trans.png') no-repeat;}
               .box-paper .bx-controls .bx-next {display: inline-block; width: 24px; height: 30px; position: absolute; right: 0; top: 34%; background: url('/templates/themes/images/slide-button-trans.png') -14px 0 no-repeat;}
            </style>
            <?php
               require "block2/qcao_left_2.php"; 
               ?>
            <?php
               require "block2/doc_nhieu.php"; 
               ?>
            <div style="display:inline-block;width:300px;margin-left:0px;margin-right:0px;"></div>
            <?php
               require "block2/tin_rao_vat.php"; 
               ?>
            <div style="text-align:center;margin-top:8px;margin-bottom:0px;">
               <div style="margin-top:0px;width:300px;height:600px;">
                  <script type="text/javascript" src="upload/quangcao/ic_music.png"></script>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <style>
         #list-ttdn {margin-top: 13px;}
         .ttdn .bx-wrapper {padding: 0 30px;}
         .ttdn .bx-viewport {min-height: 200px;}
         .ttdn .bx-controls .bx-prev {display: inline-block; width: 24px; height: 30px; position: absolute; left: 0; top: 31%; background: url('/templates/themes/images/slide-button.jpg') no-repeat;}
         .ttdn .bx-controls .bx-next {display: inline-block; width: 24px; height: 30px; position: absolute; right: 0; top: 31%; background: url('/templates/themes/images/slide-button.jpg') -18px 0 no-repeat;}
      </style>
      <?php
         require "block2/vanhoa_bottom.php"; 
         ?>
      </div>
      </main>
      <script type="text/javascript">
         ga('send', 'event', 'category_17', 'Explorer', 'Giáo dục - Sức khỏe');
      </script>
      <div class="scroll-top-wrapper ">
         <span class="scroll-top-inner">
         <i class="fa fa-2x fa-arrow-circle-up"></i>
         </span>
      </div>
   </body>
   <script type="text/javascript" src="http://www.phapluatplus.vn/templates/themes/js/jquery.min.js"></script>
   <script src="/lib/explus/jquery.twentytwenty.js" type="text/javascript"></script>
   <script src="/lib/explus/jquery.event.move.js" type="text/javascript"></script>
   <script src="/lib/explus/jquery.exslider.js" type="text/javascript"></script>
   <script src="/lib/explus/explus.js" type="text/javascript"></script><script type="text/javascript" src="http://www.phapluatplus.vn/templates/themes/js/jquery.webticker.js"></script>
   <link rel="stylesheet" type="text/css" href="http://www.phapluatplus.vn/templates/themes/css/webticker.css" />
   <script type="text/javascript" src="http://www.phapluatplus.vn/templates/themes/js/jquery.bxslider.js"></script>
   <link type="text/css" href="http://www.phapluatplus.vn/templates/themes/css/jquery.bxslider.css" />
   <script type="text/javascript" src="http://www.phapluatplus.vn/templates/themes/js/script.js?v=1.1.5"></script>
</html>

