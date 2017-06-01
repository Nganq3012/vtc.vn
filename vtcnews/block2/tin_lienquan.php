<?php 

?>
<div class="explus_related_1404022217 explus_related_1404022217_bottom">
 <div><strong class="explus_related_1404022217_letter">Tin tức liên quan</strong></div>
 <div class="wrap_suggest">
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
$TinLienQuan_6Tin=TinLienQuan_6Tin($idTin,$idLT);
while($row_TinLienQuan_6Tin=mysqli_fetch_assoc($TinLienQuan_6Tin)){

  ?>
  <div class="explus_related_1404022217_item "><a title="<?php echo $row_TinLienQuan_6Tin['TieuDe']; ?>" class="explus_related_1404022217_photo" href="index2.php?idLT=<?php echo  $row_TinLienQuan_6Tin['idLT']?>&idTin=<?php echo  $row_TinLienQuan_6Tin['idTin'];?>"><img src="upload/tintuc/<?php echo $row_TinLienQuan_6Tin['urlHinh']; ?>" alt="<?php echo $row_TinLienQuan_6Tin['TieuDe']; ?>" width="174" height="104"/></a> <a title="<?php echo $row_TinLienQuan_6Tin['TieuDe']; ?>" class="explus_related_1404022217_title" href="index2.php?idLT=<?php echo  $row_TinLienQuan_6Tin['idLT']?>&idTin=<?php echo  $row_TinLienQuan_6Tin['idTin'];?>"> <?php echo $row_TinLienQuan_6Tin['TieuDe']; ?></a></div>

  <?php 
      }
      ?>

</div>
</div> 