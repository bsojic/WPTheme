<section class="services">
  <div class="container">
    <div class="row">
      <h2 class="section-heading">
      <?php the_field('services_title'); ?>
      </h2>
      <p class="section-desc">
        <?php the_field('services_subtitle'); ?>
      </p>
      <div class="col-sm">
        <div class="srvc-post">
          <?php 
            $image = get_field('water_image');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" class="srvc-image" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <h4 class="srvc-headline"><?php the_field('water_title'); ?></h4>
          <p><?php the_field('water_desc'); ?></p>
          <a href="" class="btn-blue"><?php the_field('water_button'); ?></a>
        </div>
      </div>
      <div class="col-sm">
        <div class="srvc-post">
          <?php 
            $image = get_field('storm_image');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" class="srvc-image" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <h4 class="srvc-headline"><?php the_field('storm_title'); ?></h4>
          <p><?php the_field('storm_desc'); ?></p>
          <a href="" class="btn-blue"><?php the_field('storm_button'); ?></a>
        </div>
      </div>
      <div class="col-sm">
        <div class="srvc-post">
          <?php 
            $image = get_field('mold_image');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" class="srvc-image" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <h4 class="srvc-headline"><?php the_field('mold_title'); ?></h4>
          <p><?php the_field('mold_desc'); ?></p>
          <a href="" class="btn-blue"><?php the_field('mold_button'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>