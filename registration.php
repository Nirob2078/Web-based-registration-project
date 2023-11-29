<!DOCTYPE html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['firstname']) ||  //fetching and find if its empty
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['username']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
		//cheching username & email if already present
	$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");
		
    $id=trim($_POST['username']);
 
	
	if($_POST['password'] != $_POST['cpassword']){  //matching passwords
       	$message = "Password not match";
    }
    elseif(strlen($id) !== 11)  //cal password length
	{
		$message = "Invalid Id";
	}
    
    elseif(substr($id,0,3)!=="CSE") //cal password length
	{
		$message = "Invalid Id please type a valid Id";
	}
    elseif(!preg_match("/[A-Z0-9]+/",$id)){
        $message = "Invalid Id";     
    }
	elseif(strlen($_POST['password']) < 6)  //cal password length
	{
		$message = "Password Must be >=6";
	}
    elseif (filter_var($id, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$message = "Invalid Id please type a valid Id";
    }
    elseif(preg_match("/[\@\!\#\%\^\&\*\(\)]/",$id)){

        $message = "Invalid Id please type a valid Id";
    }
   
    elseif(!preg_match ("/^([a-zA-Z' ]+)$/", $_POST['firstname'])){
        $message = "Only alphabets and whitespace are allowed for Name"; 
    }
	elseif(strlen($_POST['phone']) < 10)  //cal phone length
	{
		$message = "invalid phone number!";
	}

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$message = "Invalid email address please type a valid email!";
    }
	elseif(mysqli_num_rows($check_username) > 0)  //check username
     {
    	$message = 'Id Already exists!';
     }
	elseif(mysqli_num_rows($check_email) > 0) //check email
     {
    	$message = 'Email Already exists!';
     }
	else{
       
	 //inserting values into db
	 //inserting values into db
     $mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['address']."')";
     mysqli_query($db, $mql);
         $success = "Account Created successfully! <p>You can login in<span id='counter'>4</span> second(s).</p>
                                                         <script type='text/javascript'>
                                                         function countdown() {
                                                             var i = document.getElementById('counter');
                                                             if (parseInt(i.innerHTML)<=0) {
                                                                 location.href = 'login.php';
                                                             }
                                                             i.innerHTML = parseInt(i.innerHTML)-1;
                                                         }
                                                         setInterval(function(){ countdown(); },1000);
                                                         </script>'";
         
         
         
         
          header("refresh:4;url=login.php"); //  // redireted once inserted success
    }
	}

}


