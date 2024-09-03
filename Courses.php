<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 
    <title>html Education Template</title>
 
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
 
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
 
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
 
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
 
    <!-- html5 shim and Respond.js for IE8 support of html5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
 
    <style>
        body {
            color: black;
        }
 
        /* Zoom effect */
        .course-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
			
        }

		.course-item{
			width:350px;
			height:500px;
		}
 
        .course-item:hover {
            transform: scale(1.1);
        }
 
        /* Border for course cards */
        .course-text {
            padding: 20px;
        }
		
    </style>
 
</head>
 
<body>
 
    <!-- Header -->
    <header id="header">
        <div class="container">
 
            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="index.php">
                        <img src="./img/logo-alt.png" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->
 
                <!-- Mobile toggle -->
                <button class="navbar-toggle">
                    <span></span>
                </button>
                <!-- /Mobile toggle -->
            </div>
 
            <!-- Navigation -->
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Quiz.php">Quiz</a></li>
                    <li><a href="Courses.php">Courses</a></li>
                    <li><a href="Internship.php">Internship</a></li>
                    <li><a href="contact.php">PYQ</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
 
        </div>
    </header>
    <!-- /Header -->
 
    <!-- Hero-area -->
    <div class="hero-area section">
 
        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/Cour.jpg)"></div>
        <!-- /Backgound Image -->
 
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center" style="padding-top: 50px; padding-bottom: 50px;">
 
                    <h1 class="white-text">Courses information</h1>
 
                </div>
            </div>
        </div>
 
    </div>
    <!-- /Hero-area -->
 
    <!-- Courses Section -->
    <section id="courses" class="section">
 
        <div class="container">
 
            <div class="row">
 
                <!-- Science Stream -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <a href="courses-science.php">
                            <div class="course-img">
                                <img src="img/Science11.png" alt="Science Stream" width="400px" height="300px" >
                            </div>
                            <div class="course-text">
                                <h3>Science Stream</h3>
                                <p>Science (both medical or non-medical stream) is a popular choice of subject among
                                    students especially those who wish to be a doctor or an engineer.</p>
                            </div>
                        </a>
                    </div>
                </div>
 
                <!-- Commerce Stream -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <a href="courses-commerce.php">
                            <div class="course-img">
                                <img src="img/Com.png" alt="Commerce Stream"  width="400px" height="300px">
                            </div>
                            <div class="course-text">
                                <h3>Commerce Stream</h3>
                                <p>Commerce as a stream of education can be defined as a study of trade and business
                                    activities such as the exchange of goods and services from producer to final
                                    consumer.</p>
                            </div>
                        </a>
                    </div>
                </div>
 
                <!-- Arts Stream -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <a href="courses-arts.php">
                            <div class="course-img">
                                <img src="img/arts stream.jpg" alt="Arts Stream"  width="400px" height="300px">
                            </div>
                            <div class="course-text">
                                <h3>Arts Stream</h3>
                                <p>Arts stream is very diverse. It covers a wide variety of studies such as visual arts,
                                    performing arts, literary arts, history, law, humanities subjects, etc.</p>
                            </div>
                        </a>
                    </div>
                </div>
 
            </div>
        </div>
 
    </section>
    <!-- /Courses Section -->
 
    <!-- Footer -->
    <footer id="footer" class="section">
 
        <!-- container -->
        <div class="container">
 
            <!-- row -->
            <div class="row">
 
                <!-- footer logo -->
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.php">
                            <img src="./img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- footer logo -->
 
                <!-- footer nav -->
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Quiz.php">Quiz</li>
                        <li><a href="Courses.php">Courses</a></li>
                        <li><a href="Internship.php">Internship</a></li>
                        <li><a href="contact.php">PYQ</a></li>
                    </ul>
                </div>
                <!-- /footer nav -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div id="bottom-footer" class="row">
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /Footer -->
 
    <!-- preloader -->
    <div id='preloader'>
        <div class='preloader'></div>
    </div>
    <!-- /preloader -->
 
    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="js/google-map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
 
</html>