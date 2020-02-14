<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <div class="row">
                                <div class="col-md-4">
               <h2>Get Involved</h2>
               <div class="full">
                   <div class="sep"></div>
               </div>
                <ul>
                  <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/about">About</a></li>
                   <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/contact">Contact</a></li>
                   <li><a href="<?php echo site_url();?>/<?php echo $parent_city; ?>/volunteer">Volunteer</a></li>
                </ul>
            </div>
            
            <div class="col-md-4">
               <h2>Zoomer Media</h2>
               <div class="full">
                   <div class="sep"></div>
               </div>
                <ul>
                    <li><a href="http://www.zoomermedia.ca/" target="_blank">Zoomer Media</a></li>
                   <li><a href="http://www.carp.ca/" target="_blank">Carp</a></li>
                </ul>
            </div>
            
            <div class="col-md-4">
               <h2>Follow</h2>
               <div class="full">
                   <div class="sep"></div>
               </div>
                <ul>
                    <li><a href="https://www.facebook.com/zoomershow/" target="_blank">Facebook</a></li>
                   <li><a href="https://www.youtube.com/user/Zoomermedia" target="_blank">Youtube</a></li>
                </ul>
            </div>

                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

