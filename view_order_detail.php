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
    <title>รายละเอียดใบสั่งซื้อ</title>
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 80px;
            height: auto;
        }
    </style>
</head>

<body>
    <h2>รายละเอียดใบสั่งซื้อ เลขที่ <?= $_GET['a']; ?></h2><br>
    <a href="view_order.php" class="btn btn-warning m-2">ย้อนกลับ</a> <br><br>
    <table width="863" border="1" cellspacing="1" cellpadding="1">
        <tr>
            <td width="54">ที่</td>
            <td width="318">สินค้า</td>
            <td width="141">จำนวน</td>
            <td width="149">ราคา/ชิ้น</td>
            <td width="173">รวม (บาท)</td>
        </tr>

        <?php
        include("connectdb.php");
        $sql = "SELECT  *  FROM  orders_detail
    INNER JOIN products ON orders_detail.pid = products.p_id
    WHERE orders_detail.oid = '" . $_GET['a'] . "'  ";
        $rs = mysqli_query($conn, $sql);
        $i = 0;
        $total = 0;
        while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            $i++;
            $sum = $data['p_price'] * $data['item'];
            $total += $sum;
        ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="images/<?= $data['p_id'];?>.jpg" width="80"> <br>
                    รหัสสินค้า: <?= @$data['p_id']; ?> <br>
                    ชื่อสินค้า: <?= $data['p_name']; ?></td>
                <td><?= $data['item']; ?></td>
                <td><?= number_format($data['p_price'], 0); ?></td>
                <td><?= number_format($sum, 0); ?></td>
            </tr>
        <?php } ?>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>รวมทั้งหมด</td>
            <td><?= number_format($total, 0); ?></td>
        </tr>
    </table>

    <!-- Bootstap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>