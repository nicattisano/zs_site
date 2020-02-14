<?php 

$parent_city = $template_args['city'];
if ($parent_city == "Toronto") {
    $parent_id = 13;
} else if ($parent_city == "Vancouver") {
    $parent_id = 11;
}


    $locationBgField = get_field('location_background_image', $parent_id);
    $locationBg = '';
    if ($locationBgField !== false && $locationBgField !== 'null') {
        $locationBg = $locationBgField['url'];
    }
?>
   
    <section class="container-fluid location secPad" id="location" style="background: url(<?php echo $locationBg; ?>) center; background-size: cover;">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
            <h1 class="text-center white margBotMd">Location</h1>
            <h3 class="text-center"><?php echo get_field('location_title', $parent_id);?></h3>
            <p class="text-center white"><?php echo get_field('location_address', $parent_id);?></p>
           
           <?php echo get_field('location_map_code', $parent_id);?>
<!--            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=enercare%20center&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a></div><style>.mapouter{text-align:right;height:400px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:600px;}</style></div>-->

            </div>
        </div>
    </section>