<meta charset="utf-8">
<?php

//รับค่า เปลี่ยนรหัส และการเก็บรหัสแบบsh1
include('condb.php');
	$a_id  = $_POST["a_id"];
	$a_pass1  = sh1($_POST["a_pass1"]);
	$a_pass2  = sh1($_POST["a_pass2"]);
//เงื่อนไขคือถ้าใส่ พาส1กับ2ไม่ตรงกันจะไม่สำเร็จ
	if($a_pass1 != $a_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
		echo "window.location = 'admin.php'; ";
		echo "</script>";
	}else{
	$sql = "UPDATE tbl_admin SET 
	a_pass ='$a_pass1'
	WHERE a_id=$a_id
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	}
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไข password สำเร็จ');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
}
?>