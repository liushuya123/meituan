<?php
session_start();
$user = $_POST["user"];
$pass = $_POST["password"];
//$code = $_POST["code"];
//if(strtoupper($code)!=$_SESSION["code"]){
//    $msg="验证码错误";
//    $href="login.php";
//    include "message.php";
//    exit();
//}
$_SESSION["qqq"]=$user;
include "db.php";
$sql = "SELECT * FROM `users` WHERE `user`='{$user}'";
$r = $db->query($sql);
//var_dump($r);
$arr = $r->fetch_array(MYSQLI_ASSOC);
if (isset($arr)) {
    if ($arr["pass"] === $pass) {
        $msg = "登录成功";
        $href = "../person.php";
        $_SESSION['user'] = $user;
    } else {
        $msg = "密码错误";
        $href = "login.php";
    }
} else {
    $msg = "账号不存在";
    $href = "login.php";
}
include "message.php";