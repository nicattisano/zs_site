<?php 
$sponsors_coming_soon = get_field('sponsors_coming_soon');
?>
          
    <section class="container-fluid sponsors secPad" id="sponsors">
      
      <?php if ($sponsors_coming_soon !== true ) { ?>
      
       <div class="row">
           <div class="col-md-12">
               <h1 class="text-center padBotMd"><?php echo get_field('sponsor_title');?></h1>
           </div>
       </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
<!--                  loop starts-->
                     <?php 

                    $parent_city = $template_args['city'];
                    $argsLevels = array(
                        'post_type' => 'sponsors',
                        'posts_per_page' => -1,
                    );
                    $args_levels_query = new WP_Query( $argsLevels );

                    ?>
                    <?php if ( $args_levels_query->have_posts() ) : ?>             
                    <?php while ( $args_levels_query->have_posts() ) : the_post(); ?>

                    <?php 
                    $args_levels_query->the_post();

                    $levels = get_field_object('sponsorship_level')['choices'];
                    ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php 

                    ?>
                    <?php endif; 
                    ?>

                    <?php
                    foreach ($levels as $level) {
                        hm_get_template_part( 'loop-templates/sponsorship-level', [ 'level' => $level, 'city' => $parent_city] );
                    }
                    ?>

                <?php the_post(); wp_reset_query(); ?>
    
                <div class="row padTopMd">
                    <div class="col-md-12">
                        <p class="text-center">Interested in becoming an exhibitor or sponsor? Email
                        <a href="mailto:<?php echo get_field('become_a_sponsor_email'); ?>" target="_blank" class="simpleLink underline">
                         <?php echo get_field('become_a_sponsor_email'); ?>
                        </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php } else { ?>
        
       <div class="row">
           <div class="col-md-12">
               <h1 class="text-center secPadBottom"><?php echo get_field('sponsor_title');?></h1>
               <h4 class="text-center">COMING SOON</h4>
           </div>
       </div>
       
        <?php } ?>
        
    </section>