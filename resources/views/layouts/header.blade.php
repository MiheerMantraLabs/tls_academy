<!doctype html>
<html lang="en">
<head>
  @stack('title')
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
  <!-- Google Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- Font Awsome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
  <!-- CSS Style -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/css-mediaa.css')}}">
</head>
<body>
    <section id="top-header">
         <div class="container">
            <div class="row">
                 <div class="col-xl-2 col-lg-2 col-md-12 col-12">
                 </div>
                <div class="col-xl-7 col-lg-7 col-md-8 col-12">
                    <div class="top-contact">
                        <ul>
                            <li><a href="tel:+918798040309"><i class="fa fa-phone-square" aria-hidden="true"></i> +91-8798040309</a></li>
                            <li><a href="mailto:contact@thelitespeed.com"><i class="fa fa-envelope" aria-hidden="true"></i> contact@thelitespeed.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                    <div class="social-contact">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
         </div>
    </section>

    <!-- Main Header -->
     <!-- header start -->
	  <header class="header">
        <div class="header-container">
           <div class="header-main">
              <div class="logo">
                 <a href="index.php"><img src="{{asset('images/logo.png')}}" /></a>
              </div>
              <div class="open-nav-menu">
                 <span></span>
              </div>
              <div class="menu-overlay">
              </div>
              <!-- navigation menu start -->
              <nav class="nav-menu">
                <div class="close-nav-menu">
                   <img src="{{asset('images/close.svg')}}" alt="close">
                </div>
                <ul class="menu">
                   <li class="menu-item">
                      <a href="./">Home</a>
                   </li>
                   <li class="menu-item">
                      <a href="#">About Us</a>
                   </li>
                   <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">Courses <i class="plus"></i></a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="#">Digital Marketing</a></li>
                     <li class="menu-item"><a href="#">Website Development</a></li>
                     <li class="menu-item"><a href="#">App Development</a></li>
                   </ul>
                   </li>
                   {{-- <li class="menu-item">
                      <a href="usability.php">Usability</a>
                   </li>
                   <li class="menu-item">
                      <a href="#">Certification</a>
                   </li> --}}
                   <li class="menu-item">
                      <a href="#">Why Us</a>
                   </li>
                   <li class="menu-item">
                      <a href="#">Contact</a>
                   </li>
                </ul>
              </nav>
              <!-- navigation menu end -->
           </div>
        </div>
     </header>
   <!-- header end -->
