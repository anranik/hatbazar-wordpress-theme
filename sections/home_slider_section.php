<section id="home_slider">
    <?php
        $settings = get_theme_mod( 'home_slider_setting', '');
    $slider_height = get_theme_mod( 'home_slider_height', '');
    $i = 1;
    $j = 0;
    ?>



    <div id="home_carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach( $settings as $setting ) : ?>
            <li data-target="#home_carousel" data-slide-to="<?php echo $j; ?>" class=" <?php if($j == 0){echo 'active';}; ?>"></li>
            <?php $j++; endforeach; ?>
        </ol>

        <div class="carousel-inner" role="listbox" style="height: <?php echo $slider_height; ?>">
            <?php foreach( $settings as $setting ) : ?>
                <?php
                if (is_numeric($setting['image_url'])){
                    $img_url = wp_get_attachment_url($setting['image_url']) ;
                }else{
                    $img_url = $setting['image_url'] ;
                }
                ?>
            <div class="carousel-item <?php if($i == 1){echo 'active';}; ?>">
                <img class="d-block img-fluid" src="<?php echo $img_url; ?>" alt="<?php echo $setting['heading_text']; ?>">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-7 text-left">
                            <?php
                                if (!empty($setting['heading_text'])){
                                    echo '<h1>'. $setting['heading_text'].'</h1>';
                                }
                            ?>
                            <?php
                                if (!empty($setting['subheading_text'])){
                                    echo '<p>'. $setting['subheading_text'].'</p>';
                                }
                            ?>

                            <a  class="btn btn-primary" href="<?php echo $setting['button_link']; ?>">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
            <?php $i++; endforeach; ?>
<!--            end the loop-->

        </div>
        <a class="carousel-control-prev" href="#home_carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home_carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- /#home_slider -->