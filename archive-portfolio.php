<?php
/**
 * The template for displaying Portfolio archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourThemeName
 */

get_header();
?>
<div class="container">
    <div id="content-wrapper-single">
        <div class="container center-content">
            <h1 class="pb-5">Portfolio</h1>
        </div>
    <div class="row gy-4">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'archive' );
        endwhile;
        the_posts_pagination();
    else :
        echo 'No posts found.';
    endif;
    ?>
<?php get_footer(); ?>
</div>
</div>