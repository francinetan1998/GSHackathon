<?php

$achievement = "";
if(isset($_POST['achievement'])) {
    $achievement = $_POST['achievement'];
} 

echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Horizon</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .slidecontainer {
    width: 100%;
    }

    .slider {
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
    }

    .slider:hover {
    opacity: 1;
    }

    .slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
    }

    .slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
    }
    </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="1_welcome.html">Goldman Sachs</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Goals</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Horizon</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Capital</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <!-- Portfolio Section-->
        <section class="page-section about" id="about">

            <div class="container">
            <div class="row justify-content-md-center">
                <div class="w-50 alert alert-warning alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Hey there!</strong> If you are 20 this year and want to achieve this goal by 30, simply select 10!
                </div>
    
             </div>
             </div> 

             <br>

            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">#2 Choose your time frame</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
        
                <body>
                    
                    <center><h5>In how many years do you want to achieve this goal?</h5></center>
                    <br>
                    <div class="row">
                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="assets/img/portfolio/time.jpg" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text"><center><strong>Less than 1 year</strong></center></p>
                              <form method="POST" action="4_capital.php">
                                <input type="hidden" name="achievement" value="' . $achievement . '">
                                <input type="hidden" name="investment" value="Investment_A">
                                <center><input name="submit" type="submit" value="submit" class="btn btn-primary"></center>
                              </form>
                            </div>
                        </div>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="assets/img/portfolio/time.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><center><strong>1 - 5 years</strong></center></p>
                                <form method="POST" action="4_capital.php">
                                <input type="hidden" name="achievement" value="' . $achievement . '">
                                <input type="hidden" name="investment" value="Investment_B">
                                <center><input name="submit" type="submit" value="submit" class="btn btn-primary"></center>
                              </form>
                            </div>
                          </div>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                          <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="assets/img/portfolio/time.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><center><strong>6 - 10 years</strong></center></p>
                                <form method="POST" action="4_capital.php">
                                <input type="hidden" name="achievement" value="' . $achievement . '">
                                <input type="hidden" name="investment" value="Investment_C">
                                <center><input name="submit" type="submit" value="submit" class="btn btn-primary"></center>
                              </form>
                            </div>
                          </div>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                          <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="assets/img/portfolio/time.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><center><strong>More than 10 years</strong></center></p>
                                <form method="POST" action="4_capital.php">
                                <input type="hidden" name="achievement" value="' . $achievement . '">
                                <input type="hidden" name="investment" value="Investment_D">
                                <center><input name="submit" type="submit" value="submit" class="btn btn-primary"></center>
                              </form>
                            </div>
                          </div>
                        </div>
                    <!-- <div class="slidecontainer"> -->
                      <!-- <p>Default range slider:</p>
                      <input type="range" min="1" max="100" value="50"> -->
                      
                      <!-- <p>Custom range slider:</p> -->
                      <!-- <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                    </div> -->
                    
                </body>  
                <br>
                <!-- <div class="row justify-content-center">
                    <a button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" href="3_horizon.html">Back</button></a>
                </div> -->    

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>';
?>