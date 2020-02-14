<?php $current_exhibitors_coming_soon = get_field('current_exhibitors_coming_soon');?>
     
<section class="exhibitors containers secPad" id="current-exhibitors">
     
     <?php if ($current_exhibitors_coming_soon  !== true) { ?>
     
      <div class="row secPadBottom">
          <div class="col-md-12">
             <?php $exhibitors_title = get_field('exhibitors_title ');
              
              if ($exhibitors_title !== "" && $exhibitors_title !== " " && $exhibitors_title !== false && $exhibitors_title !== null) {
                $exhibitors_title = $exhibitors_title;
              } else {
                $exhibitors_title = "Current Exhibitors";
              }
              ?>
              <h1 class="text-center"><?php echo $exhibitors_title; ?></h1>
          </div>
      </div>
       <div class="row">
           <div class="col-md-6 offset-md-3">
                <div id="accordion" class="accordion">
                    <div class="card mb-0">
                        <?php
                        $parent_city = $template_args['city'];
                        $argsZones = array(
                            'post_type' => 'exhibitors', 
                            'posts_per_page' => -1,
                            'meta_query'	=> array(
                                array(
                                    'key'		=> 'city',
                                    'value'		=> $parent_city,
                                    'compare'	=> 'LIKE'
                                )
                            )
                        );
                        $args_zones_query = new WP_Query( $argsZones );

                        ?>
                        <?php if ( $args_zones_query->have_posts() ) : ?>             
                        <?php while ( $args_zones_query->have_posts() ) : the_post(); ?>

                        <?php 
                        $args_zones_query->the_post();

                        $zones = get_field_object('exhibitor_zone')['choices'];

                        ?>
                        <?php endwhile; ?>
                        <?php else : ?>
                        <?php 

                        ?>
                        <?php endif; 
                        ?>

                        <?php
                    //                        $zones = array("Health & Wellness", "Lifestyle", "Travel", "Money", "Fun & Entertainment", "British Zone", "Cannabis Education", "Alcohol Sampling");

                        $index = 0;
                        foreach ($zones as $zone) {
                            hm_get_template_part( 'loop-templates/zone', [ 'zone' => $zone, 'city' => $parent_city, 'index' => $index] );
                            $index++;
                        }
                        ?>
                    </div>
                </div>
           </div>
       </div>
       
       <?php } else { ?>
       
      <div class="row secPadBottom">
          <div class="col-md-12">
              <h1 class="text-center secPadBottom">Current Exhibitors</h1>
              <h4 class="text-center">COMING SOON</h4>
          </div>
      </div>
       
       <?php } ?>
       
   </section>