<?php
define("_SITE_URL", "http://localhost/cm-php/");
define("_ASSETS", _SITE_URL . "assets/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo _ASSETS; ?>css/fa-pro/css/all.css">
    <link rel="stylesheet" href="<?php echo _ASSETS; ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo _ASSETS; ?>css/cd-css/cd-css.css">

    <title>BP-Project</title>
</head>
<body>
<header>
    <div class="wrapper">
        <div class="header-box">
            <div class="logo">
                <img src="https://via.placeholder.com/500x130" alt="">
            </div>
            <nav>
                <a href="#"><span>Home</span></a>
                <a href="#"><span>About</span></a>
                <div class="dd-wrapper">
                    <a class="dropdown" href="#"><span>Services</span><i class="fal fa-angle-down"></i></a>
                    <div class="dropdown-box">
                        <a href="#"><span>Link Text Here</span></a>
                        <a href="#"><span>Link Text Here</span></a>
                        <a href="#"><span>Link Text Here</span></a>
                        <a href="#"><span>Link Text Here</span></a>
                    </div>
                </div>
                <a href="#"><span>Portfolio</span></a>
                <a href="#"><span>Contact Us</span></a>
                <button class="call-to-action" href="#">Get in touch</button>
            </nav>
            <button id="btnMenu">X</button>
        </div>
    </div>
    <style>
        .dd-wrapper {
            display: inline;
            height: 19px;
            padding: 25px 0;
            position: relative;
        }

        .dropdown-box {
            position: absolute;
            top: 67px;
            background: white;
            box-shadow: 0px 3px 4px -3px #333;
            display: none;
            left: 0
        }

        .dropdown-box a {
            display: block;
            font-size: 14px;
            white-space: nowrap;
        }

        .dd-wrapper a.dropdown i.fal.fa-angle-down {
            padding-left: 5px;
        }

        .dd-wrapper:hover .dropdown-box {
            display: block;
        }

      

        #btnMenu {
            display: none;
        }

        @media (max-width: 1024px) {
            #btnMenu {
                display: block;
            }

            .header-box nav {
                background: #e4e4e4;
                width: 100%;
                height: 100vh;
                position: absolute;
                left: 0;
                top: 0;
                max-width: 0px;
                padding-left: 0px;
                overflow: hidden;
                transition: .3s ease-in-out;
                opacity: 0;
                padding-top: 80px;
                box-shadow: 1024px 0 0px 160px #e4e4e4;
                z-index: 2;
            }

            nav a {
                display: block;
            }
        }
    </style>
</header>


