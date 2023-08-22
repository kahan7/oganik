<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/organik-icon/organik-icons.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/organik.css" />
    <?php session_start(); ?>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo-dark.png" width="105" alt="">
                        </a>
                        <div class="mobile-nav__buttons">
                            <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                            <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                        </div><!-- /.mobile__buttons -->

                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.main-logo -->

                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <div class="topbar__info">
                            <i class="organik-icon-email"></i>
                            <p>Email <a href="mailto:mr.jizza6@gmail.com">mr.jizza6@gmail.com</a></p>
                        </div><!-- /.topbar__info -->
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <div class="topbar__info">
                            <i class="organik-icon-calling"></i>
                            <p>Phone <a href="tel:+84-942-195-177">84 942 195 177</a></p>
                        </div><!-- /.topbar__info -->
                        <div class="topbar__buttons">
                            <?php
                            $sll = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $item) {
                                    extract($item);
                                    $sll += $sl;
                                }
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['user1']) || isset($_SESSION['user'])) {
                            ?>
                                <a href="cart.php" class="">
                                    <span style="position: absolute;align-items: center; background: #ce2c6c;border: 2px solid #fff;border-radius: 99em;color: #fff;
                                            display: flex;font-size: 0.77em;font-weight: 400;height: 1.44em;justify-content: center;line-height: 1;
                                            min-width: 1.44em;right: 45px;top: 17px;"><?= $sll ?></span>
                                    <span class="organik-icon-shopping-cart"></span>
                                </a>
                                <a href="history.php">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </span>
                                </a>
                            <?php } else { ?>
                                <a href="./account/login.php" class="">
                                    <span></span>
                                    <span class="organik-icon-shopping-cart"></span>
                                </a>
                            <?php } ?>
                        </div><!-- /.topbar__buttons -->
                    </div><!-- /.topbar__left -->

                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="main-menu__login">
                        <?php
                        if (isset($_SESSION['user1'])) {
                        ?>
                            <a href="./account/account_detail.php"><i class="organik-icon-user"></i><?= $_SESSION['user1']['fullname']; ?></a>
                        <?php } elseif (isset($_SESSION['user'])) { ?>
                            <a href="./store/admin_store.php"><i class="organik-icon-user"></i><?= $_SESSION['user']['fullname']; ?></a>
                        <?php } else { ?>
                            <a href="./account/login.php"><i class="organik-icon-user"></i>Login / Register</a>
                        <?php } ?>
                    </div>
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li class="dropdown">
                            <a href="products.php">Shop</a>
                        </li>
                        <li class="dropdown"><a href="news.php">News</a>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": true,
    "effect": "fade",
    "autoplay": {
        "delay": 5000
    },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    }
    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span>Oragnic</span> <br>
                                        Food Market</h2>
                                    <a href="products.php" class=" thm-btn">Order Now</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span>Oragnic</span> <br>
                                        Food Market</h2>
                                    <a href="products.php" class=" thm-btn">Order Now</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="organik-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="organik-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="feature-box">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="thm-tiny__slider" id="contact-infos-box" data-tiny-options='{
            "container": "#contact-infos-box",
            "items": 1,
            "slideBy": "page",
            "gutter": 0,
            "mouseDrag": true,
            "autoplay": true,
            "nav": false,
            "controlsPosition": "bottom",
            "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
            "autoplayButtonOutput": false,
            "responsive": {
                "640": {
                  "items": 2,
                  "gutter": 30
                },
                "992": {
                  "gutter": 30,
                  "items": 3
                },
                "1200": {
                  "disable": true
                }
              }
        }'>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-global-shipping feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Return Policy</h3>
                                    <p>Money back guarantee</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-delivery-truck feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Free Shipping</h3>
                                    <p>On all orders</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-online-store feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Store Locator</h3>
                                    <p>Find your nearest store</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                    </div>
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.feature-box -->

        <section class="new-products">
            <img src="assets/images/shapes/new-product-shape-1.png" alt="" class="new-products__shape-1">
            <div class="container">
                <div class="new-products__top">
                    <div class="block-title ">
                        <div class="block-title__decor"></div><!-- /.block-title__decor -->
                        <p>Recently Added</p>
                        <h3>Products</h3>
                    </div><!-- /.block-title -->

                    <ul class="post-filter filters list-unstyled">
                        <li class="active filter" data-filter=".filter-item">All</li>
                        <?php
                        require_once('./class/category.php');
                        extract($_REQUEST);
                        $items = category_select_all();
                        ?>
                        <?php foreach ($items as $item) {
                            extract($item);
                        ?>

                            <li class="filter" data-filter=".dairy">
                                <?= $categoryname ?>
                                <a href="category-cate.php?categoryid=<?= $categoryid ?>"></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div><!-- /.new-products__top -->
                <div class="row filter-layout">
                    <div class="col-lg-4 col-md-6 filter-item dairy">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <!-- <span class="product-card__two-sale">sale</span> -->
                                <img src="assets/images/products/product-2-1.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="product-details.php"><i class="organik-icon-visibility"></i></a>
                                    <a href="cart.php"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.php">Banana</a></h3>
                                <div class="product-card__two-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__two-stars -->
                                <p>$1.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item pantry">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="assets/images/products/product-2-2.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="product-details.php"><i class="organik-icon-visibility"></i></a>
                                    <a href="cart.php"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.php">Olive Oil</a></h3>
                                <div class="product-card__two-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__two-stars -->
                                <p>$9.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item meat">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="assets/images/products/product-2-3.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="product-details.php"><i class="organik-icon-visibility"></i></a>
                                    <a href="cart.php"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.php">Eggs</a></h3>
                                <div class="product-card__two-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__two-stars -->
                                <p>$3.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item dairy">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="assets/images/products/product-2-4.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="product-details.php"><i class="organik-icon-visibility"></i></a>
                                    <a href="cart.php"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.php">Tamatos</a></h3>
                                <div class="product-card__two-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__two-stars -->
                                <p>$1.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item fruits">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="assets/images/products/product-2-5.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="product-details.php"><i class="organik-icon-visibility"></i></a>
                                    <a href="cart.php"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.php">Bread</a></h3>
                                <div class="product-card__two-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__two-stars -->
                                <p>$2.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item veg">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <!-- <span class="product-card__two-sale">sale</span> -->
                                <img src="assets/images/products/product-2-6.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="product-details.php"><i class="organik-icon-visibility"></i></a>
                                    <a href="cart.php"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.php">Apples</a></h3>
                                <div class="product-card__two-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.product-card__two-stars -->
                                <p>$2.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.new-products -->

        <section class="offer-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-1.jpg);">
                            <div class="offer-banner__content">
                                <h3><span>100%</span> <br>Organic</h3>
                                <p>Quality Organic Food Store</p>
                                <a href="products.php" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                            </div><!-- /.offer-banner__content -->
                        </div><!-- /.offer-banner__box -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="offer-banner__box" style="background-image: url(assets/images/resources/offer-banner-1-2.jpg);">
                            <div class="offer-banner__content">
                                <h3><span>100%</span> <br>Organic</h3>
                                <p>Quality Organic Food Store</p>
                                <a href="products.php" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                            </div><!-- /.offer-banner__content -->
                        </div><!-- /.offer-banner__box -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.offer-banner -->

        <section class="funfact-one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
            <img src="assets/images/backgrounds/funfact-bg-1-1.jpg" class="jarallax-img" alt="">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="funfact-one__single">
                            <h3 class="odometer" data-count="8080">00</h3>
                            <p>Organic Products Available</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="funfact-one__single">
                            <h3 class="odometer" data-count="697">00</h3>
                            <p>Healthy Recipes</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="funfact-one__single">
                            <h3 class="odometer" data-count="440">00</h3>
                            <p>Expert Team Mebers</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3  wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="funfact-one__single">
                            <h3 class="odometer" data-count="2870">00</h3>
                            <p>Satisfied Customers</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->

        <section class="call-to-action">
            <img src="assets/images/shapes/call-shape-1.png" alt="" class="call-to-action__shape-1">
            <img src="assets/images/shapes/call-shape-2.png" alt="" class="call-to-action__shape-2 wow fadeInLeft" data-wow-duration="1500ms">
            <h2 class="floated-text">Oragnic</h2><!-- /.floated-text -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6 clearfix">
                        <img src="assets/images/backgrounds/poster.jpg" class="call-to-action__image" alt="" style="height: 720px;">
                    </div><!-- /.col-md-12 col-lg-12 col-xl-12 -->
                    <div class="col-md-12 col-lg-12 col-xl-6 clearfix">
                        <div class="call-to-action__content">
                            <div class="block-title text-left">
                                <div class="block-title__decor" style="background-image: url(assets/images/shapes/leaf-2-1.png);"></div>
                                <!-- /.block-title__decor -->
                                <p>Shopping Store</p>
                                <h3>Organic Food Only</h3>
                            </div><!-- /.block-title -->
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered
                                alteration in some form by injected humor or random word.</p>
                            <div class="call-to-action__wrap">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="call-to-action__box">
                                            <i class="organik-icon-farmer"></i>
                                            <h3>Professional
                                                Farmers</h3>
                                        </div><!-- /.call-to-action__box -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="call-to-action__box">
                                            <i class="organik-icon-farm"></i>
                                            <h3>Solution
                                                for Farming</h3>
                                        </div><!-- /.call-to-action__box -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.call-to-action__wrap -->
                            <a href="products.php" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action__content -->
                    </div><!-- /.col-md-12 col-lg-12 col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->

        <section class="call-to-action-two">
            <img src="assets/images/shapes/call-shape-2-1.png" alt="" class="call-to-action-two__shape-1">
            <img src="assets/images/shapes/call-shape-2-2.png" alt="" class="call-to-action-two__shape-2">
            <img src="assets/images/shapes/call-shape-2-3.png" alt="" class="call-to-action-two__shape-3">
            <img src="assets/images/shapes/call-shape-2-4.png" alt="" class="call-to-action-two__shape-4">
            <img src="assets/images/shapes/call-shape-2-5.png" alt="" class="call-to-action-two__shape-5">
            <img src="assets/images/shapes/call-shape-2-6.png" alt="" class="call-to-action-two__shape-6">
            <div class="container">
                <div class="row flex-xl-row-reverse">
                    <div class="col-lg-12 col-xl-6">
                        <div class="call-to-action-two__image">
                            <h2 class="floated-text">Healthy</h2><!-- /.floated-text -->
                            <img src="assets/images/resources/call-2-1.png" alt="">
                        </div><!-- /.call-to-action-two__image -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="call-to-action-two__content">
                            <div class="block-title text-left">
                                <div class="block-title__decor"></div><!-- /.block-title__decor -->
                                <p>Pure Organic Products</p>
                                <h3>Everyday Fresh Food</h3>
                            </div><!-- /.block-title -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Duis aute irure dolor in reprehen in derit.</h4>
                                    <p>Voluptate velit essects quis tempor orci. Suspendisse that potenti faucibus.</p>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Refresing to get such a touch
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Duis aute irure dolor in
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Reprehenderit in voluptate
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Velit esse cillum dolore eu
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Fugiat nulla pariatur
                                        </li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <a href="products.php" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action-two__content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action-two -->
        <br>

        <footer class="site-footer background-black-2">
            <img src="assets/images/shapes/footer-bg-1-1.png" alt="" class="site-footer__shape-1">
            <img src="assets/images/shapes/footer-bg-1-2.png" alt="" class="site-footer__shape-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget footer-widget__about-widget">
                            <a href="index.php" class="footer-widget__logo">
                                <img src="assets/images/logo-light.png" alt="" width="105" height="43">
                            </a>
                            <p class="thm-text-dark">Guaranteed commitment to fresh and quality fruit</p>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__contact-widget">
                            <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__contact">
                                <li>
                                    <i class="fa fa-phone-square"></i>
                                    <a href="tel:84 942 195 177">84 942 195 177</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:mr.jizza6@gmail.com">mr.jizza6@gmail.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    <a href="#">273 An Duong Vuong.
                                        TPHCM</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li>
                                    <a href="index.php">Top Sellers</a>
                                </li>
                                <li>
                                    <a href="products.php">Shopping</a>
                                </li>
                                <li>
                                    <a href="about.php">About Store</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                                <li>
                                    <a href="contact.php">Help</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li>
                                    <a href="products.php">New Products</a>
                                </li>
                                <li>
                                    <a href="checkout.php">My Account</a>
                                </li>
                                <li>
                                    <a href="contact.php">Support</a>
                                </li>
                                <li>
                                    <a href="contact.php">FAQs</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">Newsletter</h3><!-- /.footer-widget__title -->
                            <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                                <input type="email" name="EMAIL" id="mc-email" placeholder="Email Address">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="bottom-footer">
                <div class="container">
                    <hr>
                    <div class="inner-container text-center">
                        <div class="bottom-footer__social">
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.bottom-footer__social -->
                        <p class="thm-text-dark">© Copyright <span class="dynamic-year"></span> by Company.com</p>
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="organik-icon-email"></i>
                    <a href="mailto:needhelp@organik.com">needhelp@organik.com</a>
                </li>
                <li>
                    <i class="organik-icon-calling"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="main-menu__login">
                    <a href="./account/login.php"><i class="organik-icon-user"></i>Login / Register</a>
                </div><!-- /.main-menu__login -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="mini-cart">
        <div class="mini-cart__overlay mini-cart__toggler"></div>
        <div class="mini-cart__content">
            <div class="mini-cart__top">
                <h3 class="mini-cart__title">Shopping Cart</h3>
                <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
            </div><!-- /.mini-cart__top -->
            <div class="mini-cart__item">
                <img src="assets/images/products/cart-1-1.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.php">Banana</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="assets/images/products/cart-1-2.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.php">Tomato</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="assets/images/products/cart-1-3.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.php">Bread</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <a href="checkout.php" class="thm-btn mini-cart__checkout">Proceed To Checkout</a>
        </div><!-- /.mini-cart__content -->
    </div><!-- /.cart-toggler -->


    <a href="#" data-target="php" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <!-- template js -->
    <script src="assets/js/organik.js"></script>
</body>

</html>