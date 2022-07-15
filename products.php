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
 * Template Name: Products
 */

get_header();
?>

        <!-- Content starts here-->
        <div class="content">
            <div class="le-fil-products">
                <div class="container">
                    <div class="le-fil-product-head">
                        <h2>Le Fil PRODUCTS</h2>
                    </div>
                    <div class="le-fil-content-1">
                        <?php echo do_shortcode('[products]') ?>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();