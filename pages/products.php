<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../assets/libs/bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d9876ed7d9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&family=Playfair+Display&display=swap" rel="stylesheet">     
    <link rel="stylesheet" href="../index.php">   
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/shop.css">
    <link rel="stylesheet" href="../assets/css/product-list.css">
    <title>Shop</title>
</head>
<body>
    <header class="header">
        <nav class="header-navigation"> 
            <div class="nav-wrapper">
                <div class="nav-wrapper-top d-flex justify-content-between align-items-center">
                    <div class="nav-top-left d-flex">
                        <li>
                            <a href="#" class="main-dropdown mx-3">USD <span><i class="fa-solid fa-angle-down"></i></span></a>
                            <ul class="dropdown-left">
                                <li><a href="#" class="text-light">EUR</a></li>
                                <li><a href="#" class="text-light">VND</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="main-dropdown mx-3">ENG<span><i class="fa-solid fa-angle-down"></i></span></a>
                            <ul class="dropdown-right">
                                <li><a href="#" class="text-light">VIE</a></li>
                                <li><a href="#" class="text-light">JPN</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="main-dropdown mx-3">SIGN IN<span><i class="fa-solid fa-angle-down"></i></span></a>
                        </li>
                    </div>
    
                    <div class="nav-logo d-flex">
                        <a href="#">
                            <img src="../assets/images/logo.webp" alt="">
                        </a>
                    </div>
    
                    <div class="nav-top-right d-flex">
                        <a href="#" class="text-dark mx-3"><i class="fa-solid fa-magnifying-glass"></i></i></a>
                        <a href="#" class="text-dark mx-3"><i class="fa-regular fa-heart"></i></a>
                        <a href="#" class="text-dark mx-3"><i class="fa-solid fa-cart-shopping"></i></i></a>
                    </div>
                </div>
    
                <div class="nav-wrapper-bottom d-flex justify-content-center align-items-center">
                    <li><a href="http://localhost/index.php?page=home" class="nav-bottom-link text-light fw-bolder">Home</a></li>
                    <li><a href="#" class="nav-bottom-link text-light fw-bolder">About</a></li>
                    <li><a href="http://localhost/index.php?page=blog" class="nav-bottom-link text-light fw-bolder">Shop</a></li>
                    <li><a href="#" class="nav-bottom-link pages text-light fw-bolder">Pages</a></li>
                        <ul class="sub-nav-bottom-link">
                            <li><a href="">Shopping Details</a></li>
                            <li><a href="">Shopping Cart</a></li>
                            <li><a href="">Check out</a></li>
                            <li><a href="">Wish-list</a></li>
                            <li><a href="">Class</a></li>
                            <li><a href="">Blog details</a></li>
                        </ul>
                    <li><a href="http://localhost/index.php?page=products" class="nav-bottom-link text-light fw-bolder">Blog</a></li>
                    <li><a href="#" class="nav-bottom-link text-light fw-bolder">Contact</a></li>
                </div>

                <div class="navbar-toggle-mobile">
                    <i class="fa-solid fa-bars bar"></i>
                    <i class="fa-solid fa-xmark close"></i>
                </div>
            </div>
            <div class="navbar-mobile">
                <img src="../assets/images/logo.webp" alt="" class="menu-mobile-logo">
                <ul class="navbar-mobile-list">
                    <li class="navbar-mobile-list-item"><a href="#">Home</a></li>
                    <li class="navbar-mobile-list-item"><a href="#">About</a></li>
                    <li class="navbar-mobile-list-item"><a href="#">Shop</a></li>
                    <li class="navbar-mobile-list-item"><a href="#">Pages</a></li>
                    <li class="navbar-mobile-list-item"><a href="#">Blog</a></li>
                    <li class="navbar-mobile-list-item"><a href="#">Contact</a></li>
                </ul>
                <img class="menu-mobile-img" src="../assets/images/menu-mobile.jpg" alt="">
            </div>
        </nav>

        <!-- banner -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <!-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner carousel-wrapper">
              <div class="carousel-item custom-carousel-item active">
                <img src="../assets/images/hero-1.jpg.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption custom-carousel-caption d-none d-md-block">
                    <h2>Making your life sweeter one bite at a time</h2>
                    <a href="#" class="our-cake-btn">OUR CAKES</a>
                </div>
              </div>
              <div class="carousel-item custom-carousel-item">
                <img src="../assets/images/hero-1.jpg.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption custom-carousel-caption d-none d-md-block">
                    <h2>Making your life sweeter one bite at a time</h2>
                    <a href="#" class="our-cake-btn">OUR CAKES</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <div class="custom-icon">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <div class="custom-icon">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </div>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <main>
        <section class="shop-intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop-intro-text">
                            <h2>Shop</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop-intro-link">
                            <a href="../index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="shop-detail">
            <div class="container">
                <div class="shop-detail-options">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="shop-detail-options-left">
                                <form action="#">
                                    <div class="dropdown dropdown-links">
                                        <a class="btn btn-secondary dropdown-toggle custom-dropdown-links" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Categories
                                        </a>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                      </div>
                                    <div class="search-bar">
                                        <input type="text" placeholder="Search">
                                        <button type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="shop-detail-options-right d-flex align-items-center justify-content-end">
                                <div class="dropdown default-sorting">
                                    <a class="btn btn-secondary dropdown-toggle custom-default-sorting" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Default sorting
                                    </a>
                                  
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            
                                <a href="#" class="list">
                                    <i class="fa-solid fa-list"></i>
                                </a>
                                <a href="#" class="bars">
                                    <i class="fa-solid fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row product">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-1.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-detail-more">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="shop-pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="shop-last-text d-flex justify-content-end">
                                <p>Showing 1-9 of 10 results</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-working-hour">
                        <h6>WORKING HOUR</h6>
                        <ul>
                            <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li>Saturday: 10:00 am – 16:30 pm</li>
                            <li>Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-contacts">
                        <div class="footer-logo">
                            <img src="../assets/images/xfooter-logo.png.pagespeed.ic.FoBrjKx9yH.webp" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni minus non sequi architecto dolores incidunt!</p>
                        <div class="footer-icons">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-subcribe">
                        <h6>SUBCRIBE</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="mail" placeholder="E-mail">
                            <button type="submit">
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-12">
                        <p>Copyright ©2022 All rights reserved | This template is made with</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="copyright-links">
                            <ul>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Site Map</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="../assets/libs/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/menu-mobile.js"></script>
</body>
</html>