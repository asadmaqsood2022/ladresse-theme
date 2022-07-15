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
 * Template Name: SS 20
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
                    <source src="<?= get_template_directory_uri(); ?>/assets/video/ss20.mp4" type="video/mp4">
                </video>
            </div>
            <section class="ss20">
                <div class="ss20-content scrollable">
                    <div class="ss20-head">
                        <div class="button">
                            <a href="/ladresse/?services=showroom/">
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
                                <h2>WOMEN, ACCESSORIES & Lifestyle ss20 </h2>
                                <h3>L’Adresse X Tranoi showroom at Carrousel du Louvre with emerging brands from ME and Asia</h3>
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
                                <h2>SS 20</h2>
                            </div>
                            <div class="images">
                                <div class="left">
                                    <div class="left-top">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 05.png" alt="">
                                    </div>
                                    <div class="left-bottom">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 09.png" alt="">
                                    </div>
                                </div>
                                <div class="mid">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 06.png" alt="">
                                </div>
                                <div class="right">
                                    <div class="right-top">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 08.png" alt="">
                                    </div>
                                    <div class="right-bottom">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 07.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs-head">
                        <h5>PRODUCT PICTURES</h5>
                        <div class="ahs-text">
                            <div class="tab-menu">
                                <ul>
                                    <li><a href="#" class="tab-a active-a ahs-a" data-id="tab1">Ahsan Nazir</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab2">House Of Cali</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab3">Lynyer</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab4">WARP</a></li>
                                    <li><a href="#" class="tab-a" data-id="tab5">Zuria Dor</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ahs tab tab-active" data-id="tab1">
                        <div class="ahs-content">
                            <div class="ahs-heading">
                                <h3>Effloresence SS20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 0001.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/ASD_4377.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 154.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs cali tab" data-id="tab2">
                        <div class="ahs-content cali-content">
                            <div class="ahs-heading cali-heading">
                                <h3>Jean Cocteau - Museum Collection - SS20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 0116.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Group 57.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 0118.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs lynyer tab" data-id="tab3">
                        <div class="ahs-content lynyer-content">
                            <div class="ahs-heading lynyer-heading">
                                <h3>SS20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 016.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 017.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 018.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs wrap tab" data-id="tab4">
                        <div class="ahs-content wrap-content">
                            <div class="ahs-heading wrap-heading">
                                <h3>SS20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 106.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 107.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 108.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ahs zd tab" data-id="tab5">
                        <div class="ahs-content zd-content">
                            <div class="ahs-heading zd-heading">
                                <h3>SS20</h3>
                            </div>
                            <div class="images">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 000106.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 000107.png" alt="">
                                </div>
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Rectangle 000108.png" alt="">
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