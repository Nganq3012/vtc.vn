<div class="main-4 ttdn" id="admStickyFooter">
         <div style="display: inline-block; width: 100%; height: 1px; background: #000; margin: 9px 0 2px;"></div>
         <div style="display: inline-block; width: 100%; height: 2px; background: #000;"></div>
         <a href="http://www.phapluatplus.vn/van-hoa-giai-tri/" class="little">Giáo dục</a>
         <ul id="list-ttdn">

         <?php 

               $idLT=1;
         $TinTheoLoai_7Tin=TinTheoLoai_7Tin($idLT);
         while($row_TinVH_7Tin=mysqli_fetch_assoc($TinTheoLoai_7Tin)){

            ?>            <li>
               <a href="index2.php?idLT=<?php echo  $row_TinVH_7Tin['idLT']?>&idTin=<?php echo  $row_TinVH_7Tin['idTin'];?>" class="" title="<?php echo  $row_TinVH_7Tin['TieuDe'];?>" ><img class="" src="upload/tintuc/<?php echo $row_TinVH_7Tin['urlHinh']; ?>" width="170" height="110" alt="<?php echo  $row_TinVH_7Tin['TieuDe'];?>" /></a>        
               <h3 class="title">
               <a href="index2.php?idLT=<?php echo  $row_TinVH_7Tin['idLT']?>&idTin=<?php echo  $row_TinVH_7Tin['idTin'];?>" class="" title="<?php echo  $row_TinVH_7Tin['TieuDe'];?>"><?php echo  $row_TinVH_7Tin['TieuDe'];?></a></h3 class="title">    
            </li>
           <?php 
         }
         ?>
         </ul>
         <div class="clearfix"></div>
      </div>