<h3><center>
<?php
session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
if (empty($_SESSION['uid'])){  //ถ้า session ชื่อนี้มันว่างเปล่า
  echo "กรุณาเข้าสู่ระบบ";
  exit;
}
?></h3></center>
<meta charset="utf-8">
<?php
	@session_start();
	include("connectdb.php");
	
		foreach($_SESSION['sid'] as $pid) {
			$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
			@$total += $sum[$pid] ;
		}
	
	$sql = "insert into `orders` values(NULL, '$total', CURRENT_TIMESTAMP, '".$_SESSION['uid']."');";
	//var_dump($sql);exit;
	mysqli_query($conn, $sql) or die ("insert error") ;
	$id = mysqli_insert_id($conn);
	
	foreach($_SESSION['sid'] as $pid) {
		$sql2 = "insert into orders_detail values(NULL, '$id', '".$_SESSION['sid'][$pid]."', '".$_SESSION['sitem'][$pid]."');" ;
		mysqli_query($conn, $sql2);
	}
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=clear.php\">";
?>