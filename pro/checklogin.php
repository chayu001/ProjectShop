<?php 
//ตัวเช็คการล้อคอิน
//print_r($_POST);
//exit();


//เงี่อนไขการล็อคอิน
session_start();
        if(isset($_POST['a_user'])){
                  include("backend/condb.php");
                  $a_user = $_POST['a_user'];
                  $a_pass = $_POST['a_pass'];

                  $sql="SELECT * FROM tbl_admin 
                  WHERE a_user='".$a_user."' 
                  AND  a_pass='".$a_pass."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["a_id"];
                     
                      if($_SESSION["user_id"]!=''){ 

                        Header("Location: backend/index.php");//ลิ้งค์ไปที่โฟเดอร์backend ไฟล์index
                      }
                  
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>