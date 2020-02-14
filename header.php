<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">



<?php 
$pageTemp = basename( get_page_template() );

$parent_city = get_the_title($post->post_parent);
$parent_city = strtolower($parent_city);

if($parent_city !== 'vancouver' && $parent_city !== 'toronto') {
    $cityArray = get_field('city');
    if ($cityArray) {
        $parent_city = $cityArray[0];
        $parent_city = strtolower($parent_city);
    }
}

$prettyDateField = $parent_city . "_pretty_date";
$prettyDate = get_field($prettyDateField, 2);

$prettyLocField = $parent_city . "_pretty_location";
$prettyLoc = get_field($prettyLocField, 2);

$pageTitle = get_the_title();


       //othercity                     
$pageID = $post->ID;

$otherCity = '';
$otherCityPath = '';
if ($parent_city == 'toronto') {
    $otherCity = 'Vancouver';
    $otherCityPath = strtolower($otherCity);
}else if ($parent_city == 'vancouver') {
    $otherCity = 'Toronto';
    $otherCityPath = strtolower($otherCity);
}

$display = 'hiddenMenu';
if ($pageID !== 2) {
    $display = '';
}


    $title = get_the_title();
    if ($title !== "Home") {
                            
?>

   <div class="container-fluid topNav">
       <div class="row">
          <div class="col-md-4">
              <a href="<?php echo site_url();?>" class="logo-url">
                  <img src="<?php echo get_template_directory_uri()?>/img/zoomershow-logo.png" class="logo">
              </a>
          </div>
           <div class="col-md-8">
               <ul class="topNavUl">
                   <li><a href="<?php echo site_url();?>">Home</a></li>
                   <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/about">About</a></li>
                   <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/contact">Contact</a></li>
                   <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/volunteer">Volunteer</a></li>
                   <li><a href="http://www.zoomermedia.ca/" target="_blank">Zoomer Media</a></li>
                   <li><a href="http://www.carp.ca/" target="_blank">Carp</a></li>
                   <li class="switchCity"><a href='<?php echo site_url();?>/<?php echo $otherCityPath;?>/attend'><?php echo $otherCity; ?></a></li>
               </ul>
           </div>
       </div>
   </div>
   
    <nav class="mainNav container-fluid">
        <div class="row">
<!--
        <div class="logoSide ">
        </div>
-->
        <div class="navSide offset-md-4 col-md-8 noPadRight">
            <ul>
                <li><a href="https://www.eventbrite.ca/e/zoomershow-toronto-2018-tickets-46420175996" target="_blank">Tickets</a>
                <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/attend" class="attendNav">Attend</a>
                   <?php if ($pageTitle === "Attend") { ?>
                    <ul>
                        <li><a href="#whats-new" class="scroll">Why Attend</a></li>
                        <li><a href="#schedule" class="scroll">Schedule</a></li>
                        <li><a href="#exhibitor-zones" class="scroll">Exhibitor Zones</a></li>
                        <li><a href="#floorplan" class="scroll">Floorplan</a></li>
                        <li><a href="#location" class="scroll">Location</a></li>
                        <li><a href="#faq" class="scroll">FAQ</a></li>
                        <li><a href="#sponsors" class="scroll">Sponsors</a></li>
                    </ul>
                    <?php } ?>
                </li>
                <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/exhibit" class="exhibitNav">Exhibit</a>
                   <?php if ($pageTitle === "Exhibit") { ?>
                    <ul>
                       <li><a href="#current-exhibitors" class="scroll">Current Exhibitors</a></li>
                        <li><a href="#floorplan" class="scroll">Floor Plan</a></li>
                        <li><a href="#tips-for-success" class="scroll">Tips for Success</a></li>
                        <li><a href="#rules-and-regulations" class="scroll">Rules/Regulations</a></li>
                        <li><a href="#faq" class="scroll">FAQ</a></li>
                        <li><a href="#location" class="scroll">Location</a></li>
<!--                        <li><a href="#">Register</a></li>-->
                        <li><a href="#exhibitor-forms" class="scroll">Exhibitor Forms</a></li>
                    </ul>
                    <?php } ?>
                </li>
                <li class="dateTimeNav greyBgOverwrite"><a href="#">
                <?php echo $prettyDate; ?>
                <br><span><?php echo $prettyLoc; ?></span></a></li>
            </ul>
        </div>
        </div>
    </nav>
    
    
    
    <?php if ($pageTemp !== 'page.php') {?>
    
    <nav class="isScrolled container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo get_template_directory_uri()?>/img/zoomershow-logo-white.png">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <div class="navIsScrolledWrap">
                        <ul>
                            <li><a href="https://www.eventbrite.ca/e/zoomershow-toronto-2018-tickets-46420175996" target="_blank">Tickets</a>
                            <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/attend" class="scrolledAttend">Attend</a>
                                <ul class="scrolledsubNav scrolledAttendSubnav">
                                    <li><a href="#whats-new" class="scroll">Why Attend</a></li>
                                    <li><a href="#schedule" class="scroll">Schedule</a></li>
                                    <li><a href="#exhibitor-zones" class="scroll">Exhibitor Zones</a></li>
                                    <li><a href="#floorplan" class="scroll">Floorplan</a></li>
                                    <li><a href="#location" class="scroll">Location</a></li>
                                    <li><a href="#faq" class="scroll">FAQ</a></li>
                                    <li><a href="#sponsors" class="scroll">Sponsors</a></li>
                                    

                                </ul>
                            </li>
                            <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/exhibit" class="scrolledExhibit">Exhibit</a>
                                <ul class="scrolledsubNav scrolledExhibitSubnav">
                                   <li><a href="#current-exhibitors" class="scroll">Current Exhibitors</a></li>
                                    <li><a href="#floorplan" class="scroll">Floorplan</a></li>
                                    <li><a href="#tips-for-success" class="scroll">Tips for Success</a></li>
                                    <li><a href="#rules-and-regulations" class="scroll">Rules/Regulations</a></li>
                                    <li><a href="#faq" class="scroll">FAQ</a></li>
                                    <li><a href="#location" class="scroll">Location</a></li>
<!--                                    <li><a href="#">Register</a></li>-->
                                    <li><a href="#exhibitor-forms" class="scroll">Exhibitor Forms</a></li>
                                </ul>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
	
<?php

}
}
?>




