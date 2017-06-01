 <?php 
$idLT=20;
$TinMulti_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinMulti_1Tin=mysqli_fetch_array($TinMulti_1Tin);
  ?>
 <ul class="list-related">
                  <li>
                     <a href="index2.php?idLT=<?php echo  $row_TinMulti_1Tin['idLT']?>&idTin=<?php echo  $row_TinMulti_1Tin['idTin'];?>" style="display: inline-block; position: relative;">
                     <img src="upload/tintuc/<?php echo $row_TinMulti_1Tin['urlHinh']; ?>" alt="<?php echo  $row_TinMulti_1Tin['TieuDe'];?>" width="160" height="110" />
                     <span class="glyphicon glyphicon-play" style="display: inline-block;position: absolute;top: 35%;left: 38%;background: rgba(255,255,255,0.7);border-radius: 36%;padding: 5px 5px 5px 8px;font-size: 25px;color: #333;"></span>
                     </a>
                     <h3 class="title">
                     <a href="index2.php?idLT=<?php echo  $row_TinMulti_1Tin['idLT']?>&idTin=<?php echo  $row_TinMulti_1Tin['idTin'];?>" class="" title="<?php echo  $row_TinMulti_1Tin['TieuDe'];?>"><?php echo  $row_TinMulti_1Tin['TieuDe'];?></a></h3 class="title">    
                  </li>

<?php 
         $TinTheoLoai_5Tin=TinTheoLoai_5Tin($idLT);
         while($row_TinTheoLoai_5Tin=mysqli_fetch_assoc($TinTheoLoai_5Tin)){

            ?>

                  <li>
                     <h3 class="title">
                     <a href="index2.php?idLT=<?php echo  $row_TinTheoLoai_5Tin['idLT']?>&idTin=<?php echo  $row_TinTheoLoai_5Tin['idTin'];?>" class="" title="<?php echo  $row_TinTheoLoai_5Tin['TieuDe'];?>"><?php echo  $row_TinTheoLoai_5Tin['TieuDe'];?></a></h3 class="title">    
                  </li>
                  
                
                  <?php 
         }
         ?>
               </ul>