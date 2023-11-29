<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="stw.png">
    <title>Home</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
    <!-- Swiper Css> -->
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.0.3/swiper-bundle.min.css">
   
    
   <!--<link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
   


<body class="home">
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/stw.png" alt="" height="80px"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav" >
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="batches.php">Course Offer<span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item" ><a href="registration.php" class="nav-link active">Sign Up</a> </li>';
   
							}
						else
							{
									//if user is login
									
									
									echo 
                                    
                                    '<li class="nav-item"><a href="your_registration.php" class="nav-link active">Your Registration</a> </li>
                                    <li class="nav-item " ><a href="logout.php" class="btn btn-danger active" style="margine-left:20px"> Logout <i class="fa-solid fa-user fa" style="color: #f1f4f8; "></i></a> </li>';
                                   
                                  
							}

						?>
							 
                        </ul>
                     
						 
                    </div>
                </div>
                 <!--
                <div class="banner-form">
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Batch</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="Your Batch"> </div>
                            </div>
                            <button onclick="location.href='batches.php'" type="button" class="btn theme-btn btn-lg">Search </button>
                        </form>
                    </div> -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/main.jpeg" >
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                   
                 
                 
                    <!-- end:Steps -->
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
      
	  
	
        <!-- Popular block starts -->
    
    
        <section class="popular" >
        <div class="title text-xs-center m-b-30" style="margin-top:20px">
                    <h2>Department of Computer Science & Engineering </h2>
                    <p class="lead">WE BRING OUT BEST IN YOU <i class="fa-solid fa-bullseye fa"></i></p>
        </div>
        <div class="slide-container swiper" >
            <div class="slide-content  ">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/pro-vc-sir-01.jpg" alt="" class="card-img">
                            </div>
                        </div>
                     
                        <div class="card-content">
                            <h2 class="name">Prof. Dr. Md. Younus Mia</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Honorable Pro Vice Chancellor</h2>
                            <p class="description"> Currently working as a Pro Vice Chancellor at Stamford University Bangladesh.
