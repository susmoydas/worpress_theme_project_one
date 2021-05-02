
<?php 
$wordpress_twofeat_image = get_the_post_thumbnail_url( null, 'large' );
?>
    <div class="header page-header" style="background-image:url(<?php echo $wordpress_twofeat_image;?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tagline text-center"><?php bloginfo('description'); ?> </h3>
                    <h1 class="align-self-center text-center display-1 heading">
                    <a href="<?php echo site_url( );?>">   
                    <?php bloginfo('name'); ?>
                    </a> 
                </h1>
                 </div>

                 <div class="col-md-12">
                        <div class="navigation"> 
                        <?php
                        wp_nav_menu(
                            array(
                            'theme_location'       => 'topmenu',
                            'menu_id'              => 'topmenucontainer',
                            'menu_class'           => 'menu',
                        ));
                        ?>
                        </div>
                        </div>
            </div>
        </div>
    </div>
    <hr>
