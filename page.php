<?php get_header(  ); ?>

<body <?php body_class( ); ?>>
<?php
get_template_part("hero-page");
?>
<div class="container">
        <div class="row">

            <div class="col-md-8">
            <div class="posts">
    <?php 
    while (have_posts()){
        the_post();
        ?>
        <div class="post <?php post_class( ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post-title ">
                          
                        <?php the_title( ); ?> </h2>
                    </div>
                </div>
                <div class="row">
                    
                        <p class="">
                            <strong><?php the_author(); ?></strong><br>
                            <?php the_date( ); ?>
                            <?php //echo get_the_tag_list("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>"); 
                            //echo get_the_tag_list( sprintf( '<p>%s: ', __( 'Tags', 'wordpress_two' ) ), ', ', '</p>' );
                            echo get_the_tag_list('<p class="tag_list  "><strong>Tags: </strong>',', ','</p>');
                            ?>
                        </p>
                       
                    
                    <div class="col-md-12">
                        <p>
                        <?php
                                    if (has_post_thumbnail()) {
                                        $thumbnail_url = get_the_post_thumbnail_url(null,"large");
                                        echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';

                                        the_post_thumbnail("medium_large", "class='img-fluid'");}
                                        echo "</a>";
                                    ?>
                        </p>
                        <?php
                        the_content();
                        //the_excerpt();
                        // if(is_single(  )){
                        //   the_content( );  
                        // }
                        // else{
                        //     the_excerpt();
                        // }

                        next_post_link();
                        echo '<br>';
                        previous_post_link();
                        ?>
                    </div>

                </div>
                <?php if(comments_open()):?>
                <div class="col-md-10 offset-md-1">
               
                 <?php comments_template( );?>
                
                </div>
                <?php endif;?>
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

            </div>
            <div class="col-md-4">
                <?php
                if(is_active_sidebar('sidebar-1')){
                    dynamic_sidebar('sidebar-1');
                }
                ?>
            </div>
        </div>

    </div>


    <?php get_footer( ); ?>
