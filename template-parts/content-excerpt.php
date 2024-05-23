<?php 
/**
 * Template part for displaying content excerpt
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
        'post_type'      => 'post',
        'posts_per_page' => 3 // Change the number of posts to display here
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
    ?>
        <div class="col-md-4" data-aos="fade-up">
            <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'rounded-4' ) ); ?>
                </div>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="card-custom-content p-4">
                        <p class="text-brand mb-2"><?php echo get_the_date( 'M d, Y' ); ?></p>
                        <h5 class="mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php force_balance_tags( the_excerpt() ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="link-custom"><?php esc_html_e( 'Read More', 'myportfolio' ); ?></a>
                    </div>
                </article>
            </div>
        </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
