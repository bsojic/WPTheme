<section class="container-fluid info">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="left-side">
        <?php the_field('warnning_icon'); ?>
          <p><?php the_field('warnning_txt'); ?></p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="right-side">
          <a href="tel:1-800-123-4567" class="phone"><?php the_field('phone_icon'); ?><?php the_field('info_number'); ?></a>
          <a href="#" class="btn-blue request-btn"><?php the_field('request_button_txt'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>