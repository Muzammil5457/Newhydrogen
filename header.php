<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if ($GLOBALS['title']) {
        $title = $GLOBALS['title'];
    } else {
        $GLOBALS['title'] = "";
    }
    if ($GLOBALS['desc']) {
        $desc = $GLOBALS['desc'];
    } else {
        $desc = "";
    }
    if ($GLOBALS['keywords']) {
        $keywords = $GLOBALS['keywords'];
    } else {
        $keywords = "";
    } ?>
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./assets/css/slick.min.css">
    <link rel="stylesheet" href="./assets/css/slick-theme.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- Include Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="./assets/css/style.min.css">

    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LeWVeAnAAAAAIOw4s89h2pgbDVHZ0M7IzALAcXE"></script>
    <script>
        grecaptcha.ready(function(){
            console.log('no error');
            grecaptcha.execute("6LeWVeAnAAAAAIOw4s89h2pgbDVHZ0M7IzALAcXE" , {action: "submit"}).then(function(token){
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            })
        })
    </script>
</head>

<body class="<?php
                $page_name = basename($_SERVER['PHP_SELF']);
                if ($page_name == "index.php" || $page_name == "" || $page_name == "/" || $page_name == "investors.php") {
                ?>homeC<?php } ?><?php if ($page_name == "applications.php" || $page_name == "investors.php") { ?> nav_darkk<?php } ?>">

    <?php
    function active($currect_page)
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if ($currect_page == $url) {
            echo 'active'; //class name in css 
        }
    }
    ?>

    <div class="invest-bar">
        <div class="container">
            <div class="tSocial">
                <a href="https://www.facebook.com/NewHydrogen/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/newhydrogen/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@NewHydrogenEnergy" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- Hedaer -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <?php
                $page_name = basename($_SERVER['PHP_SELF']);
                if ($page_name == "" || $page_name == "/" || $page_name == "investors.php" || $page_name == "applications.php") {
                ?>
                    <img src="./assets/img/logo-light.png" class="the-header-logo" alt="logo">
                <?php } else { ?>
                    <img src="./assets/img/logo-dark.png" class=" the-header-logo" alt="logo">
                    <img src="./assets/img/logo-light.png" class="d-lg-none d-none the-header-logo" alt="logo">
                <?php } ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round" />
                    <path d="M1 8.5H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round" />
                    <path d="M7.70602 16.5H23.9921" stroke="#091113" stroke-width="2" stroke-linecap="round" />
                </svg>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item d-lg-none">
                        <a class="nav-link <?php active('index.php'); ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('market.php'); ?>" href="market.php">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('breakthrough-tech.php'); ?>" href="breakthrough-tech.php">Breakthrough Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('electrolyzer-tech.php'); ?>" href="electrolyzer-tech.php">Electrolyzer Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('applications.php'); ?>" href="applications.php">Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('news.php'); ?>" href="news.php">Newsroom</a>
                    </li>



                    <li class="nav-item d-lg-none">
                        <a class="nav-link <?php active('videos.php'); ?>" href="videos.php">Videos</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link <?php active('investors.php'); ?>" href="investors.php">Investors</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link <?php active('about-us.php'); ?>" href="about-us.php">About</a>
                    </li>

                    <li class="nav-item d-lg-none">
                        <a class="nav-link <?php active('contact-us.php'); ?>" href="contact-us.php">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav d-none d-lg-flex rightNav">
                    <li class="nav-item">
                        <a class="nav-link <?php active('videos.php'); ?>" href="videos.php">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('investors.php'); ?>" href="investors.php">Investors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('about-us.php'); ?>" href="about-us.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php active('contact-us.php'); ?>" href="contact-us.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>