<h3><center>
<?php
session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
if (empty($_SESSION['aid'])){  //ถ้า session ชื่อนี้มันว่างเปล่า
  echo "กรุณาเข้าสู่ระบบ";
  exit;
}
?></h3></center>

<?php
session_start();
require_once("connectdb.php");
?>
<?php
	include("connectdb.php"); //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้
	$sql = "SELECT * FROM `users` WHERE `u_id` ='{$_GET['id']}' ";//การสร้างตัวแปร id เพื่อเข้าดูรายละเอียด คือ detail.php?id=1 หมายเลข1 คือรหัสสินค้า p_id ใน Database
	$rs = mysqli_query($conn, $sql);	//ผลลัพธ์
	$data = mysqli_fetch_array($rs);	//การแกะข้อมูล
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แก้ไขข้อมูลสมาชิก</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
        }

        form {
            margin: 20px auto;
            width: 70%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px #888888;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
        }

        textarea {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
        }

        input[type="file"] {
            margin: 10px 0;
        }

        select {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
        }


        input[type="submit"]:hover {
            background-color: #006400;
        }
    </style>
</head>

<body>
<h1>แก้ไขข้อมูลสมาชิก</h1>

<form method="post" action="" enctype="multipart/form-data"> 
<a href="user.php" class="btn btn-outline-primary">ย้อนกลับ</a> </span><br><br>
ชื่อ-นามสุกล: <input type="text" name="uname" class="form-control" autofocus required value="<?=$data['u_fullname'];?>"> <br> 
อีเมล: <input type="text" name="uemail" class="form-control" required value="<?=$data['u_email'];?>"> <br>
รหัสผ่าน: <input type="password" name="upass"  class="form-control" required value="<?=$data['u_password'];?>"> <br> 
เบอร์โทรศัพท์ : <input type="number" name="utel" class="form-control"  required value="<?=$data['u_tel'];?>"> <br>
ที่อยู่: <input type="text" name="uaddress" class="form-control" required value="<?=$data['u_address'];?>"> <br>
<input type="submit" name="Submit" class="btn btn-outline-success" value="บันทึกข้อมูล">
</form>

<?php
if(isset($_POST['Submit'])){
	if(isset($_POST['Submit'])){
        $sql = "UPDATE `users` SET `u_fullname`='{$_POST['uname']}', `u_email`='{$_POST['uemail']}', `u_password`='{$_POST['upass']}', `u_tel`='{$_POST['utel']}', `u_address`='{$_POST['uaddress']}' WHERE `u_id`='{$_GET['id']}';";
    } else {
        $sql = "UPDATE `users` SET `u_fullname`='{$_POST['uname']}', `u_email`='{$_POST['uemail']}', `u_password`='{$_POST['upass']}', `u_tel`='{$_POST['utel']}', `u_address`='{$_POST['uaddress']}' WHERE `u_id`='{$_GET['id']}';";
    }
    //var_dump($sql);exit;
    mysqli_query($conn, $sql) or die("แก้ไขข้อมูลสมาชิกไม่ได้");
    echo"<script>";
    echo "alert('แก้ไขข้อมูลสมาชิกสำเร็จ');";
    echo "window.location='user.php';";
    echo"</script>";
}    
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>
</html>