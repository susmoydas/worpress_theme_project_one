
<h1>
    <?php single_tag_title(  );?>
</h1>
<?php
 while(have_posts()){
     the_post()
     ?>
  <h2><a href="<?php the_permalink( );?>">
      <?php
        the_title(  );      
      ?></a>
  </h2>
     <?php
 }
?>