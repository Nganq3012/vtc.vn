<ul class="list_news_top">
		<?php 
			$TinMoiNhat_10Tin=TinMoiNhat_10Tin();
			while($row_TinMoiNhat_10Tin=mysqli_fetch_assoc($TinMoiNhat_10Tin)){

				?>
			<li>
			<h2><a href="index2.php?idLT=<?php echo  $row_TinMoiNhat_10Tin['idLT']?>&idTin=<?php echo  $row_TinMoiNhat_10Tin['idTin'];?>" class="" title="<?php echo $row_TinMoiNhat_10Tin['TieuDe']; ?>"><?php echo $row_TinMoiNhat_10Tin['TieuDe']; ?></a></h2>
		</li>
		<?php 
			}
			?>
</ul>