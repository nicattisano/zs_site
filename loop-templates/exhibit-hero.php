<?php

$heroBg = get_field('hero_background_image');

if ($heroBg !== false && $heroBg !== null) {
    $heroBg = $heroBg['url'];
} else {
    $heroBg = '';
}
$parent_city = $template_args['city'];
$parent_city = strtolower($parent_city);
?>
   
<section class="attendBanner container-fluid secPadLg" id="register" style="background: url(<?php echo $heroBg; ?>) center; background-size: cover;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1><?php echo get_field('hero_text');?></h1>
            <a href="<?php echo site_url();?>/<?php echo $parent_city;?>/<?php echo get_field('cta_link');?>" class="getTicketsBtn bold bigger"><?php echo get_field('cta_text');?></a>
            <p></p>
        </div>
    </div>
</section>
   
