<?php
include("connection/connect.php"); //connection to db
error_reporting(0);
session_start();

$status="withdraw";
$note="request sent";

// sending query
$sql=mysqli_query($db,"update users_regi set status='$status' where o_id = '".$_GET['order_del']."'");
$sql=mysqli_query($db,"update users_regi set note='$note' where o_id='".$_GET['order_del']."'");// deletig records on the bases of ID where d_id='$_GET[menu_upd]'";
header("location:your_registration.php");  //once deleted success redireted back to current page

?>
