<?php 
$idLT=21;

$TinTheThao_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinTheThao_1Tin=mysqli_fetch_array($TinTheThao_1Tin);

?>

<div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;">
	<!-- @uc_itemblock_thethao1 -->
	<div class="head_sport pkg mar2per marbottom15">
		<a title="Thể thao" href="index3.php?idLT=21" class="cate_media fl"><span>Thể thao</span></a>
		<ul class="list_cate_media fr">
			<li><a href="#">Bóng đá Anh</a></li>
			<li><a href="#">Lịch bóng đá</a></li>
			<li><a href="#">BXH bóng đá</a></li>
			<li><a href="#">Hậu trường</a></li>
		</ul>
	</div>
	<div class="col50per fl">
		<div class="pkg">
			<a href="index2.php?idLT=<?php echo  $row_TinTheThao_1Tin['idLT']?>&idTin=<?php echo  $row_TinTheThao_1Tin['idTin'];?>" class="thumb222 thumbblock" title="<?php echo $row_TinTheThao_1Tin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinTheThao_1Tin['urlHinh']; ?>" width="480" height="270" alt="<?php echo $row_TinTheThao_1Tin['TieuDe']; ?>" /></a><div class="time_news">10/05/2017 - 05:20 AM</div>
			<span><a href="index2.php?idLT=<?php echo  $row_TinTheThao_1Tin['idLT']?>&idTin=<?php echo  $row_TinTheThao_1Tin['idTin'];?>" class="title_bold f17" title="<?php echo $row_TinTheThao_1Tin['TieuDe']; ?>"><?php echo $row_TinTheThao_1Tin['TieuDe']; ?></a></span>
		</div>
	</div>
	<div class="col50per fr">
		<ul class="list_media">
			<?php 
			$idLT=21;
			$TinTheThao_4Tin=TinTheoLoai_4Tin($idLT);
			while($row_TinTheThao_4Tin=mysqli_fetch_assoc($TinTheThao_4Tin)){

				?>
			<li class="pkg">
				<a href="index2.php?idLT=<?php echo  $row_TinTheThao_4Tin['idLT']?>&idTin=<?php echo  $row_TinTheThao_4Tin['idTin'];?>" class="fl thumb80 thumbblock" title="<?php echo $row_TinTheThao_4Tin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinTheThao_4Tin['urlHinh']; ?>" width="144" height="81" alt="<?php echo $row_TinTheThao_4Tin['TieuDe']; ?>" /></a><span><a href="index2.php?idTin=<?php echo  $row_TinTheThao_4Tin['idTin'];?>" class="fl title_list_media" title="<?php echo $row_TinTheThao_4Tin['TieuDe']; ?>"><?php echo $row_TinTheThao_4Tin['TieuDe']; ?></a></span></li>	
<?php 
			}
			?>
					</ul>
				</div>
				<!-- /@uc_itemblock_thethao1 -->
				<a class="views_full" href="index3.php?idLT=21"><i class="fa fa-angle-double-right"></i> Xem thêm</a>
			</div>