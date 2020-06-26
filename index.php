<?php
include "Database.php";
$database = new Database;
include "html/header.php";
include "html/main.php";
include "html/footer.php";
$database->insert('users' , array('user' => 'baobao' , 'pass' => '12345' , 'active' => 1));