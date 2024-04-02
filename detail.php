<h3><center>
<?php
include ('connectdb.php');
session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
  echo $_SESSION['uname']; //ให้โชว์ชื่อผู้ที่เข้าระบบ
?></h3></center>


<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>แสดงรายละเอียดสินค้า</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
    /* Style for the section container */
    .py-5 {
        background-color: #f5f5f5;
    }

    /* Style for the row */
    .row {
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Style for the product image */
    .col-md-6 img {
        max-width: 100%;
        height: auto;
    }

    /* Style for the product name */
    .display-11 {
        font-size: 24px;
        color: #333;
    }

    /* Style for the product price */
    .fs-5 {
        color: #007bff;
        font-weight: bold;
    }

    /* Style for the product details */
    strong {
        font-weight: bold;
    }

    /* Style for the quantity input and "Add to cart" button */
    .form-control {
        max-width: 3rem;
    }
</style>



</head>

<body>

	<?php
	include("connectdb.php"); //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้
	$sql = "SELECT * FROM `products` WHERE `p_id` ='{$_GET['id']}' "; //การสร้างตัวแปร id เพื่อเข้าดูรายละเอียด คือ detail.php?id=1 หมายเลข1 คือรหัสสินค้า p_id ใน Database
	$rs = mysqli_query($conn, $sql);	//ผลลัพธ์
	$data = mysqli_fetch_array($rs);	//การแกะข้อมูล
	?>
	<section class="py-5">
		<div class="container px-4 px-lg-5 my-5">
			<div class="row gx-4 gx-lg-5 align-items-center">
				<div class="col-md-6"><img src="images/<?= $data['p_id']; ?>.<?= $data['p_picture']; ?>" width="50%"></div>
				<div class="col-md-6">
					<h4 class="display-11 fw-bolder"><?= $data['p_name']; ?></h4>
					<div class="fs-5 mb-5">
						<span>$<?= $data['p_price']; ?> บาท</span>
					</div>
					<strong> รายละเอียดสินค้า </strong>
					<?= $data['p_detail']; ?><br><br>
					<div class="d-flex">
                    <a href="basket.php?id=<?=$data['p_id'];?>" class="btn btn-outline-danger m-5">เพิ่มลงรถเข็น</a>
                    <a href="home.php" class="btn btn-outline-primary m-5" style="text-align: right;">กลับหน้าสินค้า</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>