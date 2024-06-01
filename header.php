<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consulpro HTML5 Consultation Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<style>
    .nav-option{
        color: #000;
        text-align: right;
        font-family: "DM Sans";
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        letter-spacing: 0.075px;
    }

    


</style>

<body>

    <!-- Index Header Start -->
    <header class="header index-header">
        <div class="primary-navigation sticky-header top-navbar">
            <div class="container top-navbar">
                <nav class="navbar navbar-expand-md navbar-light">
                    <!-- Logo Here -->
                    <a class="navbar-brand pl-5" href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/header-logo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-option">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    About
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index.html">Home 1</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home 2</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home 3</a></li>
                                    <li><a class="dropdown-item" href="index-4.html">Home 4 </a></li>
                                    <li><a class="dropdown-item" href="index-5.html">Home 5 (New) </a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown2" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Healthcare Reimagined
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="about.html">About</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="services.html">Services</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="service-details.html">Service Details</a>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-item"
                                                    href="#">Level3</a>
                                                <ul class="dropdown-menu dropdown-right"
                                                    aria-labelledby="navbarDropdown">
                                                    <li><a class="dropdown-item" href="#">Lavel 1</a></li>
                                                    <li><a class="dropdown-item" href="#">Lavel 2</a></li>
                                                    <li><a class="dropdown-item" href="#">Lavel 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="#">Portfolio</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="portfolio-1.html">Portfolio Grid</a></li>
                                            <li><a class="dropdown-item" href="portfolio-2.html">Portfolio Masonry</a>
                                            </li>
                                            <li><a class="dropdown-item" href="portfolio-details.html">Portfolio
                                                    Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="team.html">Team</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="team-details.html">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="faq.html">FAQ</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="register.html">Register</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="login.html">Login</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="404.html">404 page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="blog.html" id="navbarDropdown3" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Care For All
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="single-post.html">Single Post</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="shop.html" id="navbarDropdown4" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Mobile Healthcare
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="shop.html">Shop </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="single-product.html">Product Details</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="cart.html">Cart</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item" href="order-complete.html">Order Complete</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->