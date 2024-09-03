<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML Education Template</title>
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
 
    .card {
      margin-bottom: 20px;
      border-radius: 10px;
      border: 1px solid grey;
      overflow: hidden;
      position: relative;
      transition: border-color 0.5s, transform 0.5s;
    }
 
    .card:hover {
      border-color: #007bff;
      /* Change border color on hover */
      transform: scale(1.1);
      /* Zoom effect on hover */
    }
 
    .card .card-body {
      padding: 20px;
    }
 
    .card-body h3 {
      margin-top: 0;
    }
 
    .card-body p {
      margin-bottom: 0;
    }
 
    .course-options {
      list-style-type: disc;
      /* Use disc bullets */
      margin-left: 20px;
      /* Add some margin to the left */
    }
 
 
    .course-options li:hover {
      font-size: 1.2em;
      /* Increase font size on hover */
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
 
  <div id="top-shifted" class="container-fluid">
    <p class="text-center">Course Options</p>
  </div>
 
  <div class="container">
    <div class="row">
      <!-- BBA Card -->
      <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="card">
          <div class="container-fluid">
            <h3 class="text-center"><img src="img/BBA.jpg" height="250px" width="300px"><br>BBA</h3>
            <ul class="course-options">
              <li><a href="BBA Finance.php">Finance</a></li>
              <li><a href="BBA HR.php">HR</a></li>
              <li><a href="BBA Marketing.php">Marketing</a></li>
              <li><a href="BBA Retail Management.php">Retail Management</a></li>
            </ul>
            <p>
              One of the most common bachelor's degree programmes after class XII is Bachelor of Business
              Administration or BBA. The BBA course is the gateway to various job openings in a multitude of
              fields, including marketing, education, finance, sales, and government, to name only a few.
              This is a 3-year course.
            </p>
          </div>
        </div>
      </div>
      <!-- /BBA Card -->
 
      <!-- BCom Card -->
      <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="card">
          <div class="container-fluid">
            <h3 class="text-center"><img src="img/BCOM.jpg" width="300px" height="270px"><br>BCom</h3>
            <ul class="course-options">
              <li><a href="BCom CA.php">CA</a></li>
              <li><a href="BCom LLB.php">LLB</a></li>
            </ul>
            <p>
              Candidates are taught core subjects related to commerce and finance in the BCom course. The
              candidates are also given choices to choose from a few elective subjects during the three-year
              cycle. The curriculum typically lasts six semesters, during which the student is taught topics
              such as financial accounting, corporate tax, finance, business law, auditing, business
              management, etc.
            </p>
          </div>
        </div>
      </div>
      <!-- /BCom Card -->
    </div>
  </div>
 
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
        <!-- /footer logo -->
        <!-- footer nav -->
        <div class="col-md-6">
          <ul class="footer-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="Quiz.php">Quiz</a></li>
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
  <!-- /<!-- /Footer -->
 
  <!-- preloader -->
  <div id='preloader'>
    <div class='preloader'></div>
  </div>
  <!-- /preloader -->
 
  <!-- jQuery Plugins -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
 
</body>
 
</html>