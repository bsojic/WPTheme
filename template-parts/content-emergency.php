<section class="emergency container">
  <h2 class="section-heading headline-space">
  <?php the_field('emergency_title'); ?>
  </h2>
  <div class="row">
    <div class="col-12 col-sm-6">
      <div class="do-sect section-part">
        <?php the_field('do_icon'); ?>
        <p><?php the_field('do_subtitle'); ?></p>
        <?php 
          $arr = get_field('do_list'); 
          $str = explode (";", $arr); 
          echo '<ul class="do-list">'; 
          foreach($str as $s){ 
          echo '<li>'.$s.'</li>'; 
          } 
          echo '</ul>'; 
        ?>
      </div>
    </div>
    <div class="col-12 col-sm-6">
      <div class="dont-sec section-part">
        <?php the_field('dont_icon'); ?>
        <p><?php the_field('dont_subtitle'); ?></p>
        <?php 
          $arr = get_field('dont_list'); 
          $str = explode (";", $arr); 
          echo '<ul class="dont-list">'; 
          foreach($str as $s){ 
          echo '<li>'.$s.'</li>'; 
          } 
          echo '</ul>'; 
        ?>
      </div>
    </div>
  </div> 
</section>