
<div class="col-fixed-300 main-22" id="block_docnhieu">
               <div class="box-paper">
                  <div class="main-11">
                     <a class="little" href="#">Đọc nhiều</a>
                     <ul class="list">
               <?php 
               $TinXemNhieuNhat_10Tin=TinXemNhieuNhat_10Tin();

         while($row_TinXemNhieuNhat_10Tin=mysqli_fetch_assoc($TinXemNhieuNhat_10Tin)){

            ?>

                        <li>
                           <h2 class="title">
                           <a href="index2.php?idLT=<?php echo  $row_TinXemNhieuNhat_10Tin['idLT']?>&idTin=<?php echo  $row_TinXemNhieuNhat_10Tin['idTin'];?>" class="" title="<?php echo  $row_TinXemNhieuNhat_10Tin['TieuDe'];?>"><?php echo  $row_TinXemNhieuNhat_10Tin['TieuDe'];?></a></h2 class="title">            
                        </li>
                        <?php 
         }
         ?>
               </ul>
                  </div>
               </div>
            </div>