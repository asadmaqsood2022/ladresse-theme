<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

?>
<div class="content">
    <div class="le-fil-products">
        <div class="container">
            <div class="le-fil-product-head">
                <?php if(is_product_category('ss21-linesheet') || is_product_category('sunglasses-linesheet')) { ?>
                <h2>George Keburia PRODUCTS</h2>
                <?php } else { ?>
                <h2>LE FIL PRODUCTS</h2>
                <?php } ?>
            </div>
            <div class="le-fil-content-1">


                <?php
if ( have_posts() ) {
	//do_action( 'woocommerce_before_shop_loop' );
	woocommerce_product_loop_start();
	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
            the_post();
            global $post, $product;
			do_action( 'woocommerce_shop_loop' ); ?>
                <div class="product-list">
                    <div class="product">
                        <div class="image">
                            <?= $product->get_image(); ?>
                        </div>
                         <div class="product-info">
                        <h6><?= $product->get_sku(); ?></h6>
                        <h4><?= get_the_title(); ?></h4>
                        <div class="price">
                            
                            <h2><?= $product->get_short_description(); ?> </h2>
                            <h2>RRP € <?= $product->get_price(); ?> </h2>
                        </div>
                        <?= $product->get_description(); ?>
						</div>

                        <div class="product-btn attributes">
                            <?php
                            echo do_shortcode('[add_to_cart id="'.$product->get_id().'"]');
                            ?>
                        </div>
                    </div>
                </div>
                <?php
		}
	}
	woocommerce_product_loop_end();
	do_action( 'woocommerce_after_shop_loop' );
} else {
	do_action( 'woocommerce_no_products_found' );
}
?>
            </div>
        </div>
    </div>
<?php
get_footer( 'shop' );