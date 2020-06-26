<?php
include "Database.php";
include "Function.php";
$database = new Database;
include "html/header.php";
include "html/main.php";
include "html/footer.php";
// $database->insert('users' , array('user' => 'baobao' , 'pass' => '12345' , 'active' => 1));
$database->update('users' , array('user' => "baobao1" ) , array('user' => 'baobao'));