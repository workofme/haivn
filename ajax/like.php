<?php 
session_start();
include "../Database.php";
include "../Function.php";
$db = new Database;
$id = postinput('post');
$user_post = postinput('id_thanhvien');
$get_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username' ");
$id_like = $get_user['id'];
$check_like = 0;
// $num_post = $db->num_row("SELECT * FROM `likes` WHERE `post` = '$id' and `id_thanhvien_like` = '$id_like'  and `id_thanh_vien_post` = '$user_post' ");
$num_post = $db->countTable('likes' , array('post' => $id , 'id_thanhvien_like' => $id_like , 'id_thanhvien_post' => $user_post));
if($num_post > 0){
    $get_like = $db->total("SELECT * FROM `likes` WHERE `id_thanhvien_like` = '$id_like'  AND `id_thanhvien_post` = '$user_post' ");
    $get_post = $db->total("SELECT * FROM `post` WHERE `id` = '$id'");
    $num_likes = $get_post['num_likes'];
    if($get_like['status'] == 0){
        $num_likes--;
        if($num_likes == 0){
            $plus_like = $db->update('post' , array('num_likes'  => 0) , array('id' => $id));
        }
        $update_like = $db->update('likes' , array('status' => 1) , array('status' => 0));
        $plus_like = $db->update('post' , array('num_likes'  => $num_likes) , array('id' => $id));
        if($update_like){
            $status = 0;
            $messages = "Bỏ like thành công";
            $check_like = 1;
        }
        else {
            $status = 1;
            $messages = " Bỏ like không thành công";
        }
    }
    elseif($get_like['status'] == 1){
        $num_likes++;
        $update_like = $db->update('likes' , array('status' => 0 ) , array('status' => 1));
        $minus_like = $db->update('post' , array('num_likes'  => $num_likes) , array('id' => $id));
        if($update_like){
            $status = 0;
            $messages = "like thành công";
            $check_like = 0;
        }
        else {
            $status = 1;
            $messages = "like không thành công";

        }
    }
    
    
}
else {
    $like = $db->insert('likes' , array('post' => $id , 'id_thanhvien_like' => $get_user['id'] , 'id_thanhvien_post' => $user_post , 'status' => 0 ));
    if($like){
        $status = 0;
        $messages = "like thành công";
    }
    else {
        $status = 1;
        $messages = "like không thành công";
    }
}

echo json_encode(array('status' => $status , 'messages' => $messages ,'check_like' => $check_like , 'num_likes' => $num_likes));
