
<?php 
$idLT=15;
$TinSucKhoe_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinSucKhoe_1Tin=mysqli_fetch_array($TinSucKhoe_1Tin);

?>
<div class="col50per fl">
	<div class="head_cate pkg">
		<a title="Sức khỏe" href="index3.php?idLT=15" class="head_bar fl"><span>Sức khỏe</span></a>
		<div class="sub_head_cate fr"><i class="fa fa-chevron-right"></i></div>
	</div>
	<div class="pkg">
		<a href="index2.php?idLT=<?php echo  $row_TinSucKhoe_1Tin['idLT']?>&idTin=<?php echo  $row_TinSucKhoe_1Tin['idTin'];?>" class="thumb130 thumbblock fl" title="<?php echo $row_TinSucKhoe_1Tin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinSucKhoe_1Tin['urlHinh']; ?>" width="225" height="50" alt="<?php echo $row_TinSucKhoe_1Tin['TieuDe']; ?>" /></a><div class="info_right fl">
		<span><a href="index2.php?idLT=<?php echo  $row_TinSucKhoe_1Tin['idLT']?>&idTin=<?php echo  $row_TinSucKhoe_1Tin['idTin'];?>" class="title_bold f15" title="<?php echo $row_TinSucKhoe_1Tin['TieuDe']; ?>"><?php echo $row_TinSucKhoe_1Tin['TieuDe']; ?><i class="expi-video"></i></a></span></div>
	</div>



	<ul class="list_bullet_title pkg">
	<?php 
	$idLT=15;
			$TinSucKhoe_4Tin=TinTheoLoai_4Tin($idLT);
			while($row_TinSucKhoe_4Tin=mysqli_fetch_assoc($TinSucKhoe_4Tin)){

				?>
		<li><span><a href="index2.php?idLT=<?php echo  $row_TinSucKhoe_4Tin['idLT']?>&idTin=<?php echo  $row_TinSucKhoe_4Tin['idTin'];?>" class="title_news" title="<?php echo $row_TinSucKhoe_4Tin['TieuDe']; ?>"><?php echo $row_TinSucKhoe_4Tin['TieuDe']; ?></a></span></li>
		<?php 
			}
			?>
	</ul>
	<a class="views_full" href="index3.php?idLT=15"><i class="fa fa-angle-double-right"></i> Xem thêm</a>
</div>