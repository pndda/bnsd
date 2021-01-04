<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo();?> </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>

<header>

        <div class="mobile-navbar ">
            <nav class=" d-flex justify-content-between align-items-center trigger-main-nav">
                <div class="logo">
                    BNSD - logo
                </div>



                <ul class="mobile-navbar__list d-flex align-items-center ">
                    <!-- <li class="mobile-navbar__list__item">
                        <a href="#" class=" ">
                            <img src="{{directory}}/assets/img/icons/login.svg" width="16" alt="">
                            login
                        </a>
                    </li>
                    <li class="mobile-navbar__list__item ">
                        <a href="#" class=" ">
                            <img src="{{directory}}/assets/img/icons/search_mobile.svg" width="16" alt="">
                            search
                        </a>
                    </li> -->
                    <li class="mobile-navbar__list__item">
                        <div class="mobile-navbar__list__item__link hamburger" id="hamburger-1">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>

        <div class="menu">
            <nav class="mobile-nav">
                <ul>
                    <li>
                        <a href="">About us</a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <!--HIDDEN SEARCH SECTION-->
    <div class="hidden-nvigation"></div>
    <!--END SEARCH SECTION-->