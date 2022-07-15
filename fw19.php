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
 * Template Name: FW 19
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/images/la_fav.png" />
    <title>L’adresse Paris Agency</title>
</head>

<body>
    <div class="page-wrapper">
        <div class="content">
            <div class="video">
                <video playsinline autoplay muted loop id="myVideo">
                    <source src="<?= get_template_directory_uri(); ?>/assets/video/fw19.MP4" type="video/mp4">
                </video>
            </div>
            <section class="ss20 fw19">
                <div class="ss20-content fw19-content scrollable">
                    <div class="ss20-head fw19-head">
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
                                <h2>WOMEN, ACCESSORIES & Lifestyle FW19 </h2>
                                <h3>L’Adresse X Tranoi showroom at Carrousel du Louvre, was supported by Trade Development Authority of Pakistan to represent emerging designers from Pakistan.</h3>
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
                                <h2>fw 19</h2>
                            </div>
                            <div class="images">
                                <div class="left">
                                    <div class="left-top">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 35.png" alt="">
                                    </div>
                                    <div class="left-bottom">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 39.png" alt="">
                                    </div>
                                </div>
                                <div class="mid">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 36.png" alt="">
                                </div>
                                <div class="right">
                                    <div class="right-top">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 38.png" alt="">
                                    </div>
                                    <div class="right-bottom">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 37.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs-head hoc-head">
                        <h5>PRODUCT PICTURES</h5>
                        <div class="ahs-text hoc-text">
                            <div class="tab-menu">
                                <ul>
                                    <li><a href="#" class="tab-a active-a ahs-a" data-id="tab1">House Of Cali</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab2">Hussain Rehar</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab3">Lynyer</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab4">WARP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ahs hoc tab tab-active" data-id="tab1">
                        <div class="ahs-content hoc-content">
                            <div class="ahs-heading hoc-heading">
                                <h3>FW19- Museum Collection- Picasso </h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Image 27.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Image 28.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Image 29.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs hr tab" data-id="tab2">
                        <div class="ahs-content hr-content">
                            <div class="ahs-heading hr-heading">
                                <h3>FW19 UNOBTAINABLE </h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 0126.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 0156.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 0127.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs lyner tab" data-id="tab3">
                        <div class="ahs-content lyner-content">
                            <div class="ahs-heading lyner-heading">
                                <h3>FW19</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/MK9A0088.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/MK9A0195.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/MK9A0691.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs wra tab" data-id="tab4">
                        <div class="ahs-content wra-content">
                            <div class="ahs-heading wra-heading">
                                <h3>SS20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 126.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 127.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 148.png" alt="">
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