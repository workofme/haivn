<?php
session_start();
include "../Database.php";
include "../Function.php";

$user = data_input('user');
$pass = data_input('pass');
$db = new Database;
$check_uer = $db->countTable('users' ,array('user' => $user , 'pass' => $pass));
if($check_uer == 0){
    $status = 1;
    $messages = "Tài khoản không tồn tại";
}
else {
    $status = 0;
    $messages = "Đăng nhập thành công";
    $_SESSION['username'] = $user;
}
echo json_encode(array('status' => $status , 'messages' => $messages));
?>