<?php
session_start();

//session_destroy(); //การทำลายทั้งหมดมีกี่ตัวก็ชั่ง

unset ($_SESSION['uid']);
unset ($_SESSION['uname']); 
echo "<script>";
echo "window.location='index.php';";
echo "</script>";

?>