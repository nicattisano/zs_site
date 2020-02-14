<?php
/*Template Name: Exhibit*/

get_header();
$parent_city = get_the_title($post->post_parent);
?>
    
<?php hm_get_template_part( 'loop-templates/exhibit-hero', [ 'city' => $parent_city ]); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-why'); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-exhibitor-zones', [ 'city' => $parent_city ] ); ?>
<?php the_post(); wp_reset_query(); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-floorplan'); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-tips'); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-rules'); ?>
<?php the_post(); wp_reset_query(); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-faq'); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-location', [ 'city' => $parent_city ] ); ?>
<?php hm_get_template_part( 'loop-templates/exhibit-exhibitor-forms' ); ?>
    
    

<?php get_footer(); ?>
