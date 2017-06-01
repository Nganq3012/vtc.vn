

<?php 
$idLT=16;

?>
	<div class="box_300 pkg chuyende-home">
		<!-- @uc_chuyendehome1 -->
		<div class=" head_bar"><a class="head_right" title="Sự kiện nóng trong ngày" href="index3.php?idLT=16"><span>Sự kiện nóng</span></a></div>
		<ul class="list_news_300 chuyende_home" style="height: 259px; overflow-y: scroll;">
			
<?php 
			$TinSKHot_2Tin=TinSKHot_2Tin();
			while($row_TinSKHot_2Tin=mysqli_fetch_assoc($TinSKHot_2Tin)){
				?>

			<li class="first pkg">
				<a href="index2.php?idLT=<?php echo  $row_TinSKHot_2Tin['idLT']?>&idTin=<?php echo  $row_TinSKHot_2Tin['idTin'];?>" class="thumb80x60 thumbblock fl"><img src="upload/tintuc/<?php echo $row_TinSKHot_2Tin['urlHinh']; ?>" alt="<?php echo $row_TinSKHot_2Tin['TieuDe']; ?>" /></a>
				<a class="title_list_news_300 fl" href="index2.php?idLT=<?php echo  $row_TinSKHot_2Tin['idLT']?>&idTin=<?php echo  $row_TinSKHot_2Tin['idTin'];?>" title="<?php echo $row_TinSKHot_2Tin['TieuDe']; ?>"><?php echo $row_TinSKHot_2Tin['TieuDe']; ?></a>
			</li>
			
<?php 
			}
			?>	
			
		</ul>
		<!-- @uc_chuyendehome1 -->
	</div>