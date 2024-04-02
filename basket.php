<?php
error_reporting(E_NOTICE);

	@session_start();
	include("connectdb.php");
	$sql = "SELECT * FROM products WHERE p_id='".@$_GET['id']."' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	$id = @$_GET['id'] ;
	if(isset($_GET['id'])) {
		@$_SESSION['sid'][$id] = $data['p_id'];
		@$_SESSION['sname'][$id] = $data['p_name'];
		@$_SESSION['sprice'][$id] = $data['p_price'];
		@$_SESSION['sdetail'][$id] = $data['p_detail'];
		@$_SESSION['spicture'][$id] = $data['p_id'];
		@$_SESSION['sitem'][$id]++;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะกร้าสินค้า</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
<blockquote>
<a href="clear.php" class="btn btn-danger m-3 m-2 ">ลบสินค้าทั้งหมด</a> 
    
<br><br>
<div class="container">
	<form id="form1" method="post" action="">
	<div class="row">
	<div class="col-md-10">
		<div class="alert alert-success" h4 role="alert">
			รายการสั่งซื้อสินค้า
		</div>
<table class="table table-hover">
	<tr>
		<th width="5%">ลำดับที่</th>
		<th width="19%">รูปสินค้า</th>
		<th width="24%">ชื่อสินค้า</th>
		<th width="14%">ราคา/ชิ้น</th>
		<th width="15%">จำนวน (ชิ้น)</th>
		<th width="14%">รวม</th>
		<th width="9%">&nbsp;</th>
	</tr>
<?php
if(!empty($_SESSION['sid'])) {
	foreach($_SESSION['sid'] as $pid) {
		@$i++;
		$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
		@$total += $sum[$pid] ;
?>
	<tr>
		<td><?=$i;?></td>
		<td><img src="images/<?=$_SESSION['spicture'][$pid];?>.jpg" width="120"></td>
		<td><?=$_SESSION['sname'][$pid];?></td>
		<td><?=number_format($_SESSION['sprice'][$pid],0);?></td>
		<td> <?=$_SESSION['sitem'][$pid];?></td>
		<td><?=number_format($sum[$pid],0);?></td>
		<td><a href="clear2.php?id=<?=$pid;?>"><img src="images/trash.jpg" width="30"></a></td>
	</tr>
<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
		<td><strong><?=number_format($total,0);?></strong></td>
		<td><strong>บาท</strong></td>
	</tr>
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า <br>โปรดเลือกสินค้าก่อน</td>
	</tr>
<?php } // end if ?>
</div>
</table>
<?php
if(empty($_SESSION['sid'])) {
?>
<div style="text-align: right;">
<a href="home.php?cid=1"   class="btn btn-outline-primary m-2">กลับหน้าสินค้า</a>
<a href="#" class="btn btn-outline-success" onClick="alert('โปรดเลือกสินค้าก่อน');">ยืนยันการสั่งซื้อ</a></div>
<?php } else { ?>
	<div style="text-align: right;">
<a href="home.php?cid=1"   class="btn btn-outline-primary m-2">กลับหน้าสินค้า</a>
<a href="record.php" class="btn btn-outline-success">ยืนยันการสั่งซื้อ</a></div>
<?php } ?>
</form>
<br>
</blockquote>
</body>
</html>



