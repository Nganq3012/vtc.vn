 <?php 
$idLT=18;
$TinRaovat_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinRaovat_1Tin=mysqli_fetch_array($TinRaovat_1Tin);
  ?>
<div class="col-fixed-300 main-22">
               <div class="box-paper">
                  <div class="main-11">
                     <a class="little" href="index3.php?idLT=3">Rao vặt Plus</a>
                     <ul class="list">
                        <li>
                           <h2 class="title">
                           <a href="index2.php?idLT=<?php echo  $row_TinRaovat_1Tin['idLT']?>&idTin=<?php echo  $row_TinRaovat_1Tin['idTin'];?>" class="" title="<?php echo  $row_TinRaovat_1Tin['TieuDe'];?>"><?php echo  $row_TinRaovat_1Tin['TieuDe'];?></a></h2 class="title">            
                        </li>


<?php 
         $TinRaovat_5Tin=TinTheoLoai_5Tin($idLT);
         while($row_TinRaovat_5Tin=mysqli_fetch_assoc($TinRaovat_5Tin)){

            ?>

                        <li>
                           <h2 class="title">
                           <a href="index2.php?idLT=<?php echo  $row_TinRaovat_5Tin['idLT']?>&idTin=<?php echo  $row_TinRaovat_5Tin['idTin'];?>" class="" title="<?php echo  $row_TinRaovat_5Tin['TieuDe'];?>"><?php echo  $row_TinRaovat_5Tin['TieuDe'];?></a></h2 class="title">            
                        </li>


                  <?php 
         }
         ?>

                      </ul>
                  </div>
               </div>
            </div>