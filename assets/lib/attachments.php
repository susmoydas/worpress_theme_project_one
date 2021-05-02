<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function my_attachments($attachments){
    $fields         = array(
        array(
          'name'      => 'title',                             // unique field name
          'type'      => 'text',                              // registered field type
          'label'     => __( 'Title', 'wordpress_two' ),        // label to display
          'default'   => 'title',                             // default value upon selection
        );
        
        $args = array(

            
            'label'         => 'My Attachments',
        
            
            'post_type'     => array( 'post' ),
        
            // meta box position (string) (normal, side or advanced)
        
            // allowed file type(s) (array) (image|video|text|audio|application)
            'filetype'      => array('image'),  // no filetype limit
        
            // include a note within the meta box (string)
            'note'          => 'Attach files here!',
        
            // by default new Attachments will be appended to the list
        
            // text for 'Attach' button in meta box (string)
            'button_text'   => __( 'Attach Files', 'wordpress_two' ),
        
            // text for modal 'Attach' button (string)
            
        
        
            // fields array
            'fields'        => $fields,
        
          );
        
          $attachments->register( 'slider', $args ); // unique instance name
        }

}

add_action( 'attachments_register', 'my_attachments' );
?>