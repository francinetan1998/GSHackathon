<?php 

$investment = "";
$achievement = "";
$capital = "";
if(isset($_POST['submit'])) {
    $investment = $_POST['investment'];
    $achievement = $_POST['achievement'];
    $capital = $_POST['capital'];
} 

echo '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Recommended Products</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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

            </div>
        </nav>
        <br>
        <!-- Portfolio Section-->
        
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <br><br>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Recommended Products</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <!-- Portfolio Grid Items -->
                <div class="row">
                    
                    <div class="card" style="width: 17rem;" data-toggle="modal" data-target="#portfolioModal1">
                        <img class="card-img-top" src="assets/img/portfolio/bond - Copy.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Bonds</h5>
                          <p class="card-text">Goldman Sachs’ Bond Fund invests in fixed income securities such as US government securities and corporate debt securities.</p>
                          <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    &nbsp&nbsp&nbsp&nbsp&nbsp
                    <div class="card" style="width: 17rem;" data-toggle="modal" data-target="#portfolioModal2">
                        <img class="card-img-top" src="assets/img/portfolio/certificate.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Certificate of Deposit</h5>
                          <p class="card-text">Goldman Sachs’ High Yield Certificate of Deposits are a secure form of time deposit, where money must stay in the bank for a certain length of time to earn a promised return.</p>
                          <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    &nbsp&nbsp&nbsp&nbsp&nbsp
                    <div class="card" style="width: 17rem;" data-toggle="modal" data-target="#portfolioModal3">
                        <img class="card-img-top" src="assets/img/portfolio/reit - Copy.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">REITS</h5>
                          <p class="card-text">Goldman Sachs’ Real Estate Securities Fund invests in a portfolio of equity investments whose issuers are involved in the real estate industry.</p>
                          <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    &nbsp&nbsp&nbsp&nbsp&nbsp
                    <div class="card" style="width: 17rem;" data-toggle="modal" data-target="#portfolioModal4">
                        <img class="card-img-top" src="assets/img/portfolio/stock-market - Copy.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Stocks</h5>
                          <p class="card-text">Goldman Sachs’ investment team helps develop insights and strategies to maximise profits equal to how much stock they own.</p>
                          <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <form action="6_signup.php" method="POST">
                    <input type="hidden" name="achievement" value="' . $achievement . '">
                    <input type="hidden" name="investment" value="'. $investment .'">
                    <input type="hidden" name="capital" value="'. $capital .'">
                    <input type="submit" name="submit" class="btn btn-primary btn-xl" value="Begin Journey!" >
                </form>
            </div> 
        </section>
        
        

        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Bonds</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="" /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">The Goldman Sachs Bond Fund seeks to help investors achieve high yield while managing their risks. It also has high liquidity due to its low volatility.
                                    <br><br>
                                      Average Annual Total Return (for period ended Dec 31 2019)<br>
                                      1 year = 5.96%<br>
                                        5 years = 1.92%<br>
                                        10 years = 3.67%<br><br>
                                        
                                      Capital: Minimum of $1,000
                                        <br>
                                      Risk: Conservative 
                                        <br>
                                      Strategy: Yield</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Fixed Deposit</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="" /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">A High Yield CD can be a useful tool for long- term financial goals such as renovation, child’s future education

                                    <br>10 Day CD Rate Guarantee (If rate goes up, you will get the new improved rate automatically)<br><br>
                                    
                                    Capital: Minimum of $500<br>
                                    Expected Return: 0.45% - 0.90% APY<br>
                                    Risk: Conservative<br>
                                    Strategy: Yield</p>

                                    
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">REITS</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="" /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">The Goldman Sachs Real Estate Securities Fund provides an attractive yield and high growth potential in the long term due to its strong historical annual returns. It also serves as a hedge against inflation and provides interest rate resiliency.
                                    <br><br>
                                    Average Annual Total Return (for period ended Dec 31 2019)<br>
                                    1 year = 18.62%<br>
                                    5 years = 4.49%<br>
                                    10 years = 10.32%<br><br>
                                    Capital: Minimum of $1,000<br>
                                    Risk: Moderate<br>
                                    Strategy: Yield</p>


                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Stocks</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="" /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Goldman Sachs’ analyst’s recommendation and stock pick lists the most recent publicly-reported stock recommendations and ratings issued by analysts at Goldman Sachs Group.
                                    <br>*The stock list is non exhaustive.<br><br>
                                    
                                    Capital: Prices as listed<br>
                                    Expected Returns: YTD on individual stocks<br>
                                    Risk: Aggressive<br>
                                    Strategy: Capital Gain</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
