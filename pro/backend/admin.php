<!DOCTYPE html>
<html>
<head>

<!-- เป็นการปิดแจ้งเตือน error -->
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>



<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <!-- Left side column. contains the logo and sidebar -->
          สวัสดี คุณ <?php echo $a_name; ?>
        <?php include('menu_left.php');?>
        <!-- Content Wrapper. Contains page content -->
      </div>


        <!-- เป็นการเรียกใช้แอดมิน list -->
        <div class="col-md-8">
            <!-- เป็นการเรียก act เพื่อเพิ่มadd -->
            <a href="admin.php?act=add" class="btn-info btn-sm"> เพิ่ม</a>
            <p></p>

            <?php
            $act = $_GET['act'];
            if($act == 'add'){
            include('admin_from_add.php');
            }elseif ($act == 'edit') {
            include('admin_form_edit.php');
            }
            elseif ($act == 'rwd') {
            include('admin_form_rwd.php');
            }
            else {
            include('admin_list.php');
            }
            ?>
        
        </div>

    </div>
  </div>
  </body>
</html>