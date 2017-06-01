 <?php 
function QuangCao($vitri)
{
	$sql ="SELECT * FROM quangcao 
	WHERE vitri=$vitri
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}
function ChiTietTin($idTin){
	$sql ="SELECT * FROM tin 
	WHERE idTin=$idTin
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinLienQuan_2Tin($idTin,$idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT AND idTin <> $idTin
	ORDER BY idTin DESC
	LIMIT 0,2
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinLienQuan_10Tin($idTin,$idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT AND idTin <> $idTin
	ORDER BY idTin DESC
	LIMIT 0,17
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinLienQuan_4Tin($idTin,$idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT AND idTin <> $idTin
	ORDER BY idTin DESC
	LIMIT 0,4
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}


function TinLienQuan_4Tin_Bottom_2($idTin,$idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT AND idTin <> $idTin
	ORDER BY idTin DESC
	LIMIT 4,4
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinLienQuan_6Tin($idTin,$idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT AND idTin <> $idTin
	ORDER BY SoLanXem DESC
	LIMIT 0,6
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}


function TinLienQuan_1Tin($idTin,$idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT AND idTin <> $idTin
	ORDER BY SoLanXem DESC
	LIMIT 0,1
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}
?>