?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="signup.png">
    <title>Signup</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
     
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/stw.png" alt="" height="70px"> </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
							<li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="batches.php">Course Offer <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link ">Sign Up</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_registration.php" class="nav-link active">Your Registration</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="btn btn-danger active">LogOut</a> </li>';
							}

						?>
							 
                        </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">
					  <span style="color:red; font-weight:bolder; "><?php echo $message; ?></span>
					   <span style="color:green; font-weight:bolder">
								<?php echo $success; ?>
										</span>
					   
					</a></li>
                    
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              
							  <form action="" method="post">
                                 <div class="row">
								  <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Student ID <i class="fa-solid fa-id-card-clip fa "></i></label>
                                       <input class="form-control" type="text" name="username" id="example-text-input" placeholder="CSE...."> 
                                       
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Student Name</label>
                                       <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="Name" > 
                                    </div>
                                   
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Email<i class="fa-regular fa-envelope-open fa"></i></label>
                                       <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Phone  <i class="fa-solid fa-phone fa"></i></label>
                                       <input class="form-control" type="tel" name="phone" id="example-tel-input-3" placeholder="Phone" pattern="[0-9]{11}"> <small class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Password <i class="fa-solid fa-lock fa"></i></label>
                                      <input style="position: relative;"   type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password"><span><i  class="fa-solid fa-eye" id="eye" onclick="toggle()" ></i></span> <!-- <i style="position: absulate;" class="fa-solid fa-eye"></i></div>-->
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Retype password </label>
                                       <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Password"> 
                                    </div>
									 <div class="form-group col-sm-12">
                                       <label for="exampleTextarea"> Batch</label>
                                       <!--<textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea> -->
                                       <select class="form-control" id="exampleTextarea"  name="address" > 
                                        <option>72</option>
                                        <option>73</option>
                                        <option>74</option>
                                        <option>75</option>
                                        <option>76</option>
                                        <option>77</option>
                                        <option>78</option>
                                        <option>79</option>
                                        <option>80</option>
                                        <option>81</option>
                                       </select>
                                    </div>
                                   
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" value="Register" name="submit" class="btn theme-btn" > </p>
                                    </div>
                                 </div>
                              </form>
                           
						   </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">
                        <h4>First Step of Course Enrollment</h4>
                      
					
                        <hr>
                       
                        <!-- end:panel -->
						
					
                        <!-- end:Panel -->
                        
                        <p> <a href="#" class="btn theme-btn m-t-15">Contact Us <i class="fa-regular fa-message fa"></i></a> </p>
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
            <!--
                    <section class="app-section">
            <div class="app-wrap">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">

                            <div class="col-xs-12 col-sm-7 left-text">
                                

								Eat what you like, where you like, when you like. Find the local flavours you crave, all at the tap of a button.</p>
                                <div class="social-btns">
                                    <a href="#" class="app-btn apple-button clearfix">
                                        <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                    </a>
                                    <a href="#" class="app-btn android-button clearfix">
                                        <div class="pull-left"><i class="fa fa-android"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play Store</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                   start: FOOTER -->
                   <footer class="footer" >
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">

                    <div class="col-xs-6 color-gray">
                        <h5>Mission <i class="fa-solid fa-bullseye fa"></i></h5>
                        <h3>Stamford University is based on the following Principles</h3>
                        <ul>
                            <li><a href="#">Education should be open to all and irrespective of gender, religion, cast, color, age, time and place.</a></li>
                            <li><a href="#">Education should be of international standard and must have universal recognition.</a></li>
                            <li><a href="#">Opportunity to learn should be open to anyone with the desire to achieve.</a></li>
                            <li><a href="#">Education should be of international standard and must have universal recognition.</a></li>
							<li><a href="#">Education is a life long process and must be relevant to the student's aspirations.</a></li>
                        </ul>
                    </div>
                
                    <div class="col-xs-6  color-gray">
                        <h5>Visson<i class="fa-duotone fa-bullseye fa"></i></h5>
                        <ul>
                            <li><a href="#">Updated and global standard academic programs.</a> </li>
                            <li><a href="#">Rich faculty members to prepare students for future leadership and services in multicultural, global and technological societies.</a> </li>
                            <li><a href="#">Continuation of creating possible better facilities for students.</a> </li>
                            <li><a href="#">Expected scholarly contribution in the area of instruction, research, creative expression and service.</a> </li>
                            <li><a href="#">Continuous development and expansion in all areas and effort to develop pertnership at all important level.</a> </li>
                        </ul>
                    </div>
                   
                </div>
                <br>
                <br>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>All Major Payment Accepted <i class="fa-solid fa-money-bill-wave fa"></i></h5>
                            <ul class="ulu2">
                                
                                <li>
                                    <a href="https://www.stamforduniversity.edu.bd/index.php/admission/apply_onlineAdmission#pid=1"> <img src="images/kash-logo.png"  alt="Maestro" height="40px"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/Nagad-Logo.png" alt="Stripe" height="40px"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bankl.png" alt="Bitcoin" height="40px"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5>Address <i class="fa-solid fa-location-dot fa" style="color: #f5f7fa;"></i></h5>
                            <p>51 Siddeswari Road (Ramna), Dhaka-1217.</p>
                            <h5>Call us at: <a href="tel: 09613622622"> 09613622622</a></h5></div>
                        <div class="col-xs-12 col-sm-4 color-gray">
                            <h5>Phone <i class="fa-solid fa-mobile fa"></i></h5>
                            <ul class="ulu">
                            <li>
                            <i class="fa-solid fa-phone fa"></i> 01321143632
                            </li>
                            <li> <i class="fa-solid fa-phone fa"></i> 01321143633 
                            </li>
                            <li> <i class="fa-solid fa-phone fa"></i> 01321143634</li>
                            <li> <i class="fa-solid fa-phone fa"></i> 01321143635</li>
                          

                            </ul>

                           
                        </div>
                      
                    </div>
                 
                </div>
                <!-- bottom footer ends -->
            </div>
           
        </footer>
        <div  style="text-align: center; background:linear-gradient(to right,#00093c,#2d0b00); color:white" >
                          <span style="text-align: center;">@Hridoy Hossain CSE06908025</span>
                           
                        </div>
        <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script>
	var state=false;
	function toggle(){
		if(state){
           document.getElementById("exampleInputPassword1").setAttribute("type","password");
		   state= false;
		}
		else{
			document.getElementById("exampleInputPassword1").setAttribute("type","text");
		    state= true;

		}
	}

</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/project.min.js"></script>
</body>

</html>