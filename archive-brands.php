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
 * Template Name: Brands
 */

get_header();
?>

<div class="content">
    <div class="brands">
        <div class="container">
            <div class="brands-head">
                <h2>Brands</h2>
                <p>L’adresse Paris Agency is a fashion group that offers a range of expertise services in the field of brand building. We manage a portfolio of the next groundbreaking labels and designers. Our clients include fashion companies & retail partners to brands and corporations. We work with our clients right from creating their brand identity and brand strategy to commercializing their products, by providing them individualized sales platform, partnerships and collaborations.</p>
            </div>
            <div class="brands-content">

                <div class="brands-1">
                    <?php 
                    $args = array( 'post_type' => 'brands','posts_per_page' =>3 );
                    $wp_query = new WP_Query( $args );
                    //$posts_per_first_section = 3;
                    $count1=1;
                    
                    if( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
                        if($count1==1){$class='tranoi';} elseif($count1==2){$class='lynyer';} elseif($count1==3){$class='brand3';}
                    
                    ?>


                    <a href="<?php the_permalink(); ?>" class="box-1">
                        <div class="<?php echo $class;?> box">
                            <?php the_field('image'); ?>

                        </div>
                    </a>
                    <?php $count1++;endwhile;
                     endif; ?>

                </div>
                <div class="brands-2">
                    <?php 
                    $args = array( 'post_type' => 'brands','offset'=>3, 'posts_per_page' =>3);
                    $wp_query = new WP_Query( $args );
                    //$posts_per_first_section = 3;
                    $count2=1;
                    
                    if( $wp_query->have_posts() ) :
                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
                    if($count2==1){$class='wrap';} elseif($count2==2){$class='cali';} elseif($count2==3){$class='ahs';}
                    
                    ?>
                    <a href="<?php the_permalink(); ?>" class="box-1">
                        <div class="<?php echo $class;?> box">
                            <?php the_field('image'); ?>

                        </div>
                    </a>
                    <?php $count2++;endwhile;
                    endif; ?>
                </div>
                <div class="brands-3">
                    <?php 
                        $args = array( 'post_type' => 'brands','offset'=>6,'posts_per_page' => 9 );
                        $wp_query = new WP_Query( $args );
                        //$posts_per_first_section = 3;
                        $count3=1;
                        
                        if( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
                        if($count3==1){$class='le-fil';} elseif($count3==2){$class='zuria-dor';} elseif($count3==3){$class='sun-tal';}
                    
                    ?>
                    <a href="<?php the_permalink(); ?>" class="box-1">
                        <div class="<?php echo $class;?> box">
                            <?php the_field('image'); ?>

                        </div>
                    </a>
                    <?php $count3++;endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();