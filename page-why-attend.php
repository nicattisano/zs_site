<?php
/*Template Name: Why Attend*/

get_header();
$parent_city = get_the_title($post->post_parent);
?>
   
<section id="whats-new">
    
    <section class="container-fluid secPadLg lightGreyBg">
        <div class="row secPadBottom">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Why Attend the <?php echo $parent_city;?> ZoomerShow</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">

            <?php 
                
                $args = array( 
                    'post_type' => 'post', 
                    'posts_per_page' => -1,
                    'meta_query'	=> array(
                        array(
                            'key'		=> 'city',
                            'value'		=> $parent_city,
                            'compare'	=> 'LIKE'
                        )
                    )
                );
                $city_reasons_query = new WP_Query( $args );

                ?>
				<?php if ( $city_reasons_query->have_posts() ) : ?>
                <?php $counter = 0; ?>                
                <?php while ( $city_reasons_query->have_posts() ) : the_post(); ?>
                
                <?php 
                $city_reasons_query->the_post();

               ?>
                
            <div class="col-md-4 margBotMd">
                <div class="whats-new-box">
                   <?php echo get_the_post_thumbnail( $aPost->ID, 'regular'); ?>
                    <h2><?php echo get_the_title( $aPost->ID ); ?></h2> 
                    <p class="text-center">
                        <?php 
                        echo str_replace("[...]Read More...","", strip_tags(get_the_excerpt( $aPost->ID )));
                        ?>
                    </p>
                </div>
            </div>
                
                <?php
                    $counter++;
                    if ($counter % 3 === 0) {
                    ?>
                        </div><div class="row">
                    <?php
                    }
                ?>

                <?php endwhile; ?>
				<?php else : ?>
				<?php 
//                get_template_part( 'loop-templates/content', 'none' );
                ?>
				<?php endif; ?>

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
                
                </div>
            </div>
        </div>
    </section> 
    

<?php get_footer(); ?>
