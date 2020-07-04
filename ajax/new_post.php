<?php
session_start();
include "../Database.php";
include "../Function.php";
$db = new Database;
$get_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username' ");
$get = 0;
$content = postInput('content');
if(isset($_FILES['img']['name'])){
    /* Location */
    $get = 1;
    $random = rand(1000,9999);
    $filename = $_FILES['img']['name'];

    $location = "../assets/img/post/".$filename;
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
        if(move_uploaded_file($_FILES['img']['tmp_name'].rand(1000,9999),$location)){
            $check = 1;
            
            
        }else{
            $check = 0;
            $status = 1;
            $messages = "không thể upload avatar";
           
        }
    }
}
else {
    $get = 2;
}
if($content !== "" ){    
    $get = 3;
    
}
if($content !== "" && isset($_FILES['img']['name'])){
    $get = 4;
}
if($get === 0){
    $status = 1;
    $messages = "Bài viết không có ảnh và nội dung , không thể đăng bài";
}
elseif($get === 1){
    $add_post = $db->insert('post' , array('date' => $date , 'ho_thanhvien' => $get_user['ho'] , 'ten_thanhvien' => $get_user['ten'] , 'id_thanhvien' => $get_user['id'] , 'img' => $filename));
    if($add_post){
        $status = 0;
        $messages = "bài viết của bạn sẽ được duyệt trong vài phút";
    }
    else {
        $status = 1;
        $messages = "Lỗi đăng bài vui lòng làm lại";
    }
}
elseif($get === 2){
    $status = 1;
    $messages = "Lỗi upload ảnh";
}
elseif($get === 3){
    $add_post = $db->insert('post' , array('content' => $content ,'date' => $date , 'ho_thanhvien' => $get_user['ho'] , 'ten_thanhvien' => $get_user['ten'] , 'id_thanhvien' => $get_user['id']));
    if($add_post){
        $status = 0;
        $messages = "bài viết của bạn sẽ được duyệt trong vài phút";
    }
    else {
        $status = 1;
        $messages = "Lỗi đăng bài vui lòng làm lại";
    }
}
elseif($get === 4){
    $add_post = $db->insert('post' , array('content' => $content ,'date' => $date , 'ho_thanhvien' => $get_user['ho'] , 'ten_thanhvien' => $get_user['ten'] , 'id_thanhvien' => $get_user['id'] , 'img' => $filename));
    if($add_post){
        $status = 0;
        $messages = "bài viết của bạn sẽ được duyệt trong vài phút";
    }
    else {
        $status = 1;
        $messages = "Lỗi đăng bài vui lòng làm lại";
    }
}
echo json_encode(array('status' => $status , 'messages' => $messages));
?>