<div class="mobile-menu <?php echo $display; ?>"> 
    <div class="mobile-menu-top-row">
        <div class="mobile-logo-wrap">
            <?php echo ucfirst($parent_city); ?> Zoomer Show
        </div>
        <a href="#" id="mobile-hamburger">
            <i class="fas fa-bars"></i>
        </a>
    </div>
   <ul id="mobile-menu-ul">
      <li><a href='<?php echo site_url();?>/<?php echo $parent_city; ?>/attend'>Attend</a>
        <?php /*if ($pageTitle === "Attend") {*/ ?>
<!--
         <ul>
            <li><a href="#whats-new" class="scroll">Why Attend</a></li>
            <li><a href="#schedule" class="scroll">Schedule</a></li>
            <li><a href="#exhibitor-zones" class="scroll">Exhibitor Zones</a></li>
            <li><a href="#floorplan" class="scroll">Floorplan</a></li>
            <li><a href="#location" class="scroll">Location</a></li>
            <li><a href="#faq" class="scroll">FAQ</a></li>
            <li><a href="#sponsors" class="scroll">Sponsors</a></li>
         </ul>
-->
         <?php /*} */?>
      </li>
      <li><a href='<?php echo site_url();?>/<?php echo $parent_city; ?>/exhibit'>Exhibit</a>
        <?php /* if ($pageTitle === "Exhibit") { */?>
<!--
         <ul>
            <li><a href="#current-exhibitors" class="scroll">Current Exhibitors</a></li>
            <li><a href="#floorplan" class="scroll">Floorplan</a></li>
            <li><a href="#tips-for-success" class="scroll">Tips for Success</a></li>
            <li><a href="#rules-and-regulations" class="scroll">Rules/Regulations</a></li>
            <li><a href="#faq" class="scroll">FAQ</a></li>
            <li><a href="#location" class="scroll">Location</a></li>
                                                <li><a href="#">Register</a></li>
            <li><a href="#exhibitor-forms" class="scroll">Exhibitor Forms</a></li>
         </ul>
-->
         <?php /* } */?>
      </li>
       <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/about">About</a></li>
       <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/contact">Contact</a></li>
       <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/volunteer">Volunteer</a></li>
       <li><a href="http://www.zoomermedia.ca/" target="_blank">Zoomer Media</a></li>
       <li><a href="http://www.carp.ca/" target="_blank">Carp</a></li>
       <li class="switchCity"><a href='<?php echo site_url();?>'>Switch to <?php echo $otherCity; ?></a></li>
   </ul>
</div>




<?php $pageIDforAlert = get_the_ID(); ?>

<?php if (get_field('alert_is_active', $pageIDforAlert) !== false) { ?>
    <div class="alert_wrap alertHidden">
        <div class="alert_lip">
            <div class="alert_lip_inner">
               <?php echo get_field('alert_title');?>
               <a href="#" id="alertToggleControl">
                   <div id="state" class="sleeping"><i class="fas fa-caret-up"></i></div>
               </a>
            </div> 
       </div>
        <div class="alert_body">
            <?php echo get_field('alert');?>
        </div>
    </div>
<?php }

