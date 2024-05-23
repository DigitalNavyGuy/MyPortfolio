<?php 
/**
 * Template part for displaying portfolio archive.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package myportfolio
 * 
 * @since 1.0.0
 */
?>

<div class="col-md-4" data-aos="fade-up">
    <div class="card rounded-2 bg-base shadow-effect">
        <div class="card bg-base border-none">
            <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top img-fit', 'alt' => get_the_title() ) ); ?>
                <div class="card-body">
                    <h4 class="mt-4 mb-2 card-title"><?php the_title(); ?></h4>
                    <p class="card-text"><small >Posted on <?php the_date(); ?> by <?php the_author(); ?></small></p>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <div class="text-end">
                        <a href="<?php the_permalink(); ?>" class="link-custom">Read More</a>
                    </div>
                </div>
        </div>
    </div>
</div>