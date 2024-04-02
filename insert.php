<h3><center>
<?php
session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
if (empty($_SESSION['aid'])){  //ถ้า session ชื่อนี้มันว่างเปล่า
  echo "กรุณาเข้าสู่ระบบ";
  exit;
}
?></h3></center>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>การเพิ่มข้อมูลสินค้า</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h2 {
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
<h2>เพิ่มข้อมูลสินค้า</h2>

<form method="post" action="" enctype="multipart/form-data"> 
<a href="pageadmin.php" class="btn btn-primary">ย้อนกลับ</a>  </span><br><br>

ชื่อสินค้า <input type="text" class="form-control" name="pname" autofocus required> <br> 
ราคา (บาท) <input type="number" class="form-control" name="pprice" autofocus required> <br>
รายละเอียด <br>
<textarea name="pdetail" class="form-control" cols="50" row="6"> </textarea> <br>
รูปสินค้า <input type="file" class="form-control" name="picture"> <br>
ประเภทสินค้า <br>
<select name="cate" class="form-control"> 
<?php
	include("connectdb.php"); //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้
	$sql = "SELECT * FROM `category` ";	//sql การค้นหาข้อมูลโดยดึงจากฐานข้อมูล
	$rs = mysqli_query($conn, $sql);	//ผลลัพธ์
	while ($data = mysqli_fetch_array($rs)){
?>
	<option value="<?=$data['c_id'];?>"><?=$data['c_name'];?></option>
	<?php } ?>
	</select>
	<br><br>
<input type="submit" name="Submit" class="btn btn-success m-5" value="บันทึกข้อมูล"><span>

</form>

<?php
if(isset($_POST['Submit'])){
	$allowed = array('gif', 'png', 'jpg', 'jpeg', 'jfif');
    $filename = $_FILES['picture']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);	//ext ตัวหานามสกุลรูปภาพ
    if (!in_array($ext, $allowed)) {
        echo "<script>";
        echo "alert('บันทึกข้อมูลสินค้าไม่สำเร็จ! ไฟล์รูปต้องเป็น jpg gif หรือ png เท่านั้น');";
        echo "</script>";
        exit;
    }
	
	$sql2 = "INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `p_type`) VALUES (NULL,'{$_POST['pname']}','{$_POST['pdetail']}', '{$_POST['pprice']}', '{$ext}', '{$_POST['cate']}');";
	mysqli_query($conn, $sql2) or die ("เพิ่มข้อมูลสินค้าไม่ได้");
	$idd = mysqli_insert_id($conn);
	@copy($_FILES['picture']['tmp_name'], "images/".$idd.".".$ext);
	
	echo"<script>";
	echo"alert('เพิ่มข้อมูลสินค้าสำเร็จ');";  //แสดงกล่องข้อความในการเพิ่มสำเร็จ
	echo"window.location='pageadmin.php';";  // เมื่อเพิ่มข้อมูลสินค้าสำเร็จจะไปที่หน้าแรก
	echo"</script>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>