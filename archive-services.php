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
 * Template Name: Services
 */

get_header();
?>

<!-- Content starts here -->
<div class="content">
    <div class="services">
        <div class="container">
            <div class="services-head">
                <h2>SERVICES</h2>
                <p>L’adresse Paris Agency is a fashion group that offers a range of expertise services in the field of brand building. We manage a portfolio of the next groundbreaking labels and designers. Our clients include fashion companies & retail partners to brands and corporations. We work with our clients right from creating their brand identity and brand strategy to commercializing their products, by providing them individualized sales platform, partnerships and collaborations.</p>
            </div>
            <div class="services-content">
                <div class="options-1">
                <?php 
                    $args = array( 'post_type' => 'services','posts_per_page' =>2 );
                    $wp_query = new WP_Query( $args );
                    //$posts_per_first_section = 3;
                    $count1=1;
                    
                    if( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
                        if($count1==1){$class='consulting-1';} elseif($count1==2){$class='press-office-1';}
                    
                    ?>
                    <a href="<?php the_permalink(); ?>" class="box">
                        <div class="<?php echo $class;?> box-1">
                            <h5><?php the_title(); ?></h5>
                            <h3><?php the_field('service_content'); ?> </h3>
                        </div>
                    </a>
                    <?php $count1++;endwhile;
                     endif; ?>
                </div>
                <div class="options-2">
                <?php 
                    $args = array( 'post_type' => 'services','offset'=>2, 'posts_per_page' =>3);
                    $wp_query = new WP_Query( $args );
                    //$posts_per_first_section = 3;
                    $count2=1;
                    
                    if( $wp_query->have_posts() ) :
                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
                    if($count2==1){$class='showroom-1';} elseif($count2==2){$class='pr-and-events-1';} elseif($count2==3){$class='partnerships-collaborations-1';}
                    
                    ?>
                    <a href="<?php the_permalink(); ?>" class="box">
                        <div class="<?php echo $class;?> box-1">
                            <h5><?php the_title(); ?></h5>
                            <h3><?php the_field('service_content'); ?></h3>
                        </div>
                    </a>
                    <?php $count2++;endwhile;
                     endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content ends here -->

<?php
get_footer();