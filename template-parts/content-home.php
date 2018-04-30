<?php
/**
 * Template part for displaying homepage content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hat_Bazar
 */

?>

<?php include get_template_directory() . '/sections/home_slider_section.php'; ?>
<?php
$settings = get_theme_mod( 'home_sections_element_setting', '');
$special_title= get_theme_mod( 'home_special_seciton_title', 'Special links');

?>

<div id="home_content">
    <div class="row no-gutters"  id="special_links">
        <div class="col-md-12">
            <h2 class="title"><span><?php echo $special_title; ?></span></h2>
        </div>

        <div class="col-md-12">
            <div class="row">
                <?php foreach( $settings as $setting ) : ?>
                <?php
                if (is_numeric($setting['image_url'])){
                    $img_url = wp_get_attachment_url($setting['image_url']) ;
                }else{
                    $img_url = $setting['image_url'] ;
                }
                ?>
                <div class="thumbex">
                    <div class="thumbnail"><a href="<?php echo $setting['href_link']; ?>"> <img  src="<?php echo $img_url; ?>" /><span><?php echo $setting['heading_text']; ?></span></a></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#special_links -->