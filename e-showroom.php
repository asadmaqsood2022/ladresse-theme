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
 * Template Name: E-Showroom
 */

get_header();
?>
        <!-- Banner starts here -->
        <div class="<?php if ( is_user_logged_in() ) {
                           echo "e-showroom-banner-login";
                            } else {
                            echo "e-showroom-banner"; 
                            } ?>">
            <div class="container">
                <div class="<?php if ( is_user_logged_in() ) {
                           echo "e-showroom-banner-inner-login";
                            } else {
                            echo "e-showroom-banner-inner"; 
                            } ?>">
                    <div class="e-showroom-banner-head">
                    <?php global $current_user; wp_get_current_user(); ?>
                        <h2><?php if ( is_user_logged_in() ) {
                            echo $current_user->user_firstname . ' ' . $current_user->user_lastname;
                            } else {
                            echo "The e-showroom"; 
                            } ?></h2>
                        <p>The E-Showroom is a supporting digital sales channel to facilitate the management and placement of wholesale orders, thus Showroom’s reach beyond the physical and creating new opportunities for our partners.</p>
                        <a href="/signup/" class="display">request access</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner ends here -->
        <!-- Content starts here -->
        <div class="content">
            <section class="<?php if ( is_user_logged_in() ) {
                           echo "eshowroom-brands-login";
                            } else {
                            echo "eshowroom-brands"; 
                            } ?>">
                <div class="container">
                    <div class="brand-head">
                        <h2>BRANDS</h2>
                        <p>The Showroom gained immediate recognition for its heavy roster of sustainable, responsible and award-winning emerging and independent designers presenting a fresh take on advanced contemporary womenswear, accessories, footwear
                            and jewelry.</p>
                    </div>
                    <div class="brand-content">
                        <a href="/george-keburia/">
                            <div class="left">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Ellipse 13.png" alt="">
                                </div>
                                <h3>George keburia</h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mid">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Ellipse 15.png" alt="">
                                </div>
                                <h3>warp</h3>
                            </div>
                        </a>
                        <a href="/le-fil/">
                            <div class="right">
                                <div class="box">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Ellipse 17.png" alt="">
                                </div>
                                <h3>LE FIL PARIS</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <!-- Content ends here-->
<?php
get_footer();