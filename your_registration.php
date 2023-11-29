<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  //if usser is not login redirected back to login page
{
	header('location:login.php');
}


?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="regi2.png">
    <title>Your Registration</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css" rel="stylesheet">
   
   


.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}


table { 
	width: 1000px; 
	border-collapse: collapse; 
	margin: auto;
   
	
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #44A6E7 ; 
	color: white; 
	font-weight: bolder; 
 
    
	
	}
 

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: center; 
	font-size: 15px;
	
	}

    table::before{
         width: 850px;
         height: 1000px;
    }

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%;
        margin: auto;
        font-size: larger;
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
        right:-9999px ;
        left: -9999px;
	}
	
	tr { border: 1px solid #ccc; 

      
    
    
    }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #44A6E7 ; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 50%; 
        height: 50%;
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);
		color: #000;
		font-weight: bold;
	}

}







	</style>
   
   
	</head>

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
                            <li class="nav-item"> <a class="nav-link active" href="batches.php">Course Offer <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Sign Up</a> </li>';
							}
						else
							{
									
									
								 echo
                                '<li class="nav-item"><a href="your_registration.php" class="nav-link ">Your Registration</a> </li>
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
           
            <!-- end:Top links -->
            <!-- start: Inner page hero -->

           <!--
            <div class="inner-page-hero bg-image" data-image-src="images/img/dis5.jpeg">
                <div class="container"> </div>
                 end:Container
            </div> -->
            <div class="result-show">
                <div class="container">
                    <div class="row">
                  
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="batches-page">
                <div class="container">
                   
                                <div class="row">
								
							<table class="nowrap table table-hover table-striped"  >
						  <thead>
							<tr  >
							
							  <th>Course</th>
							  <th>Credit</th>
							   <th>Status</th>
                               <th>Note</th>
							    <th>Date</th>
								<th>Course Withdraw</th>
							  
							</tr>
						  </thead>
						  <tbody>
						  
						  
							<?php 
						// displaying current session user login orders 
                     
                       
						$query_res= mysqli_query($db,"select * from users_regi where u_id='".$_SESSION['user_id']."'");
												if(!mysqli_num_rows($query_res) > 0 )
														{
															echo '<td colspan="6"><center>You have no registration data yet. </center></td>';
														}
													else
														{	
                                                           	      
                                                          
										  while($row=mysqli_fetch_array($query_res))
										  {
						
							?>
												<tr>	
														 <td data-column="Course"> <?php echo $row['title']; ?></td>
														 
														  <td data-column="Creadit"> <?php echo $row['price']; ?></td>
                                                          
                                                          
														   <td data-column="Status"> 
														   <?php 
																			$status=$row['status'];
																			if($status=="" or $status=="NULL")
																			{
																			?>
																			<button type="button" class="btn btn-info" style="font-weight:bold;">Submitted</button>
                                                    
																		   <?php 
																			  }
																			   if($status=="in process")
																			 { ?>
																				<button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"  aria-hidden="true" ></span>processing</button>
																			<?php
																				}
																			if($status=="approved")
																				{
																			?>
																			 <button type="button" class="btn btn-success" ><span  class="fa fa-check-circle" aria-hidden="true"></span>Approved</button> 
																			<?php 
																			} 
																			?>
																			<?php
																			if($status=="rejected")
																				{
																			?>
																			 <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i>Cancelled</button>
																			<?php 
																			} 
																			?>
                                                                            <?php
																			if($status=="withdraw")
																				{
																			?>
																			 <button type="button" class="btn btn-secondary" style="color:white; background-color:black"> withdraw <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
																		
																			<?php 
																			} 
																			?>
														   
														   
														   
														   
														   
														   </td>
                                                           <td data-column="Note" style="color: #374CB4 ;"> <?php echo $row['note']; ?></td>
														  <td data-column="Date"> <?php echo $row['date']; ?></td>
														   <td data-column="Action"> <a href="update_registration.php?order_del=<?php echo $row['o_id'];?>" onclick="return confirm('Are you sure for this withdraw?');"  class="btn btn-danger btn-flat btn-addon btn-xs m-b-10" ><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
															</td>
														 
												</tr>
												
											
														<?php }} ?>					
							
							
										
						
						  </tbody>
					</table>
						
					
                                    
                                </div>
                                <!--end:row -->
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
                                <h3></h3>
                                <p>

								</p>
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
        </section> -->
            <!-- start: FOOTER -->
           

  
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
