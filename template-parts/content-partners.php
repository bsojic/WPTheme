<section class="partners">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="logo-holder">
        <?php 
          $image = get_field('iicrc_partner');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="logo-holder">
        <?php 
          $image = get_field('bbb_partner');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="logo-holder">
          <?php 
            $image = get_field('eaa_partner');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>   
      </div>
      <div class="col-sm-3">
        <div class="logo-holder">
          <?php 
            $image = get_field('icra_partner');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>