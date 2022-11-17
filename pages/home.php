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
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/product-list.css">
    <link rel="stylesheet" href="../assets/css/class.css">
    <link rel="stylesheet" href="../assets/css/team.css">
    <link rel="stylesheet" href="../assets/css/follow.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/testimotional.css">
    
    <title>My Cake</title>
</head>
<body>
    <!-- header -->
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
                    <li><a href="http://localhost/Project/index.php?page=home" class="nav-bottom-link text-light fw-bolder">Home</a></li>
                    <li><a href="#" class="nav-bottom-link text-light fw-bolder">About</a></li>
                    <li><a href="http://localhost/Project/index.php?page=products" class="nav-bottom-link text-light fw-bolder">Products</a>
                        <ul class="sub-nav-bottom-link">
                            <li><a href="">Details</a></li>
                            <li><a href="">Cart</a></li>
                            <li><a href="">Check out</a></li>
                            <li><a href="">Wish-list</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-bottom-link pages text-light fw-bolder">Pages</a></li>
                    <li><a href="http://localhost/Project/index.php?page=blog" class="nav-bottom-link text-light fw-bolder">Blog</a></li>
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
                <img class="menu-mobile-img" src="assets/images/menu-mobile.jpg" alt="">
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
        <!-- About Section -->
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="about-content">
                            <div class="about-title">
                                <span>ABOUT CAKE SHOP</span>
                                <h2>Cakes and bakes from the house of Queens!</h2>
                            </div>
                            <div class="about-text">
                                <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. 
                                The owners are Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="about-bar">
                            <div class="about-bar-item">
                                <p class="fw-bolder text-dark">CAKE DESIGN <span style="margin-left: 29rem" class="text-dark fw-bolder">95%</span></p>
                                <div class="bar-container">
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-label="Basic example" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-bar-item">
                                <p class="fw-bolder text-dark">CAKE CLASS <span style="margin-left: 24rem" class="text-dark fw-bolder">80%</span></p>                       
                                <div class="bar-container">
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-label="Basic example" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-bar-item">
                                <p class="fw-bolder text-dark">CAKE RECIPES <span style="margin-left: 27rem" class="text-dark fw-bolder">90%</span></p>
                                <div class="bar-container">
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-label="Basic example" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories -->
        <section class="category">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>

        <!-- Products -->
        <section class="product">
            <div class="container">
                <div class="row">
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
                            <div class="product-image" style="background-image: url('../assets/images/product-2.jpg.webp')">
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
                            <div class="product-image" style="background-image: url('../assets/images/product-3.jpg.webp')">
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
                            <div class="product-image" style="background-image: url('../assets/images/product-4.jpg.webp')">
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
                            <div class="product-image" style="background-image: url('../assets/images/product-5.jpg.webp')">
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
                            <div class="product-image" style="background-image: url('../assets/images/product-6.jpg.webp')">
                                <div class="product-label"><span>CUPCAKE</span></div>
                            </div>
                            <div class="product-detail">
                                <h6><a href="#" id="product-name">DOZEN CUPCAKES</a></h6>
                                <div class="product-price">$32,00</div>
                                <div class="product-cart">
                                    <a href="#" >ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="product-item">
                            <div class="product-image" style="background-image: url('../assets/images/product-7.jpg.webp')">
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
                            <div class="product-image" style="background-image: url('../assets/images/product-8.jpg.webp')">
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
            </div>
        </section>

        <!-- Class -->
        <section class="class">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-form">
                            <div class="class-title">
                                <span>CLASS CAKES</span>
                                <h2>Made from your</h2>
                                <h2>own hand</h2>
                            </div>
                            <form action="" class="class-input">
                                <input class="class-input-name" type="text" placeholder="Name"><br>
                                <input class="class-input-phone" type="text" placeholder="Phone"><br>
                                <select name="studying class" id="class-cake">
                                    <option value="Studying class">Studying class</option>
                                    <option value="Writing class">Writing class</option>
                                    <option value="Reading class">Reading class</option>
                                </select><br>
                                <button type="submit" class="class-register">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="class-video">
                    <a href="#" class="class-video-btn">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Our team -->
        <section class="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-7">
                        <div class="team-title">
                            <span>OUR TEAM</span>
                            <h2>Sweet Baker</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-5">
                        <div class="team-join">
                            <a href="#">JOIN US</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="team-member" style="background-image: url('../assets/images/team-1.jpg.webp');">
                            <div class="team-member-detail">
                                <h6>RANDY BUTLER</h6>
                                <span>Decorater</span>
                                <div class="team-member-contact">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="team-member" style="background-image: url('../assets/images/team-2.jpg.webp');">
                            <div class="team-member-detail">
                                <h6>RANDY BUTLER</h6>
                                <span>Decorater</span>
                                <div class="team-member-contact">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="team-member" style="background-image: url('../assets/images/team-3.jpg.webp');">
                            <div class="team-member-detail">
                                <h6>RANDY BUTLER</h6>
                                <span>Decorater</span>
                                <div class="team-member-contact">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="team-member" style="background-image: url('../assets/images/team-4.jpg.webp');">
                            <div class="team-member-detail">
                                <h6>RANDY BUTLER</h6>
                                <span>Decorater</span>
                                <div class="team-member-contact">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimotional -->
        <!-- <section class="testimotional">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimotional-title">
                            <span>TESTIMOTIONAL</span>
                            <h2>Our client say</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="testimotinal-slider clients-list  d-flex flex-wrap justify-content-between">
                        <div class="testimotional-item">
                            <div class="col-lg-6">
                                <div class="client-detail">
                                    <div class="client-detail-author">
                                        <div class="client-detail-author-img">
                                            <img src="assets/images/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="">
                                        </div>
                                        <div class="client-author-name">
                                            <h5>OPHELIA NUNEZ</h5>
                                            <span>New York</span>
                                        </div>
                                        <div class="client-detail-rating">  
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimotional-item">
                            <div class="col-lg-6">
                                <div class="client-detail">
                                    <div class="client-detail-author">
                                        <div class="client-detail-author-img">
                                            <img src="assets/images/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="">
                                        </div>
                                        <div class="client-author-name">
                                            <h5>OPHELIA NUNEZ</h5>
                                            <span>New York</span>
                                        </div>
                                        <div class="client-detail-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimotional-item">
                            <div class="col-lg-6">
                                <div class="client-detail">
                                    <div class="client-detail-author">
                                        <div class="client-detail-author-img">
                                            <img src="assets/images/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="">
                                        </div>
                                        <div class="client-author-name">
                                            <h5>OPHELIA NUNEZ</h5>
                                            <span>New York</span>
                                        </div>
                                        <div class="client-detail-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimotional-item">
                            <div class="col-lg-6">
                                <div class="client-detail">
                                    <div class="client-detail-author">
                                        <div class="client-detail-author-img">
                                            <img src="assets/images/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="">
                                        </div>
                                        <div class="client-author-name">
                                            <h5>OPHELIA NUNEZ</h5>
                                            <span>New York</span>
                                        </div>
                                        <div class="client-detail-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimotional-item">
                            <div class="col-lg-6">
                                <div class="client-detail">
                                    <div class="client-detail-author">
                                        <div class="client-detail-author-img">
                                            <img src="assets/images/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="">
                                        </div>
                                        <div class="client-author-name">
                                            <h5>OPHELIA NUNEZ</h5>
                                            <span>New York</span>
                                        </div>
                                        <div class="client-detail-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimotional-item">
                            <div class="col-lg-6">
                                <div class="client-detail">
                                    <div class="client-detail-author">
                                        <div class="client-detail-author-img">
                                            <img src="assets/images/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="">
                                        </div>
                                        <div class="client-author-name">
                                            <h5>OPHELIA NUNEZ</h5>
                                            <span>New York</span>
                                        </div>
                                        <div class="client-detail-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Follow Us -->
        <section class="follow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="follow-contact">
                            <div class="follow-contact-title">
                                <span>follow us on instagram</span>
                                <h2>Sweet moments are saved as memories.</h2>
                            </div>
                            <div class="follow-contact-icon">
                                <h5>
                                    <i class="fa-brands fa-instagram"></i>
                                    @sweetcake
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <duv class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="follow-image">
                                    <img src="../assets/images/xinstagram-1.jpg.pagespeed.ic.-miiHU9z0s.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="follow-image follow-image-middle">
                                    <img src="../assets/images/xinstagram-2.jpg.pagespeed.ic.PrUe97YaNT.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="follow-image">
                                    <img src="../assets/images/xinstagram-3.jpg.pagespeed.ic.41aoMJSE-B (1).jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="follow-image">
                                    <img src="../assets/images/xinstagram-3.jpg.pagespeed.ic.41aoMJSE-B.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="follow-image follow-image-middle">
                                    <img src="../assets/images/xinstagram-4.jpg.pagespeed.ic.DaPGnAyF-x.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="follow-image">
                                    <img src="../assets/images/xinstagram-5.jpg.pagespeed.ic.YBQyF2M-6c.jpg" alt="">
                                </div>
                            </div>
                        </duv>
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

    <script src="../assets/libs/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="../assets/libs/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/menu-mobile.js"></script>
</body>
</html>