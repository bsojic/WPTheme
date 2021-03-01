<section class="container-fluid">
  <div class="row">
      <!-- SLIDER --> 
    <div class="slide">
      <ul>
        <?php $image = get_field('first_image'); ?>
        <li style="background-image:url('<?php echo $image['url']; ?>');">
          <div class="slider">
            <div class="slider-info">
              <p><?php the_field('header_top_desc'); ?></p>
              <h1><?php the_field('header_title'); ?></h1>
              <span><?php the_field('header_bottom_desc'); ?></span>
              <a href="#" class="btn-blue"><?php the_field('header_button_text'); ?></a>
            </div> 
            <div class="contact-us">
              <a href="#" class="btn-blue btn-contact"><?php the_field('button_contact_text'); ?></a>
              <i class="far fa-comments"></i>
            </div>
            <div class="contact-box">
              <?php echo do_shortcode('[contact-form-7 id="139" title="Contact Form"]'); ?>
            </div>
          </div>
        </li>
        <?php $image_second = get_field('second_image'); ?>
        <li style="background-image:url('<?php echo $image_second['url']; ?>');">
          <div class="slider">
            <div class="slider-info">
              <p><?php the_field('header_top_desc'); ?></p>
              <h1><?php the_field('header_title'); ?></h1>
              <span><?php the_field('header_bottom_desc'); ?></span>
              <a href="#" class="btn-blue"><?php the_field('header_button_text'); ?></a>
            </div> 
            <div class="contact-us">
              <a href="#" class="btn-blue btn-contact"><?php the_field('button_contact_text'); ?></a>
              <i class="far fa-comments"></i>
            </div>
            <div class="contact-box">
              <?php echo do_shortcode('[contact-form-7 id="139" title="Contact Form"]'); ?>
            </div>
          </div>
        </li>
      </ul>
    </div>        
    <!-- END SLIDER -->
    <div class="emergency-form">
      <div class="container">
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="138" title="Emergency"]'); ?>
        </div>
      </div>
    </div> 
  </div>        
</section>