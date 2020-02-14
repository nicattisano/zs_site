<?php
/*Template Name: Splash*/

get_header();

?>

   <div class="container">
       <div class="row">
          <div class="col-md-12">
              <img src="<?php echo get_template_directory_uri();?>/img/zoomershow-logo.png" class="splash-logo">
              <h1 class="text-center splash-heading">Canada's largest consumer show focused on helping adults 45+ live better</h1>
          </div>
       </div>
   </div>
    
    <section class="container-fluid secPad next-shows">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo site_url();?>/vancouver/attend" class="city">
                        <img src="<?php echo get_template_directory_uri();?>/img/skyline-vancouver.png" class="skyline skyline-vancouver">
                        <h2>Vancouver <span><br><?php echo get_field('vancouver_pretty_date');?></span></h2>
<!--                        <h3></h3>-->
                   
                   
<?php dynamic_sidebar('Hero Static'); ?>
<!--
                    <div class="countdown">
                        <div class="days">92<span>days</span></div>
                        <div class="hours">5<span>hours</span></div>
                        <div class="mins">43<span>mins</span></div>
                        <div class="secs">39<span>seconds</span></div>
                    </div>
-->
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo site_url();?>/toronto/attend" class="city">
                        <img src="<?php echo get_template_directory_uri();?>/img/skyline-toronto.png" class="skyline skyline-toronto">
                        <h2>Toronto <span><br><?php echo get_field('toronto_pretty_date');?></span></h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="container-fluid gallery noPad">
        <div class="carousel"
  data-flickity='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true }'>
  <img src="<?php echo get_template_directory_uri();?>/img/carousel-gallery/audience.jpg" alt="" />
  <img src="<?php echo get_template_directory_uri();?>/img/carousel-gallery/ball.jpg" alt="" />
  <img src="<?php echo get_template_directory_uri();?>/img/carousel-gallery/clap.jpg" alt="" />
  <img src="<?php echo get_template_directory_uri();?>/img/carousel-gallery/dancing.jpg" alt="" />
<!--  <img src="<?php echo get_template_directory_uri();?>/img/carousel-gallery/elvis.jpg" alt="" />-->
  <img src="<?php echo get_template_directory_uri();?>/img/carousel-gallery/performance3.jpg" alt="" />
</div>
</section>


<?php wp_footer(); ?>
