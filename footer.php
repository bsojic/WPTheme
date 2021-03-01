<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package waterdamage
 */

?>

<?php wp_footer(); ?>
<!-- FOOTER -->
<footer class="container-fluid">
	<div class="container last-section">
		<div class="row">
			<div class="col-sm-4">
				<div class="icon">
					<?php 
						$image = get_field('about_logo');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" class="about-logo" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="text">
					<h5><?php the_field('footer_about_title'); ?></h5>
					<p><?php the_field('footer_about_desc'); ?></p>
				</div>		
			</div>

			<div class="col-sm-4">
				<div class="icon">
					<?php the_field('footer_services_icon'); ?>
				</div>
				<div class="text">
					<h5><?php the_field('footer_services_title'); ?></h5>
					<a href="#" class="serv-links"><?php the_field('footer_services_water'); ?></a>
					<a href="#" class="serv-links"><?php the_field('footer_services_damage'); ?></a>
					<a href="#" class="serv-links"><?php the_field('footer_services_mold'); ?></a>
				</div>		
			</div>

			<div class="col-sm-4">
				<div class="icon">
					<?php the_field('footer_emergency_icon'); ?>
				</div>
				<div class="text">
					<h5><?php the_field('footer_emergency_title'); ?></h5>
					<a href="tel:<?php the_field('info_number'); ?>" class="call"><?php the_field('phone_icon'); ?> <?php the_field('info_number'); ?></a>
					<a href="#" class="btn-blue request-btn"><?php the_field('request_button_txt'); ?></a>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-sm-12">
				<?php 

					if( is_active_sidebar( 'sidebar-1' ) ) {
						dynamic_sidebar( 'sidebar-1' );
					}

					?>
			</div>
		</div>
	</div>	
</footer>

</body>
</html> 
