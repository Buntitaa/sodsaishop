<?php 
    session_start();
    
?>
<?php 
require_once ("connectdb.php");
    
    if(isset($_POST['Submit'])){
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        

        if(empty($fullname)){
            $_SESSION['error'] =  'กรุณากรอกชื่อ';
            header("location: register.php");
        }elseif(empty($email)){
            $_SESSION['error'] =  'กรุณากรอกอีเมล';
            header("location: register.php");
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error'] =  'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: register.php");
        }elseif(empty($tel)){
            $_SESSION['error'] =  'กรุณากรอกเบอร์โทร';
            header("location: register.php");
        }elseif(empty($pass1)){
            $_SESSION['error'] =  'กรุณากรอกรหัสผ่าน';
            header("location: register.php");
        }elseif($pass1 != $pass2){
            $_SESSION['error'] =  'กรุณากรอกรหัสผ่านให้ตรงกัน';
            header("location: register.php");
        }elseif(empty($address)){
            $_SESSION['error'] =  'กรุณากรอกที่อยู่';
            header("location: register.php");
        }else{
            $sql ="INSERT INTO users (u_fullname,u_email,u_password,u_tel,u_address) 
        VALUES ('$fullname','$email',md5('$pass1'),'$tel','$address')";
            mysqli_query($conn,$sql) or die('ไม่สมารถสมัครสมาชิกได้') ;
			    echo "<script>";
                echo "alert('สมัครสมาชิกสำเร็จ')";
                echo "</script>";
                echo "<script>";
                echo "window.location='login.php';";
                echo "</script>";
            
            
        }

    }
?>