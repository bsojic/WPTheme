<?php
/* 
  Template Name: Home Page
*/

?>
<!-- HEADER -->
<?php get_header(); ?>
<!-- SECTION SLIDE -->
<?php get_template_part( 'template-parts/content', 'slide' ); ?>
<!-- SECTION SERVICES -->
<?php get_template_part( 'template-parts/content', 'service' ); ?>
<!-- SECTION ABOUT US -->
<?php get_template_part( 'template-parts/content', 'about' ); ?>
<!-- SECTION EMERGENCY -->
<?php get_template_part( 'template-parts/content', 'emergency' ); ?>
<!--SECTION INFO-->
<?php get_template_part( 'template-parts/content', 'info' ); ?>
<!--SECTION PARTNER-->  
<?php get_template_part( 'template-parts/content', 'partners' ); ?>
<!-- FOOTER -->
<?php get_footer(); ?> 
