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
 * Template Name: Home
 */

get_header();
?>

<!-- Banner starts here -->
<div class="banner">
    <video loop playsinline id="video" class="banner-video">
        <source src="<?php the_field('video'); ?>" type="video/mp4">

    </video>
    <div class="close-btn">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="banner-content">
            <div class="banner-image">
                <a href="#">
                    <img src="<?php the_field('banner_logo_image_1'); ?>" alt="Banner Logo">
                    <img src="<?php the_field('banner_logo_image_2'); ?>" alt="Banner Logo"
                        class="x-image">
                    <img src="<?php the_field('banner_logo_image_3'); ?>" alt="Banner Logo"
                        class="y-image">
                </a>
            </div>
            <div class="banner-text">
                <h2><?php the_field('heading'); ?></h2>
                <h2><?php the_field('date'); ?></h2>
                <h2><?php the_field('description'); ?></h2>
            </div>
            <a id="play_button" class="vbtn">
                <div class="home-video">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/video.png" alt="">
                    </div>
                    <div class="btn-text">
                        <h2>Watch The Video</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Banner ends here -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/custom.js"></script>
</body>

</html>

<?php
//get_footer();