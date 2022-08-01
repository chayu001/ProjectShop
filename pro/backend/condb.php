<?php
//ใส่ชื่อโปรเจค ตรงคำว่าpro
$con= mysqli_connect("localhost","root","","pro") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); //เพื่อรองรับภาาษาไทย
  date_default_timezone_set('Asia/Bangkok'); //เซตเวลาให้ตรงกับกรุงเทพ
?>