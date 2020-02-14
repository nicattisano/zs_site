<?php
/*Template Name: Attend*/

get_header();
$parent_city = get_the_title($post->post_parent);

?>
    
<?php hm_get_template_part( 'loop-templates/attend-hero', [ 'city' => $parent_city ] ); ?>
<?php hm_get_template_part( 'loop-templates/why-attend', [ 'city' => $parent_city ] ); ?>
<?php /*hm_get_template_part( 'loop-templates/attend-video', [ 'city' => $parent_city ] ); */?>
<?php hm_get_template_part( 'loop-templates/attend-schedule', [ 'city' => $parent_city ] ); ?>
<?php hm_get_template_part( 'loop-templates/attend-exhibitor-zones', [ 'city' => $parent_city ] ); ?>
<?php the_post(); wp_reset_query(); ?>
<?php hm_get_template_part( 'loop-templates/attend-floorplan', [ 'city' => $parent_city ]); ?>
<?php hm_get_template_part( 'loop-templates/attend-location', [ 'city' => $parent_city ] ); ?>
<?php hm_get_template_part( 'loop-templates/attend-faq', [ 'city' => $parent_city ] ); ?>
<?php hm_get_template_part( 'loop-templates/attend-sponsors', [ 'city' => $parent_city ]); ?>



    
   

<?php get_footer(); ?>
