<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ladresse
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="google-site-verification" content="0JZti2ZyrS872r6sRiXrHgVFFr5Zzq0erkUBLhR1H74" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/images/la_fav.png" />
	<title>L’adresse Paris Agency</title>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-45PR12BPLR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-45PR12BPLR');

</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="page-wrapper">
        <!-- Header starts here -->
        <header class="<?php if(is_page('home')){echo 'header-1';}  ?>">
            <div class="container">
                <div class="header-inner">
                    <div class="logo">
                        <a href="http://ladresseparisagency.com/"><img src="<?= get_template_directory_uri(); ?>/assets/images/main-logo.svg" alt="Logo"></a>
                    </div>
                    <div class="navigation">
                        <div class="toggle">
                            <div class="menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <!-- <ul>
                            <li><a href="brands.html">Brands</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="e-showroom.html">E-Showroom</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
						</ul> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
                            <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
                            $count = WC()->cart->cart_contents_count;
                            if ( is_user_logged_in() ) {
                            ?>
                            <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                            <?php 
                            if ( $count > 0 ) {
                                ?>
                                <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                                <?php
                            }
        				?></a>
 
<?php 
}
} ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends here -->