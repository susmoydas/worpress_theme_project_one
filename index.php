<?php  get_header();?>
<body <?php body_class(); ?>>
<?php get_template_part('hero'); ?>
    <div class="posts">
    <?php 
    while (have_posts()){
        the_post();
        ?>
        <div class="post <?php post_class( ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="posttitle">
                        <a href="<?php the_permalink( );?>">    
                        <?php the_title( ); ?></a> </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong><?php the_author_posts_link(); ?></strong><br>
                            <?php the_date( ); ?>
                            <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>"); ?>
                        </p>
                       
                    </div>
                    <div class="col-md-8">
                        <p>
                        <?php
                             if(has_post_thumbnail( )){
                                 the_post_thumbnail('large',array('class="img-fluid"'));

                             }
                            ?>
                        </p>
                        <?php
                        //the_content(  );
                        the_excerpt();
                        // if(is_single(  )){
                        //   the_content( );  
                        // }
                        // else{
                        //     the_excerpt();
                        // }
                        ?>
                    </div>

                </div>
                <hr>
            </div>
            
        </div>

 
    <?php
    }
    ?>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-8">
                <?php
                the_posts_pagination( array(
                    'prev_text'          => __( '&nbsp;', 'wordpress_two' ),
                    'next_text'          => __( '&nbsp;', 'wordpress_two' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'wordpress_two' ) . ' </span>',//Page
                    'screen_reader_text' => __( '&nbsp;' )
                  ) );
                  
                ?>
            </div>
        </div>
    </div>
    
<?php get_footer(  ); ?>