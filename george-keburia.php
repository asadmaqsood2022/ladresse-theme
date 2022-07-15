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
 * Template Name: George Keburia
 */

get_header();
?>

 <!-- Content starts here-->
 <div class="content">
            <section class="le-fil-page geroge-kubera-page">
                <div class="container">
                    <div class="le-fil-page-head geroge-kubera-page-head">
                        <div class="le-fil-logo geroge-kubera-logo">
                            <a href="#">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/george-kubera-logo.png" alt="">
                            </a>
                        </div>
                        <div class="le-fil-text geroge-kubera-text">
                            <p>George Keburia is a self-taught designer, born in 1990 Tbilisi, Georgia. He founded his eponymous label in 2010, presenting a surrealist collection saturated with outlandish concepts and references.</p>
                            <p>For his debut collection, George Keburia was awarded the ‘Best Newcomer’ Award at Tbilisi Fashion Week. Two years later, Keburia achieved recognition with his capsule collection "Bird Nest", winning the design contest Be Next
                                2012 in Tbilisi and the Community's Choice Muuse x Vogue Talents Vision Award.</p>
                        </div>
                        <div class="le-fil-insta-icon geroge-kubera-icons">
                            <a href="https://www.georgekeburia.com"><img src="<?= get_template_directory_uri(); ?>/assets/images/global.png" alt=""></a>
                            <a href="https://www.instagram.com/georgekeburia/"><img src="<?= get_template_directory_uri(); ?>/assets/images/instagram.png" alt="" class="insta"></a>
                        </div>
                    </div>
                    <div class="le-fil-page-content geroge-kubera-page-content">
                        <div class="le-fil-page-block geroge-kubera-page-block">
                            <div class="info line-1">
                                <div class="based">
                                    <h2>BASED IN </h2>
                                    <h3>TBILISI, GEORGIA</h3>
                                </div>
                                <div class="made-in">
                                    <h2>MADE IN</h2>
                                    <h3>RTW - TBILISI, GEORGIA</h3>
                                </div>
                                <div class="currency">
                                    <h2>CURRENCY</h2>
                                    <h3>€EUR / $USD</h3>
                                </div>
                                <div class="price-points">
                                    <h2>PRICE POINTS</h2>
                                    <h3>WHS € 170</h3>
                                </div>
                            </div>
                            <div class="info line-2">
                                <div class="retail-markup">
                                    <h2>RETAIL MARKUP</h2>
                                    <h3>2.8</h3>
                                </div>
                                <div class="sunglasses">
                                    <h2>SUNGLASSES:</h2>
                                    <h3>CHINA</h3>
                                </div>
                                <div class="price-whole">
                                    <h2>WHOLESALE PRICE</h2>
                                    <h3>€ 100 - € 250</h3>
                                </div>
                            </div>
                            <div class="info line-6">
                                <div class="stocklist">
                                    <div class="head">
                                        <h2>STOCKISTS: </h2>
                                    </div>
                                    <div class="content">
                                        <h3>Store</h3>
                                        <h3>ARCHIVES (Canada),A'Favor Boutique(Australia),KOIBIRD(Marylebone, London, UK),</h3>
                                        <h3>Macondo Store(Verona, Italy), GW London(Ladbroke Grove, London, UK),</h3>
                                        <h3>Tom Greyhound Paris(Paris, France), Browns South Molton Street(London, UK)</h3>
                                        <h3>Browns East(London, UK), OOAK(Shanghai, China), Odds Concept(Miami, US,</h3>
                                        <h3>REVOLVER(Spain),IERI Store(Tbilisi, Georgia),FLANERIE CONCEPT STORE</h3>
                                        <h3>(Ha Noi, Viet Nam),ALLAND(Ukraine), MORE is LOVE(Tbilisi,</h3>
                                        <h3>Georgia),INVOGUE(Ukraine), Montaigne Optique(Paris, France), Human &</h3>
                                        <h3>Being(UAE), Spot2.55(Belarus), Ochki Boutique(Moscow, Russia), Lor'in(Russia),</h3>
                                        <h3>MRKT(Tbilisi, Georgia), The Bow(Russia), Selected Store(Moscow, Russia),</h3>
                                        <h3>Sio Concept Store(Moscow, Russia)</h3>
                                        <h3>online</h3>
                                        <h3>LUISAVIAROMA, KOIBIRD, ARCHIVES, SSENSE, BROWNS, Farfetch, N.O.L.M, Verishop</h3>
                                        <h3>IERI, MORE is LOVE, L'oeuvre, SELECTE, FLANERIE, L'ADRESSE, VERV Londo,</h3>
                                        <h3>Stendhal, The Box Boutique, X-Eyes, Asthik, Sunglasscurator, Shyness </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="info line-3">
                                <div class="delivery">
                                    <h2>DELIVERY WINDOW</h2>
                                    <h3>01 February - February 26</h3>
                                </div>
                                <div class="deliver-terms">
                                    <h2>DELIVERY TERMS</h2>
                                    <h3>EXW</h3>
                                </div>
                                <div class="shipping">
                                    <h2>SHIPPED FROM</h2>
                                    <h3>TBILISI, GEORGIA</h3>
                                </div>
                            </div>
                            <div class="info line-4">
                                <div class="closing-order-date">
                                    <h2>CLOSING ORDER DATE</h2>
                                    <h3>October 26, 2020</h3>
                                </div>
                            </div>
                            <div class="info line-5">
                                <div class="payment">
                                    <h2>PAYMENT TERMS</h2>
                                    <h3>30% DEPOSIT, 70% PRE SHIPPING</h3>
                                </div>
                            </div>
                        </div>
                        <div class="brand-materials line-sheets-geo">
                            <h2>LINESHEETS</h2>
                            <div class="brand-material-options">
                                <?php
                                $orderby = 'name';
                                $order = 'asc';
                                $hide_empty = true ;
                                $cat_args = array(
                                    'orderby'    => $orderby,
                                    'order'      => $order,
                                    'hide_empty' => $hide_empty,
                                    'post_type'  => product,
                                    'exclude' => array(16,30),
                                );
                                 
                                $product_categories = get_terms( 'product_cat', $cat_args );
                                 
                                    foreach ($product_categories as $key => $category) :

                                        $cat_thumb_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                                        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
                                        $term_link = get_term_link( $category, 'product_cat' );
                                ?>
                                <div class="image">
                                    <a href="<?= $term_link; ?>">
                                        <div class="le-fil-material">
                                            <img src="<?= $shop_catalog_img[0]; ?>" alt="">
                                        </div>
                                        <h3><?php echo $category->name; ?></h3>
                                    </a>
                                </div>
                                <?php 
                                endforeach;
                            
                                ?>
                            </div>
                        </div>
                        <div class="brand-materials">
                            <h2>BRAND MATERIAL</h2>
                            <div class="brand-material-options">
                                <div class="image">
                                    <a href="#">
                                        <div class="le-fil-material">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/Ellipse 21.png" alt="" class="image9">
                                        </div>
                                        <h3>BRAND BOOK</h3>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#">
                                        <div class="le-fil-material">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/Ellipse 19.png" alt="" class="image9">
                                        </div>
                                        <h3>PRODUCT VISUALS</h3>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#">
                                        <div class="le-fil-material">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/Ellipse 20.png" alt="">
                                        </div>
                                        <h3>PRESS</h3>
                                    </a>
                                </div>
                                <div class="image">
                                    <a href="#">
                                        <div class="le-fil-material image-3">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/Geroge-logo.png" alt="">
                                        </div>
                                        <h3>BRAND STORY</h3>
                                    </a>
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