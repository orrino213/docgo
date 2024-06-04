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
    .header.index-header .primary-navigation .nav-item .nav-link.nav-option{
        color: #000;
        text-align: right;
/*        font-family: "Nimbus Sans L";*/
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        letter-spacing: 0.075px;
        background-color: #FFF;
    }

    .arrow ::after {
        content: "";
        background: ;
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
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-option" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    About
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-option" href="#" id="navbarDropdown2" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Healthcare Reimagined
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-option" href="blog.html" id="navbarDropdown3" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Care For All
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-option" href="shop.html" id="navbarDropdown4" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Mobile Healthcare
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->