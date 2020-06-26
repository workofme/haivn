<?php
include "../Database.php";
include "../Function.php";
$db = new Database;
$user = data_input("user");
$pass = data_input("pass");
$rp_pass = data_input('rp_pass');
$gender = data_input('gender');
if(strlen($user) < 6 && strlen($pass) < 6){
    $status = 1;
    $messages = "Tài khoản và mật khẩu phải lớn hơn 6 kí tự";
}
elseif($pass != $rp_pass){
    $status = 1;
    $messages = "Mật khẩu không trùng nhau";
}
elseif($gender > 3 && $gender < 0){
    $status = 1;
    $messages = "Giới tính không hợp lệ";
} 
else {
    $check_user = $db->countTable('users' , array('user' => $user));
    if($check_user == 0){
        $add_user =  $db->insert('users' , array('user' => $user , 'pass' => $pass , 'gender' => $gender  )); 
        if($add_user){
          $status = 0;
          $messages = "Đăng kí thành công";
          $_SESSION['username'] = $user;
        }
        else {
          $status = 1;
          $messages = "Đăng kí không thành công vui lòng thử lại";
        }
    }
    else {
        $status = 1;
        $messages = "Tên tài khoản đã tồn tại";
    }
}
echo json_encode(array('status' => $status , 'messages' => $messages));
