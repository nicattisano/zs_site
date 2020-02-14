<?php 
    $cityBgField = get_field('hero_background_image');
    $cityBg = '';
    if ($cityBgField !== false && $cityBgField !== 'null') {
        $cityBg = $cityBgField['url'];
    }

$parent_city = $template_args['city'];
$parent_city = strtolower($parent_city);

$ticketLinkField = $parent_city . "_ticket_cta_link";
$ticketLink = get_field($ticketLinkField, 2);
?>

<section class="attendBanner container-fluid secPadHero" id="tickets" style="background: url(<?php echo $cityBg;?>) center; background-size: cover;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1><?php echo get_field('hero_title');?></h1>
            <a href="<?php echo $ticketLink;?>" target="_blank" class="getTicketsBtn bold bigger"><?php echo get_field('ticket_cta_text');?></a>
            <p class="text-center"><span class="bold lightLink"><?php echo get_field('carp_member_heading');?></span><br><?php echo get_field('carp_member_sub_heading');?></p>
        </div>
    </div>
</section>