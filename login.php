<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="utf-8"
          name="viewport"
          content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">


	  #buttn{
		  cursor: pointer;
		  color:#fff;
		  background-color: #3498DB ;
	  }
	  body{
		   
		   background-image: url('Background.jpeg');
           
            background-repeat: no-repeat;
		   
	  }
	  h1{
		color: white;
	  }

	
	
	  </style>
  
</head>

<body class="home">
<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
	$username = $_POST['username'];  //fetch records from login form
	$password = $_POST['password'];
	
	if(empty($_POST["username"]) ||empty( $_POST['password'])) {
		$message = "Username or Password field is empty!"; 
	} 
	// if records were not empty
	else
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	                  
	                        if(is_array($row))  // if matching records in the array & if everything is right
								{
                                    	$_SESSION["user_id"] = $row['u_id']; // put user id into temp session
										 header("refresh:1;url=index.php"); 
										 $success = "Sucessfully Login"; // redirect to index.php page
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; // throw error
                                }
	 }
	
	
	
}
?>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1></h1>
</div>
<!-- Form Module-->

<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
  
    <h2>Login <i class="fa-solid fa-user fa"></i></h2>
	
   
	
    <form action="" method="post">
      <input type="text" placeholder="Student Id"  name="username"/ >
     <div class="wrapper">      <input type="password" placeholder="Password" name="password" id="pass" /><span><i  class="fa-solid fa-eye" id="eye" onclick="toggle()" ></i></span></div><!---->
      <input type="submit" id="buttn" name="submit" value="Login" />
	  <span style ="color:red; position:fixed"><?php echo $message; ?> </span> 
	  <span style="color:green; position:fixed"><?php echo $success; ?></span>
    </form>
	
	</div>
 
  
  
  <div class="cta">Not registered?<a href="registration.php" > Create an account</a></div>
</div>


   

<script>
	var state=false;
	function toggle(){
		if(state){
           document.getElementById("pass").setAttribute("type","password");
		   state= false;
		}
		else{
			document.getElementById("pass").setAttribute("type","text");
		    state= true;

		}
	}

</script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   



</body>

</html>
