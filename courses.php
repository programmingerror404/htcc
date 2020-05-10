<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Courses || Educat</title>
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
                <!--Header Area Start-->
                <?php include 'header.php' ?>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">COURSES</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.php">Home</a></li>
                                            <li>Courses</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
                <!--Course Area Start-->
                <div class="course-area section-padding course-page">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($courses as $key => $value) { ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item">
                                    <div class="single-item-text">
                                        <br>
                                        <h4><a href="#"><?php echo $key; ?></a></h4>
                                        <br>
                                        <p><?php echo $value; ?></p>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item">
                                    <div class="single-item-text">
                                        <br>
                                        <h4><a href="#">Other courses</a></h4>
                                        <br>
                                    
                                            <ul style="min-height: 275px;margin-bottom:10px">
                                                <li>
                                                    NTT
                                                </li>
                                                <li>
                                                    CTT 
                                                </li>
                                                <li>
                                                    Bombay Art
                                                </li>
                                                <li>
                                                    Computer and Laptop Repairing Services
                                                </li>
                                            </ol>
                                        <br>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Learn Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!--End of Course Area-->
                
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