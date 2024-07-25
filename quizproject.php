<?php
session_start();
?>


<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Home Page</title>
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('background.jpg');
    height: 20%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 1600px 800px;
}


.navbar-nav a {
    font-family: poppins;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;
}

.navbar-light .navbar-brand {
    color: #fff;
    font-size: 25px;
    font-weight: bold;
    font-family: "Audiowide", sans-serif;
    letter-spacing: 3px;
}

.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .show > .nav-link {
    color: #fff;
}

.navbar-light .navbar-nav .nav-link {
    color: #fff;
}

.navbar-nav {
    text-align: center;
}

.nav-link {
    padding: 0.2rem 1rem;
}

.nav-link.active,
.nav-link:focus,
.nav-link:hover {
    color: #fff;
    background: gray;
    transition: .5s;
}

.navbar-toggler {
    padding: 1px 5px;
    font-size: 18px;
    line-height: 0.3;
    background: #fff;
}

.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
    color: #fff;
}

.w-100 {
    height: 100vh;
}

@media only screen and (max-width: 767px) {
    .navbar-nav.ml-auto {
        background: rgba(0, 0, 0, 0.5);
    }

    .navbar-nav a {
        font-size: 14px;
        font-weight: normal;
    }
}

/* center text and image */
.center-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container-fluid {
    position: relative;
    text-align: center;
    font-family: "Audiowide", sans-serif;
    text-shadow: 3px 3px 3px whitesmoke;
    color: white;
}

h1 {
    color: black;
}
h2 {
  color: white;
  text-transform: uppercase;
}
/* footer code*/
.footer{
  background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 5px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 20px;
  width: 20px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}


@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
} 
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#" style="text-shadow: -1px -1px 0 dimgray, 1px -1px 0 dimgray, -1px 1px 0 dimgray, 1px 1px 0 dimgray;">
            <img src="Removal-555.png" height="50px" width="50px"><b>  Quizpro</b>
        </a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="text-shadow: -1px -1px 0 dimgray, 1px -1px 0 dimgray, -1px 1px 0 dimgray, 1px 1px 0 dimgray;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="text-shadow: -1px -1px 0 dimgray, 1px -1px 0 dimgray, -1px 1px 0 dimgray, 1px 1px 0 dimgray;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php" style="text-shadow: -1px -1px 0 dimgray, 1px -1px 0 dimgray, -1px 1px 0 dimgray, 1px 1px 0 dimgray;">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="csslog.php" style="text-shadow: -1px -1px 0 dimgray, 1px -1px 0 dimgray, -1px 1px 0 dimgray, 1px 1px 0 dimgray;">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php" style="text-shadow: -1px -1px 0 dimgray, 1px -1px 0 dimgray, -1px 1px 0 dimgray, 1px 1px 0 dimgray;">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid center-content">
<h2>
      <?php if (isset($_SESSION['username'])): ?>
                <?php echo $_SESSION['username']; ?>!</p>
                <?php else: ?>
                  
                <?php endif; ?>
                </h2>
    <h1 class="font-effect-shadow-multiple">"Cheating on a Quiz Show?<br>That's sort of like<br> plagiarizing of a comic strips"</h1>
    <br>
    <a href="quiz.php"><img src="starttt-removebg-preview.png" width="200" height="100"></a>
    <a href="index.php"><p>Log Out</p></a>
</div>


            
                <section id="menu" class="py-5" style="color: black;">
                    <div class="container">
                      <h2 class="text-center mb-4">Quiz topics:</h2>
                      <div id="carouselTopics" class="carousel slide" data-ride="carousel" data-interval="2000">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="row">
                              <div class="col-md-4 mb-4">
                                <div class="card">
                                  <img src="math1.jpg" class="card-img-top" height="200px" width="200px">
                                  <div class="card-body">
                                    <h5 class="card-title">Mathematics</h5>
                                    <a href="in.mathgames.com" class="btn btn-primary">Start Now</a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 mb-4">
                                <div class="card">
                                  <img src="phy.jpeg" class="card-img-top" height="200px" width="200px">
                                  <div class="card-body">
                                    <h5 class="card-title">Physics</h5>
                                    <a href="https://www.edudose.com/gk/physics-quiz/#google_vignette" class="btn btn-primary">Start Now</a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 mb-4">
                                <div class="card">
                                  <img src="chem.jpeg" class="card-img-top" height="200px" width="200px">
                                  <div class="card-body">
                                    <h5 class="card-title">Chemistry</h5>
                                    <a href="https://www.abc.net.au/science/games/quizzes/2010/chemistry/" class="btn btn-primary">Start Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row">
                              <div class="col-md-4 mb-4">
                                <div class="card">
                                  <img src="english.jpg" class="card-img-top" height="200px" width="200px">
                                  <div class="card-body">
                                    <h5 class="card-title">English</h5>
                                    <a href="online order.html" class="btn btn-primary">Start Now</a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 mb-4">
                                <div class="card">
                                  <img src="computerscience.jpg" class="card-img-top" height="200px" width="200px">
                                  <div class="card-body">
                                    <h5 class="card-title">Computer science</h5>
                                    <a href="https://www.proprofs.com/quiz-school/story.php?title=computer-science-quiz" class="btn btn-primary">Start Now</a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 mb-4">
                                <div class="card">
                                  <img src="biology.jpg" class="card-img-top" height="200px" width="200px">
                                  <div class="card-body">
                                    <h5 class="card-title">Biology</h5>
                                    <a href="https://www.biologycorner.com/quizzes/" class="btn btn-primary">Start Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Add more carousel items if needed -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselTopics" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselTopics" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </section>
                  
                  <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Quick link</h4>
          <ul>
            <li><a href="about us.html">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="privacy.html">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Our Service</h4>
          <ul>
            <li><a href="#">Fast learning</a></li>
            <li><a href="#">Fast payments</a></li>
            <li><a href="#">24/7 Service</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="#">+63 15 3489 756</a></li>
            <li><a href="#">+91 54 8596 712</a></li>
            <li><a href="#">Qpro@gmail.com</a></li>
            <li><a href="#">Quizpro@gmail.com</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>

                  
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
