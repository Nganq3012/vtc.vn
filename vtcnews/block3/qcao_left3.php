<div style="text-align:center;margin-top:0px;margin-bottom:0px;"><div style="margin-top:0px;width:0px;height:0px;"><a href="http://chinhphu.vn/" target="_blank" rel="nofollow"><img src="http://media.phapluatplus.vn/files/qc/2015/11/08/20151108091217.gif" alt="" /></a>
<!-- --5qc -->
<?php 

               $vitri=1;
         $QuangCao=QuangCao($vitri);
         while($row_QuangCao=mysqli_fetch_assoc($QuangCao)){

            ?> 
<a href="<?php echo  $row_QuangCao['Url'];?>" target="_blank" rel="nofollow"><img src="upload/quangcao/<?php echo $row_QuangCao['urlHinh']; ?>" alt="" /></a>
<?php 
         }
         ?>

</div></div>   