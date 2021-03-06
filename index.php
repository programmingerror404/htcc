<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || High Tech</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
		<!-- Owl Carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        
		<!-- Meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        
		<!-- Animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        
		<!-- Animated Headlines CSS
		============================================ -->
        <link rel="stylesheet" href="css/animated-headlines.css">
        
        <!-- Nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        
		<!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="css/material-design-iconic-font.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        
		<!-- Slick CSS
		============================================ -->
        <link rel="stylesheet" href="css/slick.css">
        
		<!-- Video CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery.mb.YTPlayer.css">
        
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        
		<!-- Color CSS
		============================================ -->
        <link rel="stylesheet" href="css/color.css">
        
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
		<!-- Modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	    
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                
                <?php include 'header.php' ?>
                <!--Slider Area Start-->
                <div class="slider-area">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides">	
                            <img src="img/slider/2.jpg" alt="" title="#slider-1-caption1"/>
                        </div>
                        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content">
                                                    <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s">Education Needs<br>
                                                    Complete Solution</h1>
                                                    <p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> If you don't design your own life plan, chances are you'll fall into someone else's plan. <br> And guess what they have planned for you? Not much</p>
                                                    <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                                        <a class="button-default" href="#">View Courses</a>	                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--End of Slider Area-->
                    <!--Teachers Area Start-->
                <div class="teachers-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper white">
                                    <div class="section-title">
                                        <h3>Categories</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($categories as $key => $value) { ?>
                            <div class="col-lg-3 col-md-4 col-sm-12 mb-10">
                                <div class="single-teacher-item">
                                    <div class="single-teacher-text">
                                        <h3><a href="#"><?php echo $key; ?></a></h3>
                                        <p><?php echo $value; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--Course Area Start-->
                <div class="course-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>POPULAR COURSES</h3>
                                        <p> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/1.jpg" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">BCA</a></h4>
                                        <p>B.C.A. or Bachelor of Computer Applications is an undergraduate Information Technology course. Computer Applications or Application software is computer software designed to help the user to perform singular or multiple related specific tasks. The duration of Bachelor of Computer Applications is three years. </p>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-4 col-sm-6">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/1.jpg" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">B.Sc</a></h4>
                                        <p> After passing the 12th standard in Sciences (Physics, Chemistry, Mathematics, and/or Biology) from a recognized board school, a student can apply to a college for a B.Sc degree. It is an undergraduate course, which could either be offered in annual examination system (3 years) or semester system (6 semesters).</p>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/1.jpg" alt=""></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">MBA</a></h4>
                                        <p>Master of Business Administration is a postgraduate degree awarded to students who have mastered the study of business. MBA provides an unequalled opportunity to build your global network, challenge your perspectives and develop the leadership and general management skills for global business success. </p>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 text-center">
                                <a href="#" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Course Area-->
                <!--Fun Factor Area Start-->
                <div class="fun-factor-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper white">
                                    <div class="section-title">
                                        <h3>IMPORTANT STATS</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                    <h4>Teachers</h4>
                                    <h2><span class="counter">10</span>+</h2>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                    <h4>Students</h4>
                                    <h2><span class="counter">200</span>+</h2>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                    <h4>Courses</h4>
                                    <h2><span class="counter">50</span>+</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Fun Factor Area-->   
                 <!--Slider Area Start-->
                <div class="preview-2">
                   <div id="nivoslider-1" class="slides">	
                        <img src="img/slider/6.jpg" alt=""/>
                    </div> 
                </div>
                <!--End of Slider Area-->
                <!--Latest News Area Start--> 
                <!-- <div class="latest-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Latest News</h3>
                                        
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="img/latest/1.jpg" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="img/latest/2.jpg" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="img/latest/3.jpg" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-latest-item">
                                    <div class="single-latest-image">
                                        <a href="#"><img src="img/latest/4.jpg" alt=""></a>
                                    </div>
                                    <div class="single-latest-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                           <span><i class="zmdi zmdi-eye"></i>59</span>
                                           <span><i class="zmdi zmdi-comments"></i>19</span>
                                       </div>
                                       <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                       <a href="#" class="button-default">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End of Latest News Area--> 
                
                <!--Testimonial Area Start-->
                <!-- <div class="testimonial-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                                        <div class="testimonial-image-slider text-center">
                                            <div class="sin-testiImage">
                                                <img src="img/testimonial/1.jpg" alt="testimonial 1" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="img/testimonial/2.jpg" alt="testimonial 2" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="img/testimonial/3.jpg" alt="testimonial 3" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="img/testimonial/1.jpg" alt="testimonial 1" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="img/testimonial/2.jpg" alt="testimonial 2" />
                                            </div>
                                            <div class="sin-testiImage">
                                                <img src="img/testimonial/3.jpg" alt="testimonial 3" />
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="testimonial-text-slider text-center">
                                    <div class="sin-testiText">
                                        <h2>M S Nawaz </h2>
                                        <p> of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Chowchilla Madera</h2>
                                        <p>Nam nec tellus a odio tincidunt This lorem is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean nisi sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum gravida.</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Kattie Luis</h2>
                                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean tincidunt sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum Photoshop.</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>M S Nawaz </h2>
                                        <p> of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Chowchilla Madera</h2>
                                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aliquet lorem quis tellus velit bibendum auctor, nisi elit consequat ipsum</p>
                                    </div>
                                    <div class="sin-testiText">
                                        <h2>Kattie Luis</h2>
                                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem gravida tincidunt quis bibendum auctor, nisi elit consequat ipsum</p>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End of Testimonial Area-->
                <!--Event Area Start-->
                <!-- <div class="event-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>OUR EVENTS</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="img/event/1.jpg" alt="">
                                            <span><span>15</span>Jun</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                           <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                                       </div>
                                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                                       <a class="button-default" href="#">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="img/event/2.jpg" alt="">
                                            <span><span>20</span>Apr</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                           <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                                       </div>
                                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                                       <a class="button-default" href="#">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 hidden-sm">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="img/event/3.jpg" alt="">
                                            <span><span>06</span>Dec</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">Learn English in ease</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                           <span><i class="zmdi zmdi-pin"></i>Dhaka. Bangladesh</span>
                                       </div>
                                       <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                                       <a class="button-default" href="#">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--End of Event Area-->
                <!--Newsletter Area Start-->
                
                <!--End of Newsletter Area-->
                <?php include 'footer.php' ?>
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
        
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
        
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
        
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        
		<!-- Waypoints JS
		============================================ -->		
        <script src="js/waypoints.min.js"></script>
        
		<!-- Counterup JS
		============================================ -->		
        <script src="js/jquery.counterup.min.js"></script>
        
		<!-- Slick JS
		============================================ -->		
        <script src="js/slick.min.js"></script>
        
		<!-- Animated Headlines JS
		============================================ -->		
        <script src="js/animated-headlines.js"></script>
        
		<!-- Textilate JS
		============================================ -->		
        <script src="js/textilate.js"></script>
        
		<!-- Lettering JS
		============================================ -->		
        <script src="js/lettering.js"></script>
        
		<!-- Video Player JS
		============================================ -->		
        <script src="js/jquery.mb.YTPlayer.js"></script>
        
		<!-- AJax Mail JS
		============================================ -->		
        <script src="js/ajax-mail.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>