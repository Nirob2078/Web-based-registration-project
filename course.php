<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); // connection to db
error_reporting(0);
session_start();

include_once 'course-action.php'; //including controller

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="regi2.png">
    <title>Registration Form</title>
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
        <!-- top Links -->
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                  
                   
            </div>
        </div>
        

        <!-- end:Top links -->
        <!-- start: Inner page hero -->
        <?php $ress= mysqli_query($db,"select * from batch where rs_id='$_GET[res_id]'");
                                     $rows=mysqli_fetch_array($ress);
                                      
                                      ?>
        <section class="inner-page-hero bg-image" data-image-src="images/img/main.jpeg">
            <div class="profile">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                            <div class="image-wrap">
                                <figure><?php echo '<img src="admin/Res_img/'.$rows['image'].'" alt="batch logo">'; ?></figure>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                            <div class="pull-left right-text white-txt">
                                <h6><a href="#">Batch: <?php echo $rows['title']; ?></a></h6>
                               
                                <p><?php echo $rows['address']; ?></p>
                                <ul class="nav nav-inline">
                                    <li class="nav-item"> <a class="nav-link active" href="#"></a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
                                    <li class="nav-item ratings">
                                        <a class="nav-link" href="#"> <span>
                        
                                </span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end:Inner page hero -->
        <div class="breadcrumb">
            <div class="container">
               
            </div>
        </div>
        <div class="container m-t-30">
            <div class="row">
               

                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                  
                    <!-- end:Widget menu -->
                    <div class="menu-widget" id="2">
                        <div class="widget-heading">
                            <h3 class="widget-title ">
                          Your Courses <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
                          <i class="fa fa-angle-right pull-right"></i>
                          <i class="fa fa-angle-down pull-right"></i>
                          </a>
                       </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="collapse in" id="popular2">
                    <?php  // display values and item of food/course
                                $stmt = $db->prepare("select * from courses where rs_id='$_GET[res_id]'");
                                $stmt->execute();
                                $products = $stmt->get_result();
                                if (!empty($products)) 
                                {
                                foreach($products as $product)
                                    {
                    
                                                
                                                 
                                                 ?>
                            <div class="food-item" >
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <form method="post" action='course.php?res_id=<?php echo $_GET['res_id'];?>&action=add&id=<?php echo $product['d_id']; ?>'>
                                        <div class="rest-logo pull-left">
                                            <a class="restaurant-logo pull-left" href="#"><?php echo '<img src="admin/Res_img/courses/'.$product['img'].'" alt="Course logo">'; ?></a>
                                        </div>
                                        <!-- end:Logo -->
                                        <div class="rest-descr">
                                            <h6><a href="#"><?php echo $product['title']; ?></a></h6>
                                            <p> <?php echo $product['slogan']; ?></p>
                                        </div>
                                        <!-- end:Description -->
                                    </div>
                                    <!-- end:col -->
                                    <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> 
                                    <span class="price pull-right" >Cr. <?php echo $product['price']; ?></span>
                                  
                                      <input type="submit" class="btn theme-btn pull-right" style="margin-left:40px;" value="Add to Form" />
                                    </div>
                                    </form>
                                </div>
                                <!-- end:row -->
                            </div>
                            <!-- end:Food item -->
                            
                            <?php
                                  }
                                }
                                
                            ?>
                            
                            
                          
                        </div>
                        <!-- end:Collapse -->
                    </div>
                    <!-- end:Widget menu -->
                   
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    
                    <div class="widget widget-cart">
                           <div class="widget-heading">
                               <h3 class="widget-title text-dark">
                            Your Registraion Form <i class="fa-regular fa-address-card pull-right"></i>
                         </h3>
                                           
                         
                               <div class="clearfix"></div>
                           </div>
                           <div class="order-row bg-white">
                               <div class="widget-body">
                               
                               
                <?php

$item_total = 0;

foreach ($_SESSION["cart_item"] as $item)  // fetch items define current into session ID
{
                          ?>									
                               
                                   <div class="title-row" style="font-weight: lighter; font-size:16px">
                                   <?php echo $item["title"]; ?><a href="course.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>" >
                                   <!--<i class="fa fa-trash pull-right"> </i> --> <i class="fa-solid fa-delete-left pull-right" ></i></a>
                                   </div>
                                   
                                   <div class="form-group row no-gutter">
                                       <div class="col-xs-8">
                                            <input type="text" class="form-control b-r-0" value=<?php echo $item["price"]; ?> readonly id="exampleSelect1">
                                              
                                       </div>
                                       <div class="col-xs-4">
                                         </div>
                                   
                                 </div>
                                 
                        <?php
                            $item_total += ($item["price"]); // calculating current price into cart
}
                     ?>								  
                                 
                                 
                                 
                               </div>
                           </div>
                          
                        
                           <div class="widget-body">
                               <div class="price-wrap text-xs-center">
                                   <p>Total Credit </p>
                                   <h3 class="value"><strong><?php echo $item_total; ?></strong></h3>
                           
                                   <a href="sum.php?res_id=<?php echo $_GET['res_id'];?>&action=check"  class="btn theme-btn btn-lg">Confirm <i class="fa-solid fa-check" style="color: #ffffff;"></i></a>
                               </div>
                           </div>
                           
                   
                           
                           
                       </div>
               </div>
                <!-- end:Bar -->
                <!--
                <div class="col-xs-12 col-md-12 col-lg-3">
                    <div class="sidebar-wrap">
                       <div class="widget clearfix">
                        widget heading
                        <div class="widget-heading">
                            <h3 class="widget-title text-dark">
                          Your Batch
                       </h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li> <a href="#" class="tag">
                            
                             </a> </li>
                                <li> <a href="#" class="tag">
                           
                             </a> </li>
                                <li> <a href="#" class="tag">
                           
                             </a> </li>
                                <li> <a href="#" class="tag">
                             
                             </a> </li>
                                <li> <a href="#" class="tag">
                           
                             </a> </li>
                                <li> <a href="#" class="tag">
                             
                             </a> </li>
                                <li> <a href="#" class="tag">
                             
                             </a> </li>
                                <li> <a href="#" class="tag">
                           
                             </a> </li>
                                <li> <a href="#" class="tag">
                             
                             </a> </li>
                                <li> <a href="#" class="tag">
                           
                             </a> </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div> 
                end:Right Sidebar -->
            </div>
            <!-- end:row -->
        </div>
     
             
                    <section class="app-section">

            <div class="app-wrap"  style="background-color: white;">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">
                            <div class="col-xs-12 col-sm-5 right-image text-center">
                                <figure> <img src="images/" alt="" class="img-fluid"> </figure>
                            </div>
                            <div class="col-xs-12 col-sm-7 left-text">
                             
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <!-- end:page wrapper -->
    </div>
    <!--/end:Site wrapper -->
    <!-- Modal -->
  
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
