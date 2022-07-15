<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ladresse
 * 
 * Template Name: FW 20
 */

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/images/la_fav.png" />
    <title>L’adresse Paris Agency</title>
</head>

<body>
    <div class="page-wrapper">
        <div class="content">
            <div class="video">
                <video playsinline autoplay muted loop id="myVideo">
                    <source src="<?= get_template_directory_uri(); ?>/assets/video/fw20.mp4" type="video/mp4">
                </video>
            </div>
            <section class="ss20 fw20 ">
                <div class="ss20-content fw20-content scrollable">
                    <div class="ss20-head">
                        <div class="button">
                            <a href="/ladresse/?services=showroom">
                                <div class="image">
                                    <div class="icon">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                                    <h5>Showroom</h5>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <div class="left-text">
                                <h5>PARIS</h5>
                            </div>
                            <div class="mid-text">
                                <h2>WOMEN, ACCESSORIES & Lifestyle Fw20</h2>

                                <h3>L’Adresse x Tranoi showroom at Palais de la Bourse</h3>
                            </div>
                        </div>
                    </div>
                    <div class="event-pictures">
                        <div class="pictures-head">
                            <h5>EVENT PICTURES</h5>
                        </div>
                        <div class="pictures-content">
                            <div class="pictures-text">
                                <h2>Paris</h2>
                                <h2>FW 20</h2>
                            </div>
                            <div class="images">
                                <div class="left">
                                    <div class="left-top">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 350.png" alt="">
                                    </div>
                                    <div class="left-bottom">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 390.png" alt="">
                                    </div>
                                </div>
                                <div class="mid">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 360.png" alt="">
                                </div>
                                <div class="right">
                                    <div class="right-top">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 380.jpg" alt="">
                                    </div>
                                    <div class="right-bottom">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 370.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs-head st-head">
                        <h5>PRODUCT PICTURES</h5>
                        <div class="ahs-text st-text">
                            <div class="tab-menu">
                                <ul>
                                    <li><a href="#" class="tab-a active-a ahs-a" data-id="tab1">Sundus Talpur</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab2">WARP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ahs st tab tab-active" data-id="tab1">
                        <div class="ahs-content st-content">
                            <div class="ahs-heading st-heading">
                                <h3>FW20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 1116.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Group 058.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 1118.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs wp tab" data-id="tab2">
                        <div class="ahs-content wp-content">
                            <div class="ahs-heading wp-heading">
                                <h3>FW20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Group 1158.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Group 519.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Group 610.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
         </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/assets/js/custom.js"></script>
</body>

</html>