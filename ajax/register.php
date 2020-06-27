<?php
include "../Database.php";
include "../Function.php";
$db = new Database;
$user = data_input("user");
$pass = data_input("pass");
$rp_pass = data_input('rp_pass');
$first_name = data_input('first_name');
$last_name = data_input('last_name');
$gender = data_input('gender');
if(strlen($user) < 6 && strlen($pass) < 6){
    $status = 1;
    $messages = "Tài khoản và mật khẩu phải lớn hơn 6 kí tự";
}
elseif($pass != $rp_pass){
    $status = 1;
    $messages = "Mật khẩu không trùng nhau";
}
else if(empty($first_name) && empty($last_name)){
  $status = 1;
  $messages = "Họ tên không được bỏ trống";
}
elseif($gender > 3 && $gender < 0){
    $status = 1;
    $messages = "Giới tính không hợp lệ";
} 
else {
    $check_user = $db->countTable('users' , array('user' => $user));
    if($check_user == 0){
        $add_user =  $db->insert('users' , array('user' => $user , 'pass' => $pass , 'gender' => $gender , 'ho' => $first_name , 'ten' => $last_name)); 
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
