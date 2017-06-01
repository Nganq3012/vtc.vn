<?php 
$idLT=3;

$TinTheoLoai_1Tin=TinTheoLoai_1Tin($idLT);
$row_tinxahoi_mottin=mysqli_fetch_array($TinTheoLoai_1Tin);
$tinxahoi_mottin_style=TinXaHoi_1Tin_style();
$row_tinxahoi_mottin_style=mysqli_fetch_array($tinxahoi_mottin_style);

?>
<div class="mar300 pkg box_comtent_home" style="margin-bottom: 10px;">
	<!-- @uc_itemblock_big1 -->
	<div class="head_cate mar2per pkg">
		<a title="Xã hội" href="index3.php?idLT=3" class="head_bar fl"><h2>Xã hội</h2></a>
		<div class="sub_head_cate fr">
			<ul>
				<li><a href="#">Chính trị</a></li>
				<li><a href="#">Đời sống</a></li>
			</ul>
		</div>
	</div>
	<div class="col50per fl">
		<a href="index2.php?idLT=<?php echo  $row_tinxahoi_mottin_style['idLT']?>&idTin=<?php echo  $row_tinxahoi_mottin_style['idTin'];?>" class="thumb222 thumbblock" title="index.php?p=idTin=<?php echo  $row_tinxahoi_mottin_style['TieuDe'];?>" ><img class="" src="upload/tintuc/<?php echo $row_tinxahoi_mottin_style['urlHinh']; ?>" width="480" height="270" alt="<?php echo  $row_tinxahoi_mottin_style['TieuDe'];?>" /></a><div class="time_news">09/05/2017 - 22:45 PM</div>
		<span><a href="index2.php?idLT=<?php echo  $row_tinxahoi_mottin_style['idLT']?>&idTin=<?php echo  $row_tinxahoi_mottin_style['idTin'];?>" class="title_bold f17" title="<?php echo  $row_tinxahoi_mottin_style['TieuDe'];?>"><?php echo  $row_tinxahoi_mottin_style['TieuDe'];?></a></span><div class="sapo_main">
		<?php echo  $row_tinxahoi_mottin_style['TieuDe'];?></div>
	</div>
	<div class="col50per fr">
		<ul class="list_bullet_title pkg" style="margin-top: 0;">
			<li style="border-top: none;margin-top: 0;padding-top: 0;">
				<span>
				<a href="index2.php?idLT=<?php echo  $row_tinxahoi_mottin['idLT']?>&idTin=<?php echo  $row_tinxahoi_mottin['idTin'];?>" class="title_news" title="<?php echo  $row_tinxahoi_mottin['TieuDe'];?>"><?php echo  $row_tinxahoi_mottin['TieuDe'];?></a></span>
			</li>

			<?php 
			$TinXaHoi_5Tin_nostyle=TinXaHoi_5Tin_nostyle();
			while($row_TinXaHoi_5Tin_nostyle=mysqli_fetch_assoc($TinXaHoi_5Tin_nostyle)){

				?>
			<li style="">
					<span><a href="index2.php?idLT=<?php echo  $row_TinXaHoi_5Tin_nostyle['idLT']?>&idTin=<?php echo  $row_TinXaHoi_5Tin_nostyle['idTin'];?>" class="title_news" title="<?php echo $row_TinXaHoi_5Tin_nostyle['TieuDe']; ?>"><?php echo $row_TinXaHoi_5Tin_nostyle['TieuDe']; ?><?php echo $row_TinXaHoi_5Tin_nostyle['TieuDe']; ?></a></span></li>

			<?php 
			}
			?>
									</ul>
							</div>

							<a class="views_full" href="index3.php?idLT=3"><i class="fa fa-angle-double-right"></i> Xem thêm</a>
						</div>