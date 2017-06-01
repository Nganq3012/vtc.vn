<?php 
$idLT=2;

$TinTheoLoai_1Tin=TinTheoLoai_1Tin($idLT);
$row_TinKinhTe_1Tin=mysqli_fetch_array($TinTheoLoai_1Tin);

?>
<div class="col50per fl">
	<div class="head_cate pkg">
		<a title="Kinh tế" href="index3.php?idLT=2" class="head_bar fl"><h2>Kinh tế</h2></a>
		<div class="sub_head_cate fr"><i class="fa fa-chevron-right"></i></div>
	</div>
	<div class="pkg">
		<a href="index2.php?idLT=<?php echo  $row_TinKinhTe_1Tin['idLT']?>&idTin=<?php echo  $row_TinKinhTe_1Tin['idTin'];?>" class="thumb130 thumbblock fl" title="<?php echo  $row_TinKinhTe_1Tin['TieuDe'];?>" ><img class="" src="upload/tintuc/<?php echo $row_TinKinhTe_1Tin['urlHinh']; ?>" width="255" height="144" alt="<?php echo  $row_TinKinhTe_1Tin['TieuDe'];?>" /></a><div class="info_right fl">
		<span><a href="index2.php?idLT=<?php echo  $row_TinKinhTe_1Tin['idLT']?>&idTin=<?php echo  $row_TinKinhTe_1Tin['idTin'];?>" class="title_bold f15" title="<?php echo  $row_TinKinhTe_1Tin['TieuDe'];?>"><?php echo  $row_TinKinhTe_1Tin['TieuDe'];?></a></span></div>
	</div>

	<ul class="list_bullet_title pkg">
	<?php 
			$idLT=2;
			$TinTheoLoai_4Tin=TinTheoLoai_4Tin($idLT);
			while($row_TinKinhTe_4Tin=mysqli_fetch_assoc($TinTheoLoai_4Tin)){

				?>
		<li><span><a href="index2.php?idLT=<?php echo  $row_TinKinhTe_4Tin['idLT']?>&idTin=<?php echo  $row_TinKinhTe_4Tin['idTin'];?>" class="title_news" title="<?php echo $row_TinKinhTe_4Tin['TieuDe']; ?>"><?php echo $row_TinKinhTe_4Tin['TieuDe']; ?></a></span></li>
		<?php 
			}
			?>
	</ul>
	<a class="views_full" href="index3.php?idLT=2"><i class="fa fa-angle-double-right"></i> Xem thêm</a>
</div>