<?php 
$tinmoinhat_mottin=TinMoiNhat_1Tin();
$row_tinmoinhat_mottin=mysqli_fetch_array($tinmoinhat_mottin);

?>
<div class="col80per fr">
	<div class="slide_top">
		<a href="index2.php?idLT=<?php echo  $row_tinmoinhat_mottin['idLT']?>&idTin=<?php echo  $row_tinmoinhat_mottin['idTin'];?>" class="thumb300 thumbblock" title="<?php echo $row_tinmoinhat_mottin['TieuDe']; ?>" ><img class="" src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh']; ?>" width="610" height="344" alt="<?php echo $row_tinmoinhat_mottin['TieuDe']; ?>" /></a><div class="title_list_slide">
		<h2><a href="index2.php?idLT=<?php echo  $row_tinmoinhat_mottin['idLT']?>&idTin=<?php echo  $row_tinmoinhat_mottin['idTin'];?>" class="" title="<?php echo $row_tinmoinhat_mottin['TieuDe']; ?>"><?php echo $row_tinmoinhat_mottin['TomTat']; ?></a></h2></div>
	</div>

	<div class="thumb_news_slide pkg">
		<ul class="pkg" style="display: inline-block;">
			
			<?php 
			$tinmoinhat_3tin=TinMoiNhat_3Tin();
			while($row_tinmoinhat_3tin=mysqli_fetch_assoc($tinmoinhat_3tin)){

				?>
				<li>
					<a href="index2.php?idLT=<?php echo  $row_tinmoinhat_3tin['idLT']?>&idTin=<?php echo  $row_tinmoinhat_3tin['idTin'];?>" class="" title="<?php echo $row_tinmoinhat_3tin['TieuDe']; ?>" ><img class="thumbblock thumb143x94" src="upload/tintuc/<?php echo $row_tinmoinhat_3tin['urlHinh']; ?>" width="143" height="81" alt="<?php echo $row_tinmoinhat_3tin['TieuDe']; ?>" /></a><h2><a href="index2.php?idLT=<?php echo  $row_tinmoinhat_3tin['idLT']?>&idTin=<?php echo  $row_tinmoinhat_3tin['idTin'];?>" class="title_thumb_news_slide" title="<?php echo $row_tinmoinhat_3tin['TieuDe']; ?>"><?php echo $row_tinmoinhat_3tin['TieuDe']; ?><i class="expi-video"></i></a></h2>
				</li>
				<?php 
			}
			?>
		</ul>
	</div>
</div>