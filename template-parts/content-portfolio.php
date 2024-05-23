<?php 
/**
 * Template part for displaying portfolio content.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package myportfolio
 * 
 * @since 1.0.0
 */
?>

<div class="row gy-4">
    <?php
    $args = array(
        'post_type' => 'portfolio'
    );
    $query = new WP_Query( $args );
    $delay = 0; // Initialize delay
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
    ?>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
            <div class="card rounded-2 bg-base shadow-effect">
                <div class="card bg-base border-none">
                    <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top img-fit', 'alt' => get_the_title() ) ); ?>
                        <div class="card-body">
                            <h4 class="mt-4 mb-2 card-title"><?php the_title(); ?></h4>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="text-end">
                                <a href="<?php the_permalink(); ?>" class="link-custom">Read More</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    <?php
        $delay += 300; // Increase delay by 300ms for each post
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>