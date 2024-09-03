<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="./css/style.css" />
    <style>
        form {
            background-color: transparent;
            text-align: center;
 
            text-shadow: 1ex;
            color: black;
        }
 
        button {
            display: block;
            margin: auto;
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
 
        input[type=button] {
            color: crimson;
            size: 10px;
        }
 
        body {
            background-image: url(img/Quizbg.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }
 
 
        #submit {
            display: block;
            margin: auto;
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
 
        .question {
            display: none;
            font-size: 18px;
 
        }
 
        .question.active {
            display: block;
        }
 
        #resultSection {
            display: none;
        }
 
        #resultSection.active {
            display: block;
        }
 
        #startQuizButton {
            display: block;
            margin: auto;
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/Quiz1.jpeg)"></div>
        <!-- /Backgound Image -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1 class="white-text">Know your Field of Interest</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Quiz Form -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="text" class="container-fluid">
                    <br>
                    <div>
                        <h2 style=" margin: 50px;">For each option, give an answer from 0 to 5 indicating your level of
                            interest in the field:</h2>
                        <button id="startQuizButton" onclick="startQuiz()">Start Quiz</button>
                    </div>
 
                    <form id="quizForm" style="padding: 30px; display: none;">
                        <!--Question 1-->
                        <div class="question" id="question1">
                            <br>How much do you like to make new electric circuits? :
                            <select name="first" id="first" required
                                style="color: black;  margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 2-->
                        <div class="question" id="question2">
                            <br>How much do you like to dismantle and repair electronic circuits? :
                            <select name="second" id="second" required
                                style="color: black; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 3-->
                        <div class="question" id="question3">
                            <br>How much do you like to study about waves and signals? :
                            <select name="third" id="third" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 4-->
                        <div class="question" id="question4">
                            <br>How much do you like to mess with a hardware of a PC? :
                            <select name="fourth" id="fourth" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 5-->
                        <div class="question" id="question5">
                            <br>How much do you like to make softwares and apps?:
                            <select name="fifth" id="fifth" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 6-->
                        <div class="question" id="question6">
                            <br>How much do you like programming? :
                            <select name="sixth" id="sixth" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 7-->
                        <div class="question" id="question7">
                            <br>How much do you like to make new designs for buildings/cars? :
                            <select name="seventh" id="seventh" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 8-->
                        <div class="question" id="question8">
                            <br>How much do you like beautify a new model? :
                            <select name="eighth" id="eighth" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 9-->
                        <div class="question" id="question9">
                            <br>How much would you like to actually build a brand new model? :
                            <select name="ninth" id="ninth" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <!--Question 10-->
                        <div class="question" id="question10">
                            <br>How much would you like to work with tools? :
                            <select name="tenth" id="tenth" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
                        <div class="question" id="question11">
                            <br>How much do you like to work with security of a system? :
                            <select name="eleventh" id="eleventh" required
                                style="color: black;margin-left: 20px; font-size: 16px; padding: 10px;  border: 2px solid green;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button type="button" onclick="nextQuestion()"
                                style="margin-top: 20px; margin-bottom: 20px;">Next</button>
                        </div>
 
                        <div class="question" id="questionFinal">
                            <br><input type="button" id="submit" value="Submit" onclick="showResult()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Quiz Form -->
    <!-- Result Section -->
    <div class="container" id="resultSection">
        <div class="row">
            <div class="col-lg-12">
                <div id="text" class="container-fluid">
                    <div style="display: inline-block; margin: 50px;">
                        <h2>Your Field of Interest:</h2>
                    </div>
                    <div id="result" style="display: inline-block; font-size: 24px; font-weight: bold; color: green;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Result Section -->
    <!-- Footer -->
    <footer id="footer" class="section">
        <div class="footer-logo" style="margin-left: 30px; margin-bottom: -80px;">
            <a class="logo" href="index.php">
                <img src="./img/logo.png" alt="logo">
            </a>
        </div>
    </footer>
    <!-- /Footer -->
    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="js/google-map.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
        function startQuiz() {
            document.getElementById("startQuizButton").style.display = "none";
            document.getElementById("quizForm").style.display = "block";
            document.getElementById("question1").classList.add('active'); // Show the first question
        }
 
        function nextQuestion() {
            var questions = document.querySelectorAll('.question');
            var currentIndex = 0;
            for (var i = 0; i < questions.length; i++) {
                if (questions[i].classList.contains('active')) {
                    currentIndex = i;
                    questions[i].classList.remove('active');
                    break;
                }
            }
            if (currentIndex < questions.length - 1) {
                questions[currentIndex + 1].classList.add('active'); // Show the next question
            } else {
                // If there are no more questions, show the result section
                document.getElementById("quizForm").style.display = "none";
                document.getElementById("resultSection").classList.add("active");
            }
        }
 
        function showResult() {
            var a = 0,
                b = 0,
                c = 0,
                d = 0,
                e = 0,
                f = 0,
                g = 0,
                h = 0,
                i = 0,
                j = 0,
                k = 0;
            var a1 = 0,
                a2 = 0,
                a3 = 0,
                a4 = 0,
                a5 = 0,
                a6 = 0;
            a = Number(document.getElementById("first").value);
            a3 = a3 + a;
            a4 = a4 + a;
            // for now we took this, later on take all
            var max = Math.max(a1, a2, a3, a4, a5, a6);
            var result = '';
 
            if (a1 === max) {
                result = 'Civil Engineering';
            } else if (a2 === max) {
                result = 'Mechanical Engineering';
            } else if (a3 === max) {
                result = 'Electronics Engineering';
            } else if (a4 === max) {
                result = 'Electronics and Telecommunication Engineering';
            } else if (a5 === max) {
                result = 'Information and Technology Engineering';
            } else {
                result = 'Computer Engineering';
            }
 
            // Display the result section
            document.getElementById("result").innerHTML = result;
            document.getElementById("quizForm").style.display = "none";
            document.getElementById("resultSection").classList.add("active");
        }
    </script>
</body>
 
</html>