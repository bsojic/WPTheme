<section class="about-us container-fluid">
  <div class="container">
    <div class="row">
      <h2 class="section-heading headline-space">
        <?php the_field('about_title'); ?>
      </h2>
      <div class="col-sm about-part">
        <div class="about-icon">
        <?php the_field('profesional_icon'); ?>
        </div>
        <div class="about-desc">
          <h4>
          <?php the_field('profesional_title'); ?>
          </h4>
          <span><?php the_field('profesional_desc'); ?></span>
        </div>
      </div>
      <div class="col-sm about-part">
        <div class="about-icon">
        <?php the_field('trusted_icon'); ?>
        </div>
        <div class="about-desc">
          <h4>
          <?php the_field('trusted_title'); ?>
          </h4>
          <span><?php the_field('trusted_desc'); ?></span>
        </div>
      </div>
      <div class="col-sm about-part">
        <div class="about-icon">
        <?php the_field('equipment_icon'); ?>
        </div>
        <div class="about-desc">
          <h4>
          <?php the_field('equipment_title'); ?>
          </h4>
          <span><?php the_field('equipment_desc'); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>