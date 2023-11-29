<?php
include("connection/connect.php"); //connection to db
error_reporting(0);
session_start();



// sending query
mysqli_query($db,"DELETE FROM users_regi WHERE o_id = '".$_GET['order_del']."'"); // deletig records on the bases of ID
header("location:your_registration.php");  //once deleted success redireted back to current page

?>
