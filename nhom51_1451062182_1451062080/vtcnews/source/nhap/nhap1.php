<!-- <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
</head>
<body>
 <?php
 // có 2 cách dùng sql:
 // cách 1: Kết nối database sever
 // music: tên database
 // abcabc: password
 $link = mysqli_connect('localhost', 'root', '', 'vtcnews');
 if(!$link){
  die("ko ket noi duoc. Kiem tra cac tham so");
}
else{
  echo "Ban da ket noi thanh cong";
  // thực hiện truy cập
  $sql = "SELECT * FROM tacgia";
  $sql = "SELECT * FROM tacgia";
  $sql = "SELECT * FROM tacgia";
  $sql = "SELECT * FROM tacgia";
  $sql = "SELECT * FROM tacgia";
  $sql = "SELECT * FROM tacgia";
  $sql = "SELECT * FROM tacgia";

  mysqli_set_charset($link, "UTF8");
  $result = mysqli_query($link,$sql);
  // echo "$result";
  echo "<ul>";
  while ($row = mysqli_fetch_array($result)) {
   # code...
   echo "<li>";
    //print_r($row);
    //echo "<br>";
   echo "${row['ten_tgia']}";
   echo "</li>";
 }
 echo "</ul>";
}

 // ĐÓNG KẾT NỐI
mysqli_close($link);
?>
</body>
</html> -->
<!-- ------------------------------------------------ -->
//truyen nhan du lieu trong php

<?php  


?>