<meta charset="utf-8">
<?php

if(isset($_GET['id'])){  //ต้องมีการส่ง p_id มาก่อน เพื่อนำมาลบ
	include("connectdb.php"); //เชื่อมฐานข้อมูล
	$sql = "DELETE FROM `admin` WHERE `a_id` = '{$_GET['id']}'"; //เราจะลบเมื่อรหัสสินค้ามันเท่ากับ ค่าที่ถูกส่งมานั้นคือรหัสสินค้า 
	mysqli_query($conn, $sql) or die("ลบข้อมูลสินค้าไม่ได้");
	
	echo"<script>";
	echo"alert('ลบข้อมูลสำเร็จ');";	//แสดงกล่องข้อความการลบสินค้า
	echo"window.location='admin.php';";	//เมื่อลบสำเร็จจะกลับไปที่หน้าสินค้าเหมือนเดิม
	echo"</script>";
}

?>