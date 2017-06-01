<?php 
$idLT=16;
$TinCamNangCS_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinCamNangCS_1Tin=mysqli_fetch_array($TinCamNangCS_1Tin);

?>
<div class="col50per fl">
	<div class="head_cate pkg">
		<a title="Cẩm nang cuộc sống" href="index3.php?idLT=16" class="head_bar fl">
		<span>Cẩm nang cuộc sống</span>
		</a>
		<div class="sub_head_cate fr"><i class="fa fa-chevron-right"></i>
		</div>
	</div>
	<div class="pkg">
		<a href="index2.php?idLT=<?php echo  $row_TinCamNangCS_1Tin['idLT']?>&idTin=<?php echo  $row_TinCamNangCS_1Tin['idTin'];?>" class="thumb130 thumbblock fl" title="<?php echo $row_TinCamNangCS_1Tin['TieuDe']; ?>" >
		<img class="" src="upload/tintuc/<?php echo $row_TinCamNangCS_1Tin['urlHinh']; ?>" width="225" height="127" alt="<?php echo $row_TinCamNangCS_1Tin['TieuDe']; ?>" /></a>
		<div class="info_right fl">
		<span><a href="index2.php?idLT=<?php echo  $row_TinCamNangCS_1Tin['idLT']?>&idTin=<?php echo  $row_TinCamNangCS_1Tin['idTin'];?>" class="title_bold f15" title="<?php echo $row_TinCamNangCS_1Tin['TieuDe']; ?>"><?php echo $row_TinCamNangCS_1Tin['TieuDe']; ?></a>
		</span>
		</div>
	</div>
	<ul class="list_bullet_title pkg">
<?php 
$idLT=16;
	$TinCamNangCS_4Tin=TinTheoLoai_4Tin($idLT);
	while($row_TinCamNangCS_4Tin=mysqli_fetch_assoc($TinCamNangCS_4Tin)){

		?>
		<li>
		<span>
		<a href="index2.php?idLT=<?php echo  $row_TinCamNangCS_4Tin['idLT']?>&idTin=<?php echo  $row_TinCamNangCS_4Tin['idTin'];?>" class="title_news" title="<?php echo $row_TinCamNangCS_4Tin['TieuDe']; ?>"><?php echo $row_TinCamNangCS_4Tin['TieuDe']; ?></a>
		</span>
		</li>
	<?php 
			}
			?>	
	</ul>
</div>