Post Doc. Research, Kyoto University, Japan
Post Doc. Research, University of Stirling, Scotland, UK
Ph.D. (Aquatic Biosciences), Tokyo University of Fisheries, Japan</p>

                            <button class="button"> view More</button>

                       </div> 

                     

                    </div>
                
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/chairman.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Md.Shahedul Islam</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Acting Chairman</h2>
                            <p class="description">Currently working as a Chairman at the Department of Computer Science & Engineeringin Stamford University Bangladesh.He was an Coordinator of Computer Science and Engineering department stamford university Bangladesh

                            </p>

                            <button class="button"> view More</button>
                         </div>       
                    </div>

                     <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/fc2.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Dr.Mehedi Hasan</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Academic Advisor</h2>
                            <p class="description">He is currently a faculty member in the Department of Robotics and Mechatronics Engineering at the University of Dhaka.Earlier, he was an Associate Professor at Stamford University and Dr. Mehedi received his Ph.D. in Computer Science from UNSW Australia</p>

                            <button class="button"> view More</button>

                         </div>        
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/fc4.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Farzana Habiba</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Assistant Prof. & Course Coordinator (NS)</h2>
                            <p class="description">Working at Stamford University Bangladesh since 2005. Completed B.Sc. (Hons), M.Sc. (Mathematics), Jahangirnagar University. Obtained M.Phil. from the Department of Mathematics, Bangladesh University of Engineering and Technology (BUET). </p>
                            <button class="button"> view More</button>

                         </div>        
                    </div>
                 
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/fc3.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Tanveer Ahmed</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Senior Lecturer </h2>
                            <p class="description"><strong> </strong>currently working as a faculty at the Department of Computer Science &Engineeringin Stamford University Bangladesh.He completed Bachelor of Science (Engg.) in Computer Science & Engineering from the Islamic University of Technology. </p>

                            <button class="button"> view More</button>

                         </div>        
                    </div> 
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/nipamam.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Tamanna Haque Nipa</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Associate Professor</h2>
                            <p class="description"><strong> </strong>currently working as a faculty at the Department of Computer Science & Engineering in Stamford University Bangladesh. she joined here from January 2004.She completed my graduation from Stamford University Bangladesh in Computer Science & Engineering. </p>

                            <button class="button"> view More</button>

                         </div>        
                    </div> 
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/Emonsir.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Tarikuzzaman Emon</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Assistant Professor</h2>
                            <p class="description"><strong> </strong>currently working as an Assistant Professor at the Department of Computer Science & Engineering in Stamford University Bangladesh.He completed Master of Computer Networking in Computer Science & Engineering from the London Metropolitan University, UK. </p>

                            <button class="button"> view More</button>

                         </div>        
                    </div> 
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/fc17.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Dr. Md. Tauhid Bin Iqbal</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Assistant Professor</h2>
                            <p class="description"><strong> </strong>currently working as an Assistant Professor at the Department of Computer Science & Engineering, Stamford University Bangladesh. He received my Ph.D. degree (2019) in Computer Science and Engineering from Kyung Hee University, South Korea.</p>

                            <button class="button"> view More</button>

                         </div>        
                    </div> 
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/fc7.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Adnan Ferdous Ashrafi</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Senior Lecturer</h2>
                            <p class="description"><strong> </strong> currently a faculty at Department of CSE of Stamford University Bangladesh. His area of research interests vary among these fields: bioinformatics, image processing, data scraping and recommendation techniques, machine learning and optimization.</p>

                            <button class="button"> view More</button>

                         </div>        
                    </div> 
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/fc8.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Md Towhidul Islam Robin</h2>
                            <h2 style="color: #4070f4;; font-size:14px" >Senior Lecturer</h2>
                            <p class="description"><strong> </strong> currently serving as a Senior Lecturer at the Department of Computer Science and Engineering in Stamford University Bangladesh (SUB). He completed his B.Sc. (Eng.) degree from Ahsanullah University of Science and Technology (AUST) in 2015 </p>

                            <button class="button"> view More</button>

                         </div>        
                    </div> 
                        
                        </div>
                   

                  
            
                </div>
            </div>
             <div class="swiper-button-next swiper-navBtn"></div>
             <div class="swiper-button-prev swiper-navBtn"></div>
             <div class="swiper-button-pagination"></div>
             
        </div>

 
    </section>
          <!-- Popular block ends -->
        <!-- How it works block starts -->
        <section class="how-it-works">
            <div class="container">
                <div class="text-xs-center">
                    <h2></h2>
                    <!-- 3 block sections starts -->
                    <div class="row how-it-works-solution">
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                            <div class="how-it-works-wrap">
                                <div class="step step-1">

                                <img src="images/hm.png" alt="" height="100px">
                                <p class="bot-name-p" style="color: white;"><strong>Student</strong> </p>
                            <p></p>
                                    <!--
                                    <div class="icon" data-step="1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483 483" width="512" height="512">
                                            <g fill="#FFF">
                                                <path d="M467.006 177.92c-.055-1.573-.469-3.321-1.233-4.755L407.006 62.877V10.5c0-5.799-4.701-10.5-10.5-10.5h-310c-5.799 0-10.5 4.701-10.5 10.5v52.375L17.228 173.164a10.476 10.476 0 0 0-1.22 4.938h-.014V472.5c0 5.799 4.701 10.5 10.5 10.5h430.012c5.799 0 10.5-4.701 10.5-10.5V177.92zM282.379 76l18.007 91.602H182.583L200.445 76h81.934zm19.391 112.602c-4.964 29.003-30.096 51.143-60.281 51.143-30.173 0-55.295-22.139-60.258-51.143H301.77zm143.331 0c-4.96 29.003-30.075 51.143-60.237 51.143-30.185 0-55.317-22.139-60.281-51.143h120.518zm-123.314-21L303.78 76h86.423l48.81 91.602H321.787zM97.006 55V21h289v34h-289zm-4.198 21h86.243l-17.863 91.602h-117.2L92.808 76zm65.582 112.602c-5.028 28.475-30.113 50.19-60.229 50.19s-55.201-21.715-60.23-50.19H158.39zM300 462H183V306h117v156zm21 0V295.5c0-5.799-4.701-10.5-10.5-10.5h-138c-5.799 0-10.5 4.701-10.5 10.5V462H36.994V232.743a82.558 82.558 0 0 0 3.101 3.255c15.485 15.344 36.106 23.794 58.065 23.794s42.58-8.45 58.065-23.794a81.625 81.625 0 0 0 13.525-17.672c14.067 25.281 40.944 42.418 71.737 42.418 30.752 0 57.597-17.081 71.688-42.294 14.091 25.213 40.936 42.294 71.688 42.294 24.262 0 46.092-10.645 61.143-27.528V462H321z" />
                                                <path d="M202.494 386h22c5.799 0 10.5-4.701 10.5-10.5s-4.701-10.5-10.5-10.5h-22c-5.799 0-10.5 4.701-10.5 10.5s4.701 10.5 10.5 10.5z" /> </g>
                                        </svg>
                                    </div>
                                    <h3>Choose a batch</h3>
                                    <p>We got you covered with more than 600+ popular delivery batches.</p>
                                        -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                            <div class="step step-2">
                            <img src="images/study.png" alt="" height="100px">
                            <p class="bot-name-p" style="color: white;"><strong>Study and Hard working</strong></p>
                            <p></p>
                          
                                <!--
                                <div class="icon" data-step="2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 380.721 380.721">
                                        <g fill="#FFF">
                                            <path d="M58.727 281.236c.32-5.217.657-10.457 1.319-15.709 1.261-12.525 3.974-25.05 6.733-37.296a543.51 543.51 0 0 1 5.449-17.997c2.463-5.729 4.868-11.433 7.25-17.01 5.438-10.898 11.491-21.07 18.724-29.593 1.737-2.19 3.427-4.328 5.095-6.46 1.912-1.894 3.805-3.747 5.676-5.588 3.863-3.509 7.221-7.273 11.107-10.091 7.686-5.711 14.529-11.137 21.477-14.506 6.698-3.724 12.455-6.982 17.631-8.812 10.125-4.084 15.883-6.141 15.883-6.141s-4.915 3.893-13.502 10.207c-4.449 2.917-9.114 7.488-14.721 12.147-5.803 4.461-11.107 10.84-17.358 16.992-3.149 3.114-5.588 7.064-8.551 10.684-1.452 1.83-2.928 3.712-4.427 5.6a1225.858 1225.858 0 0 1-3.84 6.286c-5.537 8.208-9.673 17.858-13.995 27.664-1.748 5.1-3.566 10.283-5.391 15.534a371.593 371.593 0 0 1-4.16 16.476c-2.266 11.271-4.502 22.761-5.438 34.612-.68 4.287-1.022 8.633-1.383 12.979 94 .023 166.775.069 268.589.069.337-4.462.534-8.97.534-13.536 0-85.746-62.509-156.352-142.875-165.705 5.17-4.869 8.436-11.758 8.436-19.433-.023-14.692-11.921-26.612-26.631-26.612-14.715 0-26.652 11.92-26.652 26.642 0 7.668 3.265 14.558 8.464 19.426-80.396 9.353-142.869 79.96-142.869 165.706 0 4.543.168 9.027.5 13.467 9.935-.002 19.526-.002 28.926-.002zM0 291.135h380.721v33.59H0z" /> </g>
                                    </svg>
                                </div>
                                <h3>Choose your favorite dish</h3>
                                <p>We are serving you more than 3000+ popular dish varieties.</p>
                                        -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                            <div class="step step-3">
                            <img src="images/graduate.png" alt="" height="100px">
                            <p class="bot-name-p" style="color: white;"><strong>Graduated and Skilled</strong> </p>
                            <p>
