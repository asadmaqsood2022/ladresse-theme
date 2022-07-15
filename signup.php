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
 * Template Name: Signup
 */

get_header();
?>

<!-- Content starts here -->
<div class="content">
    <section class="request-acess">
        <div class="container">
            <div class="button">
                <a href="/e-showroom/">
                    <div class="image">
                        <div class="icon">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </div>
                        <h5>E-Showroom</h5>
                    </div>
                </a>
            </div>
            <div class="request-acess-content">
                <div class="login">
                    <div class="login-form">
                        <h2>Login</h2>
                        <?php //wp_login_form(); ?>
                        <?php
$redirect_to = 'http://ladresseparisagency.com/e-showroom/';
?>
                        <form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>"
                            method="post">
                            <p><input id="user_login" type="text" size="20" value="" name="log"
                                    placeholder="Email Address*" required></p>
                            <p><input id="user_pass" type="password" size="20" value="" name="pwd"
                                    placeholder="Password*" required></p>
                            <p><input id="rememberme" type="checkbox" value="forever" name="rememberme"></p>
                            <a href='#'>Forgot Password?</a>
                            <p><input id="wp-submit" type="submit" value="Submit" name="wp-submit"></p>

                            <input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">
                            <input type="hidden" value="1" name="testcookie">
                        </form>
                    </div>
                </div>
                <div class="request">
                    <div class="request-form">
                        <h2>REQUEST ACCESS</h2>
                        <?= do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]
'); ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
</div>
<!-- Content ends here -->

<?php
get_footer();