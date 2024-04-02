<!-- ลบข้อมูลรายละเอียดสินค้า -->
<meta charset="utf-8">
<?php

if(isset($_GET['id'])){  
	include("connectdb.php"); //เชื่อมฐานข้อมูล
	$sql = "DELETE FROM `orders` WHERE `oid` = '{$_GET['id']}'"; //เราจะลบเมื่อรหัสสินค้ามันเท่ากับ ค่าที่ถูกส่งมานั้นคือรหัสสินค้า 
	mysqli_query($conn, $sql) or die("ลบคำสั่งซื้อไม่ได้");

	$sql2 = "DELETE FROM `orders_detail` WHERE `oid` = '{$_GET['id']}'"; //เราจะลบเมื่อรหัสสินค้ามันเท่ากับ ค่าที่ถูกส่งมานั้นคือรหัสสินค้า 
	mysqli_query($conn, $sql2) or die("ลบคำสั่งซื้อไม่ได้2");
	
	
	echo"<script>";
	echo"alert('ลบคำสั่งซื้อสำเร็จ');";	//แสดงกล่องข้อความการลบสินค้า
	echo"window.location='view_order.php';";	//เมื่อลบสำเร็จจะกลับไปที่หน้าสินค้าเหมือนเดิม
	echo"</script>";
}

?>