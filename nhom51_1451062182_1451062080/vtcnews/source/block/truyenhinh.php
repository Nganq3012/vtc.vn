
<?php 
$idLT=10;

$TinTruyenHinh_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinTruyenHinh_1Tin=mysqli_fetch_array($TinTruyenHinh_1Tin);

?>
<div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;">
	<div class="pkg box_video_home mar2per">
		<a class="head_video" href="index3.php?idLT=10"><span class="bullet_video"></span>TRUYỀN HÌNH</a>
		<div class="col60per fl">
			<a href="index2.php?idLT=<?php echo  $row_TinTruyenHinh_1Tin['idLT']?>&idTin=<?php echo  $row_TinTruyenHinh_1Tin['idTin'];?>" class="thumb220 thumbblock" title="<?php echo $row_TinTruyenHinh_1Tin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_TinTruyenHinh_1Tin['urlHinh']; ?>" width="362" height="202" alt="<?php echo $row_TinTruyenHinh_1Tin['TieuDe']; ?>" /></a><div class="title_box_video_home">
			<span><a href="index2.php?idLT=<?php echo  $row_TinTruyenHinh_1Tin['idLT']?>&idTin=<?php echo  $row_TinTruyenHinh_1Tin['idTin'];?>" class="" title="<?php echo $row_TinTruyenHinh_1Tin['TieuDe']; ?>"><?php echo $row_TinTruyenHinh_1Tin['TieuDe']; ?><i class="expi-video"></i></a></span></div>
		</div>
		<?php
		require "top_video.php"; 
		?>
	</div>
	<a class="views_full" href="#"><i class="fa fa-angle-double-right"></i> Xem thêm</a>
</div>