<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'course-action.php';
error_reporting(0);
session_start();
if(empty($_SESSION["user_id"]))
{
	header('location:login.php');
}
else{

										  
												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]);
                                             
												
													if($_POST['submit'])
													{
						
													$SQL="insert into users_regi(u_id,title,price,note) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["price"]."','---')";
						
														mysqli_query($db,$SQL);
														
														$success = "Sucessfully Submitted ";
                                                        $icon='<i class="fa-solid fa-check" style="color: #2ecc71;"></i>';

                                                      
                                                      
														
													}
                                                   
                                                  
												}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scapricele=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="st.png">
    <title>Confirm</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    
    <div class="site-wrapper">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse"></button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/stw.png" alt="" height="70px"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="batches.php">Registration <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Sign Up</a> </li>';
							}
						else
							{
									
									
										echo   
                                        '<li class="nav-item"><a href="your_registration.php" class="nav-link active">Your Registration</a> </li>
                                        <li class="nav-item "><a href="logout.php" class="btn btn-danger active"> Logout <i class="fa-solid fa-user fa" style="color: #f1f4f8;"></i></a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                      
                        <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="batches.php">Get Your Batch</a></li>
                        <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="#">Get Course</a></li>
                        <li class="col-xs-12 col-sm-4 link-item active" ><span>3</span><a href="sum.php">Confirm Registration</a></li>
                    </ul>
                </div>
            </div>
			
                <div class="container" style="text-align:center; font-size:larger; font-weight:bolder">
                 
					   <span class="sp" style="color: #2ECC71 ; " >
								<?php echo$success;  ?> <?php echo $icon?>
										</span>
                              
                </div>
            
			
			
				  
            <div class="container m-t-30">
			<form action="" method="post">
                <div class="widget clearfix">
                    
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4 style="text-align: center;">Form Summary <i class="fa-regular fa-clipboard"></i></h4> </div>


                                        <div class="cart-totals-fields">
										
                                            <table class="table">
											<tbody>
                                                

                                                
                                          
                                                   <tr>
                                                        <td>Total Credit(Hr)</td>
                                                        <td><?php echo $item_total; ?></td>
                                                    </tr>
											   
                                                  
                                                 
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong> <?php echo $item_total; ?></strong></td>
                                                    </tr>
                                                </tbody>
												
												
												
												
                                            </table>
                                        </div>
                                    </div>
                                    <!--cart summary-->
                                    <div class="payment-option" >
                                        <ul class=" list-unstyled" >
                                       
                                        <p class="text-xs-center"  > <input type="submit"  name="submit"  class="btn btn-success" value="Confirm Registration" > </p>
                                    </div>
									</form>
                                </div>
                            </div>
                       
                    </div>
                </div>
				 </form>
            </div>
       
                    <section class="app-section" >
            <div class="app-wrap" style="background-color: white;">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">
                           
                            <div class="col-xs-12 col-sm-7 left-text" ">
                                <h3></h3>
                                <p></p>
                                <div class="social-btns">
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
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
         </div>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/project.min.js"></script>

    <script src="js/sweet.js"></script>

  


</body>

</html>

<?php
}
?>
