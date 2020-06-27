<?php 
session_start();
if(isset($_SESSION['username'])){
	$status = 0;

}
else {
	$status = 1;
}
echo json_encode( array('status' => $status ));
?>