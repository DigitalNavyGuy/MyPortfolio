<?php
/**
 * The template for displaying all single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package myportfolio
 * 
 * @since 1.0.0
 */

get_header();
?>
<div id="content-wrapper-single">
    <div class="col-md-6" data-aos="fade-up" style="margin: 0 auto;">
        <div class="card-custom rounded-4 bg-base shadow-effect">

            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_title( '<h1 class="text-center mt-4">', '</h1>' );
                    echo '<div class="text-center">' . get_the_date( 'M d, Y' ) . '</div>';
                    the_post();
                    echo '<div class="text-center">' . get_the_author() . '</div>';
            ?>

                    <div class="card-custom-image rounded-4">
                        <img class="rounded-4 img-fluid" src="./assets/images/image1.png" alt="" />
                    </div>
                    </div>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="card-custom-content p-4">
                            <div class="post-thumbnail">
                                <?php 
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) );
                                    }  
                                ?>
                            </div>
                            <div class="post-content" style="margin-top: 20px;">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </article>
                    <div class="post-navigation">
                        <div class="prev-post">
                            <h2><?php previous_post_link('&laquo; %link', '%title'); ?></h2>
                        </div>
                        <div class="next-post">
                            <h2><?php next_post_link('%link &raquo;', '%title'); ?></h2>
                        </div>
                    </div>

            <?php
                }
            } else {
                get_template_part( 'template-parts/content', 'none' );
            }
            ?>

        </div>
        <?php get_footer(); ?>
    </div>
</div>
