<div class="carousel-latest">
<ul id="latest-in-day">
<?php 

require "lib/trangchu.php";

               $idLT=1;
         $TinTP_5Tin=TinTheoLoai_5Tin($idLT);
         while($row_TinTP_5Tin=mysqli_fetch_assoc($TinTP_5Tin)){

            ?> 

<li style="display: block; float: left; width: 282px;">
<div class="one" style="margin-top: 0; margin-bottom: 8px;">
<a href="index2.php?idLT=<?php echo  $row_TinTP_5Tin['idLT']?>&idTin=<?php echo  $row_TinTP_5Tin['idTin'];?>" class="pull-left photo" title="<?php echo  $row_TinTP_5Tin['TieuDe'];?>" ><img class="" src="upload/tintuc/<?php echo $row_TinTP_5Tin['urlHinh']; ?>" width="125" height="75" alt="<?php echo  $row_TinTP_5Tin['TieuDe'];?>" /></a><p style="width: 139px;" class="des"><a href="index2.php?idLT=<?php echo  $row_TinTP_5Tin['idLT']?>&idTin=<?php echo  $row_TinTP_5Tin['idTin'];?>" title="<?php echo  $row_TinTP_5Tin['TieuDe'];?>"><?php echo  $row_TinTP_5Tin['TieuDe'];?></a></p>
</div>
<?php echo  $row_TinTP_5Tin['TieuDe'];?>
</li> 
<?php 
         }
         ?>

 </ul>
<div class="clearfix"></div>
</div>
