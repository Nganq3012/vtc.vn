<?php 
//tin lien quan left + quang cao
require "lib/trangchu.php";
if(isset($_GET["idTin"]) and isset($_GET["idLT"]))
 { $idTin=$_GET["idTin"];
   $idLT=$_GET["idLT"];
   settype($idTin,"int");
   settype($idLT,"int");
     
}
else{
  $idTin=1;
  $idLT=1;
  
}
?>
            <div class="col-fixed-160 pull-right">
               <div class="related-letter">TIN LIÊN QUAN</div>
               <ul class="list-related">
<?php 

         $TinTheoLoai_4Tin=TinLienQuan_10Tin($idTin,$idLT);
         while($row_TinTheoLoai_4Tin=mysqli_fetch_assoc($TinTheoLoai_4Tin)){

            ?>
                  <li>
                     <h3 class="title">
                     <a href="index2.php?idLT=<?php echo  $row_TinTheoLoai_4Tin['idLT']?>&idTin=<?php echo  $row_TinTheoLoai_4Tin['idTin'];?>" class="" title="<?php echo  $row_TinTheoLoai_4Tin['TieuDe'];?>"><?php echo  $row_TinTheoLoai_4Tin['TieuDe'];?></a></h3 class="title">                        
                  </li>
<?php 
         }
         ?>
                  
               </ul>
               <div style="text-align:center;margin-top:0px;margin-bottom:0px;">
                  <div style="width:160px;height:600px;">
                     <script type="text/javascript" src="//media1.admicro.vn/ads_codes/ads_box_38751.ads"></script>
                  </div>
               </div>
               <div class="related-letter" style="margin-top: 23px;"><a href="http://www.phapluatplus.vn/multimedia-plus/">Video xem nhiều</a></div>
              



 <?php
      require "block2/multi.php"; 
      ?>

               <div style="text-align:center;margin-top:0px;margin-bottom:0px;">
                  <div style="width:160px;height:300px;"><a href="" target="_blank" rel="nofollow"><img src="upload/quangcao/ic_music.png" alt="Pháp Luật Plus" /></a></div>
               </div>
            </div>