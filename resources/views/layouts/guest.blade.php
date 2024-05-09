<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Boxass - Startup Landing Page Template">

    <!-- ========== Page Title ========== -->
    <title>My Rezime - AI Resume Creator</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{env('APP_URL')}}/assets/img/logor.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{env('APP_URL')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/animate.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Header 
    ============================================= -->
    <header id="home">
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav" class="navbar navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">

                    <div class="container">            
                        <!-- Start Atribute Navigation -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav button-light">
                    <ul>
                        <li>
                            <a href="{{url('/home')}}">My Account</a>
                        </li>
                    </ul>
                </div>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                           
                            <a class="navbar-brand" href="{{env('APP_URL')}}"><img src="{{env('APP_URL')}}/assets/img/rezmi.png" style="height: 60px; width: auto;" alt="Logo"></a>

                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                                
                                <li class="dropdown dropdown-right">
                                    <a href="#home" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Resume</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{env('APP_URL')}}">Create</a></li>
                                       
                                    </ul>
                                </li>
                                 <li class="dropdown dropdown-right">
                                    <a href="#home" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Cover Letter</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{env('APP_URL')}}">Create</a></li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#features">About</a>
                                </li>
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>   
 <!-- Hamburger Menu Button -->
                    
                </nav>
                <!-- End Navigation -->
               
                
            </div>
        </div>
    </header>
    <!-- End Header -->

    @yield('content')



    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item">
                            <img src="{{env('APP_URL')}}/assets/img/rezmi.png" style="height: 60px; width: auto;" alt="Logo">
                            <p>
                            My Rezime is transforming the resume writing process with the power of Artificial Intelligence. We empower job seekers of all backgrounds to create impactful resumes that stand out from the crowd.
                            </p>
                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>My Rezime</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Compnay History</a>
                                </li>
                                <li>
                                    <a href="https://books.google.co.in/books/about?id=c8X9EAAAQBAJ&redir_esc=y" target="_blank">Employees' Gate: The Book </a>
                                </li>
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a href="#">Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Cover Letter</h4>
                            <ul>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Strategy</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>News & Updates</h4>
                            
                            <div class="address">
                                 <ul>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Strategy</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
             
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>&copy; Copyright 2024. All Rights Reserved by <a href="{{env('APP_URL')}}">My Rezime</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{env('APP_URL')}}/assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/equal-height.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.appear.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.easing.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/modernizr.custom.13711.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/count-to.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/wow.min.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/jquery.backgroundMove.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/bootsnav.js"></script>
    <script src="{{env('APP_URL')}}/assets/js/main.js"></script>

</body>

<!-- Mirrored from validthemes.net/site-template/boxsass/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 08:42:29 GMT -->
</html>
