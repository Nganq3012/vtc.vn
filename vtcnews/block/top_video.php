<div class="col38per fr">
	<div class="head_topvideo">TOP VIDEO</div>
	<div class="list_top_video">
		<ul>
		<?php 
		$idLT=6;
			$TopVideo_4Tin=TinTheoLoai_4Tin($idLT);
			while($row_TopVideo_4Tin=mysqli_fetch_assoc($TopVideo_4Tin)){

				?>
			<li class="pkg">
				<a href="index2.php?idTin=<?php echo  $row_TopVideo_4Tin['idTin'];?>" title="<?php echo $row_TopVideo_4Tin['TieuDe']; ?>" class="thumbblock thumb110x65 fl">
					<img alt="<?php echo $row_TopVideo_4Tin['TieuDe']; ?>" src="upload/tintuc/<?php echo $row_TopVideo_4Tin['urlHinh']; ?>" />
					<span class="icon_play_small none_ie"><i class="fa fa-play-circle-o"></i></span>
				</a>
				<span><a href="index2.php?idTin=<?php echo  $row_TopVideo_4Tin['idTin'];?>" class="title_list_top_video fl" title="<?php echo $row_TopVideo_4Tin['TieuDe']; ?>"><?php echo $row_TopVideo_4Tin['TieuDe']; ?><i class="expi-video"></i></a></span></li>
				
					<?php 
			}
			?>
						
						</ul>
					</div>
				</div>