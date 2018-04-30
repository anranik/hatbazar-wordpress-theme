<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hat_Bazar
 */

?>

</div>
<!-- /.container -->
</div>
<!-- /#wrapper -->


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row footer_content">

                <?php
                dynamic_sidebar('footer-sidebar');
                ?>

                    <!--widget-->
                </div>
            </div>

            <!--footer bootom start-->
            <div class="col-md-12 text-center footer_bottom">
                <hr style="color: #ddd;    background-color: #ddd;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <p class="footer-copy-text text-left">Copyright @anowar</p>
                    </div>
                    <div class="col-md-6" id="footer-bottom-menu">
                        <?php
                        if ( has_nav_menu( 'menu-footer' ) ) {
                            wp_nav_menu( array(
                                'theme_location'  => 'menu-footer',
                            ) );
                        } ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
