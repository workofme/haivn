<?php 
session_start();
$status = 0;
$messages = "";
if(isset($_SESSION['username'])){
    $logout = session_destroy();
    if($logout){
        $status = 0;
        $messages = "Bạn đã đăng xuất";
    }
    else {
        $status = 1;
        $messages = "Đăng xuất không thành công , vui lòng thử lại";
    }
}
else {
    $status = 1;
    $messages = "Bạn chưa đăng nhập";
}
echo json_encode(array('status' => $status , 'messages' => $messages));