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
      transition: transform 0.5s;
    }
 
    .card:hover {
      transform: scale(1.05);
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
      <!-- BA in Fine Arts Card -->
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="card">
          <a href="BFA-info.php">
            <div class="card-body text-center">
              <center>
                <img src="img/BFA.jpg" alt="BA in Fine Arts" class="img-responsive">
              </center>
              <h3 class="stream-name">BA in Fine Arts</h3>
              <p>BFA, or Bachelor of Fine Arts, is a specialized 4-year undergraduate program designed to teach students
                various aspects of visual and performing arts.</p>
            </div>
          </a>
 
        </div>
      </div>
      <!-- /BA in Fine Arts Card -->
 
      <!-- BA in English Card -->
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="card">
          <a href="BA English-info.php">
            <div class="card-body text-center">
              <center>
                <img src="img/English_Literates.jpg" alt="BA in English" class="img-responsive">
              </center>
              <h3 class="stream-name">BA in English</h3>
              <p>BA in English deals with the study of linguistics and specific areas of literature, such as
                Shakespearean plays, European Literature, and more.</p>
            </div>
          </a>
 
        </div>
      </div>
      <!-- /BA in English Card -->
 
      <!-- BA in History Card -->
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="card">
          <a href="BA History-info.php">
            <div class="card-body text-center">
              <center>
                <img src="img/history.png" alt="BA in History" class="img-responsive">
              </center>
              <h3 class="stream-name">BA in History</h3>
              <p>BA History is a three-year undergraduate course that focuses on Indian and international history.</p>
            </div>
          </a>
 
        </div>
      </div>
      <!-- /BA in History Card -->
    </div>
    <!-- /row -->
 
    <div class="row">
      <!-- BA in JMC Card -->
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="card">
          <a href="BJMC-info.php">
            <div class="card-body text-center">
              <center>
                <img src="img/BJMC.jpg" alt="BA in JMC" class="img-responsive">
              </center>
              <h3 class="stream-name">BA in JMC</h3>
              <p>BA Journalism and Mass Communication (BA JMC) is a bachelor's degree that covers various aspects of
                journalism and mass communication.</p>
            </div>
          </a>
 
        </div>
      </div>
      <!-- /BA in JMC Card -->
 
      <!-- BA in Economics Card -->
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="card">
          <a href="Economics-info.php">
            <div class="card-body text-center">
              <center>
                <img src="img/economics list.jpg" alt="BA in Economics" class="img-responsive">
              </center>
              <h3 class="stream-name">BA in Economics</h3>
              <p>BA in Economics is a three-year course that covers qualitative and quantitative approaches to Social
                Science.</p>
            </div>
          </a>
 
        </div>
      </div>
      <!-- /BA in Economics Card -->
 
      <!-- BA in Psychology Card -->
      <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="card"><a href="psychology-info.php">
            <div class="card-body text-center">
              <center>
                <img src="img/psychology list.png" alt="BA in Psychology" class="img-responsive">
              </center>
 
              <h3 class="stream-name">BA in Psychology</h3>
              <p>Psychology is the study of the mind and behavior, covering various areas like health, personality,
                human
                development, social behavior, and more.</p>
            </div>
          </a>
 
        </div>
      </div>
      <!-- /BA in Psychology Card -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
 
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
  <!-- /Footer -->
 
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