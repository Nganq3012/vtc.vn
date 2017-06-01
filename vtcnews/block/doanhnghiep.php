
<?php 
$idLT=11;

?>
<div class="TTDN" style="margin-bottom: 10px;">
	<div class="head_bar"><a title="Doanh nghiệp - Doanh nhân" href="index3.php?idLT=11" class="head_right"><span>Doanh nghiệp - Doanh nhân</span></a></div>
	<ul class="list_news_300">
	<?php 
$idLT=11;
$TinTheoLoai_20Tin=TinTheoLoai_20Tin($idLT);
	while($row_TinTheoLoai_20Tin=mysqli_fetch_assoc($TinTheoLoai_20Tin)){
 ?>
		<li class="first pkg">
			<a href="index2.php?idLT=<?php echo  $row_TinTheoLoai_20Tin['idLT']?>&idTin=<?php echo  $row_TinTheoLoai_20Tin['idTin'];?>" class="thumb60x40 thumbblock fl" title="Thị trường bất động sản thấp tầng 2017: Dự báo sẽ 'khan hàng'!" ><img class="" src="upload/tintuc/<?php echo $row_TinTheoLoai_20Tin['urlHinh']; ?>" width="60" height="40" alt="<?php echo $row_TinTheoLoai_20Tin['TieuDe']; ?>" /></a><span><a href="index2.php?idLT=<?php echo  $row_TinTheoLoai_20Tin['idLT']?>&idTin=<?php echo  $row_TinTheoLoai_20Tin['idTin'];?>" class="title_list_news_300 fl" title="<?php echo $row_TinTheoLoai_20Tin['TieuDe']; ?>"><?php echo $row_TinTheoLoai_20Tin['TieuDe']; ?></a></span><div class="pkg"></div>
		</li>
		
		<?php 
			}
			?>	
	</ul>
</div>