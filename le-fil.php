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
 * Template Name: Le Fil
 */

get_header();
?>

<!-- Content starts here-->

<div class="content">
    <section class="le-fil-page">
        <div class="container">
            <div class="le-fil-page-head">
                <div class="le-fil-logo">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/le-fil-logo.png" alt="">
                    </a>
                </div>
                <div class="le-fil-text">
                    <p>Le Fil is the very manifestation of a multicultural idea, where two people from different
                        cultural backgrounds decided to come together to create something special by sharing the skills
                        and techniques they have acquired over
                        the years. The concept of merging distinct design elements from two different parts of the world
                        that complement one another reflects in our designs which are contemporary and modern.</p>
                </div>
                <div class="le-fil-insta-icon">
                    <a href="https://www.instagram.com/lefilparis"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="le-fil-page-content">
                <div class="le-fil-page-block">
                    <div class="info line-1">
                        <div class="based">
                            <h2>BASED IN </h2>
                            <h3>pARIS, FRANCE</h3>
                        </div>
                        <div class="made-in">
                            <h2>MADE IN</h2>
                            <h3>FRANCE, pAKISTAN</h3>
                        </div>
                        <div class="currency">
                            <h2>CURRENCY</h2>
                            <h3>€ EURO</h3>
                        </div>
                        <div class="price-points">
                            <h2>PRICE POINTS</h2>
                            <h3>WHS €90 - €200</h3>
                        </div>
                    </div>
                    <div class="info line-2">
                        <div class="retail-markup">
                            <h2>RETAIL MARKUP</h2>
                            <h3>2.5</h3>
                        </div>
                        <div class="brand-markup">
                            <h2>BRAND LAUNCH:</h2>
                            <h3>SS20</h3>
                        </div>
                    </div>
                    <div class="info line-3">
                        <div class="delivery">
                            <h2>DELIVERY WINDOW</h2>
                            <h3>15 February - 15 March</h3>
                        </div>
                        <div class="deliver-terms">
                            <h2>DELIVERY TERMS</h2>
                            <h3>EXW</h3>
                        </div>
                        <div class="shipping">
                            <h2>SHIPPED FROM</h2>
                            <h3>FRANCE, pAKISTAN</h3>
                        </div>
                    </div>
                    <div class="info line-4">
                        <div class="closing-order-date">
                            <h2>CLOSING ORDER DATE</h2>
                            <h3>10 January, 2021</h3>
                        </div>
                    </div>
                    <div class="info line-5">
                        <div class="payment">
                            <h2>PAYMENT TERMS</h2>
                            <h3>In addition to our sustainable effort, L'adresse will be donating $25 to the unchr for
                                every 2 units sold to our wholesale partners to help refugees in need.</h3>
                        </div>
                    </div>
                </div>
                <div class="line-sheets">
                    <h2>LINESHEETS</h2>
                    <?php
                        $orderby = 'name';
                        $order = 'asc';
                        $hide_empty = true ;
                        $cat_args = array(
                            'orderby'    => $orderby,
                            'order'      => $order,
                            'hide_empty' => $hide_empty,
                            'post_type'  => product,
                            'exclude' => array(16,17,18)
                        );
                            
                        $product_categories = get_terms( 'product_cat', $cat_args );
                            
                            foreach ($product_categories as $key => $category) :

                                $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                                $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
                                $term_link = get_term_link( $category, 'product_cat' );
                    ?>
                    <a href="<?= $term_link; ?>">
                        <div class="image">
                            <img src="<?= $shop_catalog_img[0]; ?>" alt="">
                        </div>
                    </a>
                    <?php 
                    endforeach;
                    ?>
                </div>
                <div class="brand-materials">
                    <h2>BRAND MATERIAL</h2>
                    <div class="brand-material-options">
                        <div class="image">
                            <div class="le-fil-material">
                                <a href="#"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/images/brand-material-1.png"
                                        alt=""></a>
                            </div>
                            <h3>Lookbook ss20</h3>
                        </div>
                        <div class="image">
                            <div class="le-fil-material">
                                <a href="#"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/images/brand-material-2.png"
                                        alt=""></a>
                            </div>
                            <h3>Product Visuals</h3>
                        </div>
                        <div class="image">
                            <a href="#">
                                <div class="le-fil-material image-3">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/brand-material-3.png"
                                        alt="">
                                </div>
                            </a>
                            <h3>Brand Story</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Content ends here -->

<?php
get_footer();