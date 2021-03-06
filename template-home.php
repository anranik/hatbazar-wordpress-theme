<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hat_Bazar
 */

get_header();
?>
<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'home' );

    // If comments are open or we have at least one comment, load up the comment template.

endwhile; // End of the loop.
?>
<?php

get_footer();
