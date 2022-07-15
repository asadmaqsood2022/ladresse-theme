<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ladresse
 */

get_header();
while(have_posts()):
the_post();
?>

<div class="content">
    <section class="zoria-dor">
        <div class="container">
        <a href="/brands/">
                    <div class="image">
                        <div class="icon">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                        <h5>Brands</h5>
                    </div>
                </a>
            <div class="head">
               
                    <h2><?php the_title(); ?></h2>
    
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</div>

<?php
endwhile;
get_footer();