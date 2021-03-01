<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package waterdamage
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- HEADER -->
  <header class="container-fluid">
    <div class="row">
      <div class="info-head">
        <div class="container">
				<?php the_field('phone_icon'); ?>
          <span><?php the_field('info_txt'); ?></span><a href="tel:<?php the_field('info_number'); ?>" class="phone"><?php the_field('info_number'); ?></a>
        </div>
      </div>
      <!-- NAV -->
      <div class="nav">
        <div class="container">
          <div class="row">
            <div class="logo">
              <?php the_custom_logo(); ?>
            </div>
            <?php 
            
            wp_nav_menu( [
              'theme_location'	=> 'primary',
              'container'				=> 'div',
              'container_class' => 'nav-bar'
            ] );
            
            ?>
          </div>
        </div>
      </div><!-- END NAV -->
    </div>
  </header>
			
