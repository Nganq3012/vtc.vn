<?php 
$idLT=8;
$TinGiaiTri_1TinLon=TinGiaiTri_1TinLon();
$row_TinGiaiTri_1TinLon=mysqli_fetch_array($TinGiaiTri_1TinLon);
$TinGiaiTri_1TinNho=TinGiaiTri_1TinNho();
$row_TinGiaiTri_1TinNho=mysqli_fetch_array($TinGiaiTri_1TinNho);
?>
<div class="content_home pkg">
	<!-- @uc_itemblock4 -->
	<div class="head_media pkg">
		<a title="Giải trí" href="index3.php?idLT=8" class="cate_media fl"><span>Giải trí</span></a>
		<ul class="list_cate_media fr">
			<li><a href="#" >Hoa hậu</a></li>
			<li><a href="#" >Thời trang</a></li>
			<li><a href="#" >Nhạc</a></li>
			<li><a href="#" >Sao thế giới</a></li>
			<li><a href="#" >Sao Việt</a></li>
		</ul>
	</div>
	<div class="box_media pkg">
		<div class="col40per fl">
			<div class="thumb270 thumbblock">
				<a href="index2.php?idLT=<?php echo  $row_TinGiaiTri_1TinLon['idLT']?>&idTin=<?php echo  $row_TinGiaiTri_1TinLon['idTin'];?>" class="" title="<?php echo $row_TinGiaiTri_1TinLon['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinGiaiTri_1TinLon['urlHinh']; ?>" width="504" height="284" alt="<?php echo $row_TinGiaiTri_1TinLon['TieuDe']; ?>" /></a><div class="shadow_title">
				<div class="time_white">09/05/2017 - 15:02 PM</div>
				<span><a href="index2.php?idLT=<?php echo  $row_TinGiaiTri_1TinLon['idLT']?>&idTin=<?php echo  $row_TinGiaiTri_1TinLon['idTin'];?>" class="title_top_media" title="<?php echo $row_TinGiaiTri_1TinLon['TieuDe']; ?>"><?php echo $row_TinGiaiTri_1TinLon['TieuDe']; ?><i class="expi-video"></i></a></span></div>
			</div>
		</div>


		<div class="col20per fl post_nth2">
			<a href="index2.php?idLT=<?php echo  $row_TinGiaiTri_1TinNho['idLT']?>&idTin=<?php echo  $row_TinGiaiTri_1TinNho['idTin'];?>" class="" title="<?php echo $row_TinGiaiTri_1TinNho['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinGiaiTri_1TinNho['urlHinh']; ?>" width="228" height="129" alt="Phan Hải '"<?php echo $row_TinGiaiTri_1TinNho['TieuDe']; ?>" /></a><span><a href="index2.php?idLT=<?php echo  $row_TinGiaiTri_1TinNho['idLT']?>&idTin=<?php echo  $row_TinGiaiTri_1TinNho['idTin'];?>" class="f17 title_bold" title=""<?php echo $row_TinGiaiTri_1TinNho['TieuDe']; ?>">"<?php echo $row_TinGiaiTri_1TinNho['TieuDe']; ?></a></span><div class="sapo_thumb145">"<?php echo $row_TinGiaiTri_1TinNho['TieuDe']; ?></div>
		</div>
		<div class="col30per fr">
			<ul class="list_media">
			<?php 
			$TinGiaiTri_4Tin=TinGiaiTri_4Tin();
			while($row_TinGiaiTri_4Tin=mysqli_fetch_assoc($TinGiaiTri_4Tin)){

				?>
				<li class="pkg">
					<a href="index2.php?idLT=<?php echo  $row_TinGiaiTri_4Tin['idLT']?>&idTin=<?php echo  $row_TinGiaiTri_4Tin['idTin'];?>" class="fl thumb80 thumbblock" title="<?php echo $row_TinGiaiTri_4Tin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinGiaiTri_4Tin['urlHinh']; ?>" width="126" height="71" alt="<?php echo $row_TinGiaiTri_4Tin['TieuDe']; ?>" /></a><span><a href="index2.php?idLT=<?php echo  $row_TinGiaiTri_4Tin['idLT']?>&idTin=<?php echo  $row_TinGiaiTri_4Tin['idTin'];?>" class="fl title_list_media" title="<?php echo $row_TinGiaiTri_4Tin['TieuDe']; ?>"><?php echo $row_TinGiaiTri_4Tin['TieuDe']; ?></a></span></li>
				<?php 
			}
			?>		
							</ul>
						</div>
					</div>
					<!-- /@uc_itemblock4 -->
					<a class="views_full" href="index3.php?idLT=8"><i class="fa fa-angle-double-right"></i> Xem thêm</a>
				</div>