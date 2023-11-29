<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="st.png">
    <title>Batches</title>
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
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/stw.png" alt="" height="80px"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link " href="batches.php">Course Offer<span class="sr-only"></span></a> </li>
                            
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
          
            <div class="inner-page-hero bg-image" data-image-src="images/img/dis3.jpeg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurantes-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                          
                          
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title ">
                                 Running Batches
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
                                        <li> <a href="#" class="tag">72                                  
                                    </a> </li>
                                        <li> <a href="#" class="tag">73
                                    
                                    </a> </li>
                                        <li> <a href="#" class="tag">74
                                   
                                    </a> </li>
                                        <li> <a href="#" class="tag">75
                                   
                                    </a> </li>
                                        <li> <a href="#" class="tag">76
                                    
                                    </a> </li>
                                        <li> <a href="#" class="tag">77
                                    
                                    </a> </li>
                                    <li> <a href="#" class="tag">78
                                    
                                    </a> </li>
                                    <li> <a href="#" class="tag">79
                                    
                                    </a> </li>
                                    <li> <a href="#" class="tag">80
                                    
                                    </a> </li>
                                    <li> <a href="#" class="tag">81
                                    
                                    </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
								<?php $ress= mysqli_query($db,"select * from batch");
									      while($rows=mysqli_fetch_array($ress))
										  {
													
						
													 echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
															<div class="entry-logo">
																<a class="img-fluid" href="course.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt=""></a>
															</div>
															<!-- end:Logo -->
															<div class="entry-dscr">
																<h5 style="color:black; font-weight:bold"> Batch: <a style="color:black; font-weight:bold" href="course.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5><span style="color:black; " >Total Student:</span> <span>  '.$rows['tstudent'].'  </span> <br><span style="color:black; ">Advisor: </span><span> '.$rows['advisor'].' </span>
																<ul class="list-inline">
																	<li class="list-inline-item"></li>
																	<li class="list-inline-item"> </li>
																</ul>
															</div>
															<!-- end:Entry description -->
														</div>
														
														 <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
																<div class="right-content bg-white">
																	<div class="right-review">
																	
																		 <a href="course.php?res_id='.$rows['rs_id'].'" class="btn theme-btn-dash">View offerd course <i class="fa-solid fa-eye"></i></a> </div>
																</div>
																<!-- end:right info -->
															</div>';
										  }
						
						
						?>
                                    
                                </div>
                              
                            </div>
                         
                            
                                
                            </div>
                          
                          
                           
                        </div>
                    </div>
                </div>
           <!-- </section>
                    <section class="app-section">
            <div class="app-wrap">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">
                            <div class="col-xs-12 col-sm-5 right-image text-center">
                                <figure>  </figure>
                            </div>
                            <div class="col-xs-12 col-sm-7 left-text">
                                <h3></h3>
                                <p>

								</p>
                                <div class="social-btns">
                                    <a href="#" class="app-btn apple-button clearfix">
                                        <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                        <div class="pull-right"> <span class="text"></span> <span class="text-2">App Store</span> </div>
                                    </a>
                                    <a href="#" class="app-btn android-button clearfix">
                                        <div class="pull-left"><i class="fa fa-android"></i> </div>
                                        <div class="pull-right"> <span class="text"</span> <span class="text-2">Play Store</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
                    <!-- start: FOOTER -->
        <footer class="footer">
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
                                    <a href="#"> <img src="images/kash-logo.png"  alt="Maestro" height="40px"> </a>
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
</body>

</html>