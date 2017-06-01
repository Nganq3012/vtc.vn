<?php 
$idLT=14;
$TinDiaOc_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinDiaOc_1Tin=mysqli_fetch_array($TinDiaOc_1Tin);

?>
	<div class="col50per fl">
		<div class="head_cate pkg">
			<a title="Địa ốc" href="index3.php?idLT=14" class="head_bar fl"><span>Địa ốc</span></a>
			<div class="sub_head_cate fr"><i class="fa fa-chevron-right"></i></div>
		</div>

		<div class="pkg">
			<a href="index2.php?idLT=<?php echo  $row_TinDiaOc_1Tin['idLT']?>&idTin=<?php echo  $row_TinDiaOc_1Tin['idTin'];?>" class="thumb130 thumbblock fl" title="<?php echo $row_TinDiaOc_1Tin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinDiaOc_1Tin['urlHinh']; ?>" width="225" height="127" alt="<?php echo $row_TinDiaOc_1Tin['TieuDe']; ?>" /></a><div class="info_right fl">
			<span><a href="index2.php?idLT=<?php echo  $row_TinDiaOc_1Tin['idLT']?>&idTin=<?php echo  $row_TinDiaOc_1Tin['idTin'];?>" class="title_bold f15" title="<?php echo $row_TinDiaOc_1Tin['TieuDe']; ?>"><?php echo $row_TinDiaOc_1Tin['TieuDe']; ?></a></span></div>
		</div>

		<ul class="list_bullet_title pkg">
		<?php 
		$idLT=14;
			$TinDiaOc_4Tin=TinTheoLoai_4Tin($idLT);
			while($row_TinDiaOc_4Tin=mysqli_fetch_assoc($TinDiaOc_4Tin)){

				?>
			<li><span><a href=index2.php?idLT=<?php echo  $row_TinDiaOc_4Tin['idLT']?>&idTin=<?php echo  $row_TinDiaOc_4Tin['idTin'];?>" class="title_news" title="<?php echo $row_TinDiaOc_4Tin['TieuDe']; ?>"><?php echo $row_TinDiaOc_4Tin['TieuDe']; ?></a></span></li>
			<?php 
			}
			?>
		</ul>
	</div>