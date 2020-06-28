<?php 
session_start();
include "../Database.php";
include "../Function.php";
$db = new Database;

$first_name = postInput('first_name');
$last_name = postInput('last_name');
$pass_profile = postInput('pass_profile');
$rp_pass_profile = postInput('rp_pass_profile');
$get = 0;
if(isset($_FILES['file']['name'])){
    /* Location */
    $filename = $_FILES['file']['name'];
    $location = "../assets/img/avatar/".$filename;
    $uploadOk = 1;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $valid_extensions = array("jpg","jpeg","png");
    if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
        $uploadOk = 0;
    }
    if($uploadOk == 0){
        $check = 0;
    }else{
        /* Upload file */
        if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            $check = 1;
            $update =  $db->update('users' , array('avatar' => $filename) , array('user' => $username));
            if($update){
                $status = 0;
                $messages = "Thành công";
            }
            else {
               $status = 1;
               $messages = "không thể upload avatar";
            }
        }else{
            $check = 0;
            $status = 1;
            $messages = "không thể upload avatar";
           
        }
    }
}
else {
    $get++;
}
if($first_name != ""){
    $update =  $db->update('users' , array('ho' => $first_name) , array('user' => $username));
    if($update){
        $status = 0;
        $messages = "Thành công";
    }
    else {
       $status = 1;
       $messages = "Lỗi thay đổi Họ";
    }
}
else {
    $get++;
}
if($last_name !== ""){
    $update =  $db->update('users' , array('ten' => $last_name) , array('user' => $username));
    if($update){
        $status = 0;
        $messages = "Thành công";
    }
    else {
       $status = 1;
       $messages = "Lỗi thay đổi tên";
    }
}else {
    $get++;
}
if($pass_profile !== "" && $rp_pass_profile !== ""){    
    if($pass_profile == $rp_pass_profile){
        $update =  $db->update('users' , array('pass' => $pass_profile) , array('user' => $username));
        if($update){
            $status = 0;
            $messages = "Thành công";
        }
        else {
           $status = 1;
           $messages = "Lỗi thay đổi mật khẩu";
        }
    }
    else {
        $status = 1;
        $messages = "Mật khẩu không khớp";
    }
    
}
else {
   $get++;
}
if($get >= 4){
    $status = 0;
    $messages = "Bạn không có thay đổi gì";
}
echo json_encode(array('status' => $status , 'messages' => $messages));
