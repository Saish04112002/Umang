<?php
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $education = $_POST["education"];
    $major = $_POST["major"];
    $graduation = $_POST["graduation"];
    $availability = $_POST["availability"];
    $department = $_POST["department"];

    $exists = false;
    $existsSql = "SELECT * FROM interns WHERE email='$email'";
    $result = mysqli_query($conn, $existsSql);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
        $showError = "Email Already Registered";
    } else {
        $sql = "INSERT INTO `interns` (`name`, `email`, `phone`, `education`, `major`, `graduation`, `availability`, `department`, `dt`) 
        VALUES ('$name', '$email', '$phone', '$education', '$major', '$graduation', '$availability', '$department', current_timestamp())";
        
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internship</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <style>
        label {
            width: 400px;
            font-family: sans-serif;
            font-size: 18px;
            display: inline-block;
            margin: 4px;
        }

        form {
            width: 400px;
        }

        body {
            background-image: url(img/arts2.png);
        }

        input[type=text] {
            display: inline-block;
            width: 400px;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 4px;
            border: .5px solid;
            text-decoration-color: black;
        }

        input[type="date"]::-webkit-input-placeholder {
            color: blue;
        }

        input[type="text"]::-webkit-input-placeholder {
            color: black;
        }

        div.abc {
            background-color: rgba(0, 0, 0, 0.5);
            padding-left: 50px;
            padding-top: 30px;
            padding-bottom: 30px;
            font-size: 15px;
            border-radius: 50px;
            color: #344540;
            box-shadow: 2px 2px 15px rgba(228, 14, 14, 0.3);
            width: 500px;
            margin: auto;
        }

        input[type=submit] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: none;
            background: orange;
            font-size: 15px;
        }

        h1 {
            text-align: center;
        }

        .alert {
            margin-top: 15px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
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
 <div class="bg-image bg-parallax overlay" style="background-image:url(./img/inter.jpg)"></div>
 <!-- /Backgound Image -->

 <div class="container">
     <div class="row">
         <div class="col-md-10 col-md-offset-1 text-center">
             <ul class="hero-area-tree">
                 <li><a href="index.php">Home</a></li>
                 <li>Internship Form</li>
             </ul>
             <h1 class="white-text">Internship Portal</h1>

         </div>
     </div>
 </div>

</div>

<!-- /Hero-area -->
    <!-- Main Content -->
    <h1 style="margin-top: 50px;margin-bottom: 50px;">Application Form</h1>
    <div class="abc">
        <?php if($showAlert): ?>
            <div class="alert alert-success" role="alert">
                Application submitted successfully!
            </div>
        <?php endif; ?>
        <?php if($showError): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $showError; ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter Your email" required><br>

            <label for="phone">Phone No:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter Your Phone no" required><br>

            <label for="education" style="display: inline-block;width: 200px; margin-top: 10px;">Current Qualification:</label>
            <select id="education" name="education" style="display: inline-block; padding:10px;margin-top: 10px; background-color: transparent; border: 1px solid white;">
                <option value="highschool">High School</option>
                <option value="undergrad">Undergraduate</option>
                <option value="graduate">Graduate</option>
                <option value="postGraduate">PostGraduate</option>
            </select><br>

            <label for="major">Major/Area of Study:</label>
            <input type="text" id="major" name="major" placeholder="Enter Your Area of Study" required><br>

            <label for="graduation">Expected Graduation Date:</label>
            <input type="date" id="graduation" name="graduation" required><br>

            <label for="availability">Availability:</label>
            <input type="date" id="availability" name="availability" required><br>

            <label for="department" style="display: inline-block; width: 200px; margin-top: 10px;">Interest:</label>
            <select id="department" name="department" style="display: inline-block; width: calc(100% - 220px); padding: 10px; margin-top: 10px; background-color: transparent; border: 1px solid white; margin-left: -110px;">
                <option value="marketing">Marketing</option>
                <option value="sales">Sales</option>
                <option value="it">IT</option>
                <option value="Arts">Arts and cultural</option>
                <option value="HR">HR</option>
                <option value="Food Studies">Food Studies</option>
                <option value="Media">Media</option>
                <option value="Healthcare">Healthcare</option>
                <option value="Law">Law</option>
                <option value="Science and technology">Science and technology</option>
            </select><br>

            <label for="resume" style="display: inline-block; width: 200px; margin-top: 15px;">Resume/CV:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required style="display: inline-block; padding: 10px;"><br>

            <input type="submit" value="Submit" style="margin-top: 15px;">
        </form>
    </div>
    <!-- /Main Content -->

    <!-- Footer -->
    <footer id="footer" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.php">
                            <img src="./img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Quiz.php">Quiz</a></li>
                        <li><a href="Courses.php">Courses</a></li>
                        <li><a href="Internship.php">Internship</a></li>
                        <li><a href="contact.php">PYQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="js/google-map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
