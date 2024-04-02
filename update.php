<h3>
    <center>
        <?php
        session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
        if (empty($_SESSION['aid'])) {  //ถ้า session ชื่อนี้มันว่างเปล่า
            echo "กรุณาเข้าสู่ระบบ";
            exit;
        }
        ?>
</h3>
</center>

<?php
session_start();
require_once("connectdb.php");
?>
<?php
include("connectdb.php"); //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้
$sql = "SELECT * FROM `products` WHERE `p_id` ='{$_GET['id']}' "; //การสร้างตัวแปร id เพื่อเข้าดูรายละเอียด คือ detail.php?id=1 หมายเลข1 คือรหัสสินค้า p_id ใน Database
$rs = mysqli_query($conn, $sql);    //ผลลัพธ์
$data = mysqli_fetch_array($rs);    //การแกะข้อมูล
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>การจัดการแก้ไขข้อมูลสินค้า</title>
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
    <center>
        <h2>แก้ไขข้อมูลสินค้า</h2>
    </center>

    <form method="post" action="" enctype="multipart/form-data">
        <a href="pageadmin.php" class="btn btn-outline-primary">ย้อนกลับ</a> </span><br><br>
        ชื่อสินค้า <input type="text" class="form-control" name="pname" autofocus required value="<?= $data['p_name']; ?>"> <br>
        ราคา (บาท) <input type="number" class="form-control" name="pprice" autofocus required value="<?= $data['p_price']; ?>"> <br>
        รายละเอียด <br>
        <textarea name="pdetail" class="form-control" cols="50" row="6"> <?= $data['p_detail']; ?> </textarea> <br>
        รูปสินค้า <input type="file" class="form-control" name="picture"> <br>
        ประเภทสินค้า <br>
        <select name="cate" class="form-control">
            <?php
            include("connectdb.php"); //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้ 
            $sql2 = "SELECT * FROM `category` ";    //sql การค้นหาข้อมูลโดยดึงจากฐานข้อมูล  เปลี่ยนเป็น sql2 เพราะชื่อจะซ้ำกับด้านบน
            $rs2 = mysqli_query($conn, $sql2);    //ผลลัพธ์
            while ($data2 = mysqli_fetch_array($rs2)) {
            ?>
                <option value="<?= $data2['c_id']; ?>" <?= ($data2['c_id'] == $data['p_type']) ? "selected" : ""; ?>><?= $data2['c_name']; ?></option>
            <?php } ?>
        </select>
        <br><br>
        <input type="submit" name="Submit" class="btn btn-outline-success" value="บันทึกข้อมูล">
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        if ($_FILES['picture']['name'] != "") {
            $allowed = array('gif', 'png', 'jpg', 'jpeg', 'jfif',);
            $filename = $_FILES['picture']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                echo "<script>";
                echo "alert('แก้ไขข้อมูลสินค้าไม่สำเร็จ! ไฟล์รูปต้องเป็น jpg gif หรือ png เท่านั้น');";
                echo "</script>";
                exit;
            }
            @copy($_FILES['picture']['tmp_name'], "images/" . $_GET['id'] . "." . $ext);
            $sql = "UPDATE `products` SET `p_name`='{$_POST['pname']}', `p_detail`='{$_POST['pdetail']}', `p_price`='{$_POST['pprice']}', `p_picture`='{$ext}', `p_type`='{$_POST['cate']}' WHERE `p_id`='{$_GET['id']}';";
        } else {
            $sql = "UPDATE `products` SET `p_name`='{$_POST['pname']}', `p_detail`='{$_POST['pdetail']}', `p_price`='{$_POST['pprice']}', `p_type`='{$_POST['cate']}' WHERE `p_id`='{$_GET['id']}';";
        }
        //var_dump($sql);exit;
        mysqli_query($conn, $sql) or die("แก้ไขข้อมูลสินค้าไม่ได้");
        echo "<script>";
        echo "alert('แก้ไขข้อมูลสำเร็จ');";
        echo "window.location='pageadmin.php';";
        echo "</script>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>