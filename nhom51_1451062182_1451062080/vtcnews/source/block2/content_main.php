           
<?php 
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
$ChiTietTin=ChiTietTin($idTin);
$row_ChiTietTin=mysqli_fetch_array($ChiTietTin);

 ?>
<h1 id="btn_exp_edit" data-id="4617"><?php echo $row_ChiTietTin['TieuDe']; ?></h1>
               <div class="pull-left" style="display: inline-block; width: calc(100% - 300px);">
                  <span style="font-weight: 600; font-size: 12px;" class="pull-left">Tin nóng:</span>
               </div>
               <div class="reg-date">
                  <div class="pull-left">
                     <time><span class="icon_time"></span>&nbsp; <em>17:26 - 18/01/2016</em> &nbsp; | &nbsp;</time>
                     <a style="color: #145072; font-size: 13px;" href="index2.php?idLT=<?php echo  $row_ChiTietTin['idLT'];?>">Giáo dục - Sức khỏe</a>
                  </div>
                  <div class="pull-right">
                     <div class="fb-like" data-href="index2.php?idLT=<?php echo  $row_ChiTietTin['idLT']?>&idTin=<?php echo  $row_ChiTietTin['idTin'];?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                     <div class="g-plusone" data-size="medium" data-href="index2.php?idLT=<?php echo  $row_ChiTietTin['idLT']?>&idTin=<?php echo  $row_ChiTietTin['idTin'];?>"></div>
                  </div>
               </div>
               <h2 class="sapo"><?php echo $row_ChiTietTin['TomTat']; ?></h2>

               <?php 
         $TinLienQuan_2Tin=TinLienQuan_2Tin($idTin,$idLT);
         while($row_TinLienQuan_2Tin=mysqli_fetch_assoc($TinLienQuan_2Tin)){

            ?>
               <h6 class="related_sapo">
                  <a href="index2.php?idLT=<?php echo  $row_TinLienQuan_2Tin['idLT']?>&idTin=<?php echo  $row_TinLienQuan_2Tin['idTin'];?>"><?php echo  $row_TinLienQuan_2Tin['TieuDe'];?></a></h6 class="related_sapo">
                  
         <?php 
         }
         ?>                                                                                  
                     <div id="detail-textlink">
                        <ul>
                           <li></li>
                        </ul>
                     </div>
                     <div class="content">
                        <div id="content_detail">
                           <?php echo $row_ChiTietTin['Content']; ?>
                        </div>
                        <?php
                        require "block2/tin_lienquan.php"; 
                        ?>

                     </div>
                     <div class="fb-like" data-href="index2.php?idLT=<?php echo  $row_ChiTietTin['idLT']?>&idTin=<?php echo  $row_ChiTietTin['idTin'];?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
                     <?php
                     require "block2/list_key.php"; 
                     ?>
                     
                  </div>