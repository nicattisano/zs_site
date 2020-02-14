<?php
$argsSponsors = array(
    'post_type' => 'sponsors',
    'posts_per_page' => -1,
    'meta_query'	=> array (
        array(
            'key'		=> 'city',
            'value'		=> $template_args['city'],
            'compare'	=> 'LIKE'
        ),
        array(
            'key'		=> 'sponsorship_level',
            'value'		=> $template_args['level'],
            'compare'	=> 'LIKE'
        )
    )
);
$args_sponsors_query = new WP_Query( $argsSponsors );

?>
<?php if ( $args_sponsors_query->have_posts() ) : ?> 
<div class="row">
<div class="col-md-12">
   <h3 class="text-center padTopMd">
        <?php echo $template_args['level'];?>
   </h3>
</div>
</div>

<div class="d-flex justify-content-center bd-highlight mb-3 d-flex flex-wrap">         
<?php while ( $args_sponsors_query->have_posts() ) : the_post(); ?>

<?php 
$args_sponsors_query->the_post();

$largerField = get_field('larger');
$larger = '';
if ($largerField == true) {
    $larger = 'largerLogo';
}
$smallerField = get_field('smaller');
$smaller = '';
if ($smallerField == true) {
    $smaller = 'smallerLogo';
}


$website = get_field('website');
$output = "<div class='align-self-center p-2 bd-highlight sponsorImgLinkWrap ".$larger . ' ' . $smaller."'><img src='".get_the_post_thumbnail_url()."' class='max-full'></div>";

if($website !== null && $website !== false && $website !== " " && $website !== "") {
$output = "<a href='".$website."' target='_blank' class='align-self-center p-2 bd-highlight sponsorImgLinkWrap ".$larger . ' ' . $smaller."'><img src='".get_the_post_thumbnail_url()."' class='max-full'></a>";
}
?> 

<?php echo $output; ?>


<?php endwhile; ?>
 </div>  
<?php else : ?>

<?php endif; 