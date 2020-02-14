<?php 

$argsName= 'args'.$template_args['eventday'];
$argsName = array(
    'post_type' => 'schedule', 
    'posts_per_page' => -1,
    'meta_query'	=> array(
        array(
            'key'		=> 'city',
            'value'		=> $template_args['city'],
            'compare'	=> 'LIKE'
        ),
        array(
            'key'		=> 'day_of_event',
            'value'		=> $template_args['eventday'],
            'compare'	=> 'LIKE'
        ),
        array(
            'key'		=> 'stage',
            'value'		=> $template_args['stage'],
            'compare'	=> 'LIKE'
        )
    )
);

$queryName = 'schedule_day' .$template_args['eventday'].'_query';
$queryName = new WP_Query( $argsName );

?>
<?php if ( $queryName->have_posts() ) : ?>             
<?php while ( $queryName->have_posts() ) : the_post(); ?>

<?php 
$queryName->the_post();

?>

    <div class="col-md-9">
        <div class="entertainmentInfo">
            <h4 class="medium"><?php echo get_field('time_range');?></h4>
            <h3><?php echo the_title();?></h3>
            <h5><i class="fa fa-map-marker-alt"></i>&nbsp;<?php echo get_field('stage');?></h5>
        </div>
    </div> 

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>
<?php else : ?>
<?php 
//                get_template_part( 'loop-templates/content', 'none' );
?>
<?php endif; ?>