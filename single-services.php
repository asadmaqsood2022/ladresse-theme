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

<!-- Content starts here -->
<div class="content">
    <?php the_content(); ?>
</div>
<!-- Content ends here -->

<?php
endwhile;
if(is_single('press-office') || is_single('pr-and-events') ) {
get_footer();
}