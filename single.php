<?php
/**
 * The template for displaying all pages
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
    <div class="row">
        <div class="col-md-9 nopadding" id="main_content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
        <!-- /#main_content -->
        <!--sidebar content goes here-->
        <div class="col-md-3 nopadding" id="sidebar_content">
            <?php get_sidebar(); ?>
        </div>
        <!-- /#sidebar_content -->
    </div>
<?php

get_footer();
