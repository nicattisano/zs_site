<?php
    $argsExHealth = array(
        'post_type' => 'exhibitors', 
        'posts_per_page' => -1,
        'meta_query'	=> array(
            array(
                'key'		=> 'city',
                'value'		=> $template_args['city'],
                'compare'	=> 'LIKE'
            ),
            array(
                'key'		=> 'exhibitor_zone',
                'value'		=> $template_args['zone'],
                'compare'	=> 'LIKE'
            )
        )
    );
    $args_ex_health_query = new WP_Query( $argsExHealth );
    
    ?>
    <?php if ( $args_ex_health_query->have_posts() ) : ?>    
    <div class="card-header collapsed" data-toggle="collapse" href="#collapse<?php echo $template_args['index']; ?>">
        <a class="card-title">
           <?php
            echo $template_args['zone'];
            ?>
        </a>
    </div>
    <div id="collapse<?php echo $template_args['index']; ?>" class="card-body collapse" data-parent="#accordion">
    <ul>
    <?php while ( $args_ex_health_query->have_posts() ) : the_post(); ?>
    
    <?php 
    $args_ex_health_query->the_post();

    $website_field = get_field('exhibitor_website');
    $exhibitor = get_the_title();
    $booth_number_field = get_field('booth_number');

    if ($website_field !== false && $website_field !== null && $website_field !== "" && $website_field !== " ") {
        $exhibitor = "<a href='".$website_field."' target='_blank'>".get_the_title()."</a>";
    }

    $booth = '';
    if ($booth_number_field !== false && $booth_number_field !== null && $booth_number_field !== "" && $booth_number_field !== " ") {
        $booth = ', ' . $booth_number_field;
    }

   ?>
        <li>
            <?php echo $exhibitor . $booth; ?>
        </li>
    

    <?php endwhile; ?>
    </ul>
    </div><!--end Health & Vitality-->
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <?php 
//                get_template_part( 'loop-templates/content', 'none' );
    ?>
    <?php endif;
    
    ?>

