<?php
session_start();
include "Database.php";
include "Function.php";
$db = new Database;
include "html/header.php";
include "html/main.php";
include "html/footer.php";
if (isset($username)) {
	include 'html/post_modal.php';
}
// insert
// $database->insert('users' , array('user' => 'baobao' , 'pass' => '12345' , 'active' => 1)); 
// update
// $database->update('users' , array('user' => "baobao1" ) , array('user' => 'baobao'));
// get id
// $id = $database->fetchsql("SELECT * FROM `users` where `id` = '1'");

// $id_ = $id[0]['id'];
// delete
// $delete = $database->delete('users' , $id_);