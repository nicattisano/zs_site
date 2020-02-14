<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();

?>

<section class="container secPad">
   <div class="row">
       <div class="col-md-10 offset-md-1">
           <p><a href="">Back to <?php echo $parent_city; ?></a></p>
       </div>
   </div>
    <div class="row">
        <div class="col-md-8 offset-md-1">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>
        </div>
    </div>
</section>
            



<?php get_footer(); ?>
