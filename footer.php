<div class="footer">
  <div class="container">
      <div class="row" id="FOO">
          <div class="col-md-6"   >
            <?php
            if(is_active_sidebar('footer-1')){
                dynamic_sidebar('footer-1');
            }
            ?>
          </div>
          <div class="col-md-6">
          <?php
            if(is_active_sidebar('footer-2')){
                dynamic_sidebar('footer-2');
            }
            ?>
          </div>
      </div>
  </div>
</div>

</body>
<?php wp_footer(); ?>
</html>