</p>
                                <!--<div class="icon" data-step="3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                                        <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" /> </svg>
                                </div>
                                <h3>Delivery & Payment</h3>
                                <p>Get your food delivered within 15 mins and enjoy your meal..!</p>
                                        -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 block sections ends -->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p class="pay-info">We Bring Out Best In You</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it works block ends -->
        <!-- Featured batches starts -->
        <section class="featured-restaurants">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title-block pull-left">
                            <h3>All Batches <i class="fa-solid fa-arrow-down fa"></i></h3> </div>
                    </div>
                    
                </div>
                <!-- batches listing starts -->
                <div class="row">
                    <div class="restaurant-listing">
                        
						
						<?php  //fetching records from table and filter using html data-filter tag
						$ress= mysqli_query($db,"select * from batch");  
									      while($rows=mysqli_fetch_array($ress))
										  {
													// fetch records from res_category table according to catgory ID
													$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
													 $rowss=mysqli_fetch_array($query);
						
													 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
														<div class="restaurant-wrap">
															<div class="row">
																<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="restaurant-logo" href="course.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Course logo"> </a>
																</div>
																<!--end:col -->
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5> batches: <a href="course.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span> Total Student: '.$rows['tstudent'].'</span>
																	<div class="bottom-part">
																		<div class="cost"><i class="fa fa-check"></i> Computer Science & Engineering </div>
																		<div class="mins"></div>
																		<div class="ratings">  </div>
																	</div>
																</div>
																<!-- end:col -->
															</div>
															<!-- end:row -->
														</div>
														<!--end:batches wrap -->
													</div>';
										  }
						
						
						?>
						
							
						
					
                    </div>
                </div>
                <!-- batcheses listing ends -->
               
            </div>
        </section>
        <!-- Featured batcheses ends
        <section class="app-section">
            <div class="app-wrap">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">
                           
                            <div class="col-xs-12 col-sm-7 left-text">
                                <h3></h3>
                                <p></p>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.3/swiper-bundle.min.js"></script>
   
   <!-- <script src="js/script.js"></script> -->
    
   
   <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.css"></script>   slidesPerGroup:4,-->

   <script>
    var swiper = new Swiper(".slide-content", {
      slidesPerView: 5,
      loop: true,
      spaceBetween: 35,
      centerSlide:'true',
      fade:'true',
      loopFillGroupWithBlank: true,
      grabCursor:'true',
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets:true,
      },
      navigation:{
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints:{
        0:{
            slidesPerView: 1,
        },
        520:{
            slidesPerView: 2,

        },
        950:{
          slidesPerView:5,
        },

      },
    });
  </script>
</body>



<!--Swipper Js-->


<!--js-->



</html>