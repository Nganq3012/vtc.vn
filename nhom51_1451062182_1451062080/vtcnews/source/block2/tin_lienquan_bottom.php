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

?>



<div class="others">
               <div class="yarpp-title"><span>Tin liên quan</span></div>
               <div class="row">

               <?php 

$TinLienQuan_4Tin=TinLienQuan_4Tin($idTin,$idLT);         
while($row_TinLienQuan_4Tin=mysqli_fetch_array($TinLienQuan_4Tin)){

            ?>
                  <div class="col-md-3">
                     <a href="index2.php?idLT=<?php echo  $row_TinLienQuan_4Tin['idLT']?>&idTin=<?php echo  $row_TinLienQuan_4Tin['idTin'];?>" class="" title="<?php echo $row_TinLienQuan_4Tin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinLienQuan_4Tin['urlHinh']; ?>" width="146" height="98" alt="<?php echo $row_TinLienQuan_4Tin['TieuDe']; ?>" /></a>                            
                     <h3 class="title">
                     <a href="index2.php?idLT=<?php echo  $row_TinLienQuan_4Tin['idLT']?>&idTin=<?php echo  $row_TinLienQuan_4Tin['idTin'];?>" class="" title="<?php echo $row_TinLienQuan_4Tin['TieuDe']; ?>"><?php echo $row_TinLienQuan_4Tin['TieuDe']; ?></a></h3 class="title">                        
                  </div>
                
            <?php 
         }
         ?>      
                 
               </div>


               <div class="row" style="margin-top: 18px;">
               <?php 

$TinLienQuan_4Tin_Bottom_2=TinLienQuan_4Tin_Bottom_2($idTin,$idLT);         
while($row_TinLienQuan_4Tin_Bottom_2=mysqli_fetch_array($TinLienQuan_4Tin_Bottom_2)){

            ?>
                  <div class="col-md-3">
                     <a href="index2.php?idLT=<?php echo  $row_TinLienQuan_4Tin_Bottom_2['idLT']?>&idTin=<?php echo  $row_TinLienQuan_4Tin_Bottom_2['idTin'];?>" class="" title="<?php echo $row_TinLienQuan_4Tin_Bottom_2['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinLienQuan_4Tin_Bottom_2['urlHinh']; ?>" width="146" height="98" alt="<?php echo $row_TinLienQuan_4Tin_Bottom_2['TieuDe']; ?>" /></a>                            
                     <h3 class="title">
                     <a href="index2.php?idLT=<?php echo  $row_TinLienQuan_4Tin_Bottom_2['idLT']?>&idTin=<?php echo  $row_TinLienQuan_4Tin_Bottom_2['idTin'];?>" class="" title="<?php echo $row_TinLienQuan_4Tin_Bottom_2['TieuDe']; ?>"><?php echo $row_TinLienQuan_4Tin_Bottom_2['TieuDe']; ?></a></h3 class="title">                        
                  </div>
               
            <?php 
         }
         ?>     
               </div>
            </div>