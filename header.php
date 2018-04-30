<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hat_Bazar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<!--customizer css-->
    <style>
        body{
            background-image: url(<?php echo get_theme_mod( 'home_bg_image','' ); ?>);
            background-repeat: <?php echo get_theme_mod( 'home_bg_repeat','' ); ?>;
            background-color: <?php echo get_theme_mod( 'home_bg_color', '#8e0a26' ); ?>;
        }
        .navigation_area{
            background-color: <?php echo get_theme_mod( 'header_bg_color', '' ); ?>;
        }
        .navigation_area .nav-item a{
            color: <?php echo get_theme_mod( 'header_text_color', '#fff' ); ?> !important;
        }

        .navigation_area .nav-item a:hover{
            color: <?php echo get_theme_mod( 'header_text_hover_color', '#fff' ); ?> !important;
        }

    </style>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

    <div id="top_section">
        <div class="container">
            <div class="row logo_and_header">
                <div class="col-md-12 text-center">
                    <div class="logo_section">
                        <?php $image = get_theme_mod( 'hatbazarlogo_url', '' ); ?>
                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <?php if ($image) {?>

                            <img src="<?php echo esc_url($image);?>" alt="" height="50px" class="logo">
                            <?php }else{?>
                            <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""  class="logo">
                            <?php } ?>
                        </a>
                    </div>
                    <!-- /.logo_section -->
                </div>
                <!-- /.col-md-12 -->
                <div class="col-md-12 navigation_area">
                    <div class="row">
                        <nav class="col-md-9 col-sm-12 navbar navbar-expand-lg  navbar-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'menu-primary',
                                    'depth'           => 2,
                                    'container'       => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'menu_class'      => 'nav navbar-nav',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker()
                                ) );
                                ?>
                            </div>

                        </nav>
                        <!--                        end of navigation-->

                        <div class="col-md-3 social">
                            <div class="social_item">
                                <?php
                                   $fb_link = get_theme_mod( 'header_social_fb_icon', '#' );
                                   $gplus_link = get_theme_mod( 'header_social_gplus_icon', '#' );
                                   $twitter_link = get_theme_mod( 'header_social_twitter_icon', '#' );
                                   $instagram_link = get_theme_mod( 'header_social_instagram_icon', '#' );
                                   $pinterest_link = get_theme_mod( 'header_social_pin_icon', '#' );
                                ?>
                                <?php if (!empty($fb_link)): ?>
                                <a href="<?php echo $fb_link; ?>">
                                    <span class="fa-stack">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <?php endif; ?>
                                <?php if (!empty($gplus_link)): ?>
                                <a href="<?php echo $gplus_link; ?>">
                                    <span class="fa-stack">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <?php endif; ?>
                                <?php if (!empty($twitter_link)): ?>
                                <a href="<?php echo $twitter_link; ?>">
                                    <span class="fa-stack">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <?php endif; ?>
                                <?php if (!empty($instagram_link)): ?>
                                <a href="<?php echo $instagram_link; ?>">
                                    <span class="fa-stack">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <?php endif; ?>
                                <?php if (!empty($pinterest_link)): ?>
                                <a href="<?php echo $pinterest_link; ?>">
                                    <span class="fa-stack">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <!--row-->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.conainer -->
    </div>
        <!-- /#top_section -->

    <div class="container" id="site_content">




