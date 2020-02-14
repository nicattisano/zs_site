<?php 

$parent_city = $parent_city = $template_args['city'];

if (get_field('vancouver_day_1', 2) !== false) {
    $vancouverDay1 = get_field('vancouver_day_1', 2);
} else {
    $vancouverDay1 = '';
}
if (get_field('vancouver_day_2', 2) !== false) {
    $vancouverDay2 = get_field('vancouver_day_2', 2);
} else {
    $vancouverDay2 = '';
}
if (get_field('toronto_day_1', 2) !== false) {
    $torontoDay1 = get_field('toronto_day_1', 2);
} else {
    $torontoDay1 = '';
}
if (get_field('toronto_day_2', 2) !== false) {
    $torontoDay2 = get_field('toronto_day_2', 2);
} else {
    $torontoDay2 = '';
}

$schedule_coming_soon = get_field('schedule_coming_soon');
?>

<section id="schedule">
<?php if ($schedule_coming_soon !== true) {?> 
    <div class="container-fluid secPad schedule">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Schedule</h1>
                <p class="footnote text-center"><a href="#" class="simpleLink"><i class="fas fa-download"></i> Download</a></p>
            </div>
        </div>
    </div>


<div class="container entertainmentRow secPadBottom">
    <div class="row">
        <div class="col-md-12">
            <div class="scheduleTabs">

              <input id="tab1" type="radio" name="tabs" checked>
              <label for="tab1">Main Stage</label>

              <input id="tab2" type="radio" name="tabs">
              <label for="tab2">Cannabis Education Theatre</label>

              <input id="tab3" type="radio" name="tabs">
              <label for="tab3">Lifestyle and Travel Theatre</label>

              <input id="tab4" type="radio" name="tabs">
              <label for="tab4">Active Zone</label>

              <input id="tab5" type="radio" name="tabs">
              <label for="tab5">Zen &amp; Treatment Zone</label>

              <section id="content1">
                <div class="row schedule-inner">
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day1', [ 'city' => $parent_city, 'vanday1' => $vancouverDay1, 'today1' => $torontoDay1 ]); ?>
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'One', 'stage' => 'Main Stage' ]); ?>       
                   
                    </div>
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day2', [ 'city' => $parent_city, 'vanday2' => $vancouverDay2, 'today2' => $torontoDay2 ]); ?>
                   
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'Two', 'stage' => 'Main Stage' ]); ?>
                    </div>
                </div>
              </section>

              <section id="content2">
                <div class="row schedule-inner">
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day1', [ 'city' => $parent_city, 'vanday1' => $vancouverDay1, 'today1' => $torontoDay1 ]); ?>
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'One', 'stage' => 'Cannabis Education Theatre' ]); ?>       
                   
                    </div>
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day2', [ 'city' => $parent_city, 'vanday2' => $vancouverDay2, 'today2' => $torontoDay2 ]); ?>
                   
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'Two', 'stage' => 'Cannabis Education Theatre' ]); ?>
                    </div>
                </div>
              </section>

              <section id="content3">
                <div class="row schedule-inner">
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day1', [ 'city' => $parent_city, 'vanday1' => $vancouverDay1, 'today1' => $torontoDay1 ]); ?>
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'One', 'stage' => 'Lifestyle and Travel Theatre' ]); ?>       
                   
                    </div>
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day2', [ 'city' => $parent_city, 'vanday2' => $vancouverDay2, 'today2' => $torontoDay2 ]); ?>
                   
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'Two', 'stage' => 'Lifestyle and Travel Theatre' ]); ?>
                    </div>
                </div>
              </section>

              <section id="content4">
                <div class="row schedule-inner">
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day1', [ 'city' => $parent_city, 'vanday1' => $vancouverDay1, 'today1' => $torontoDay1 ]); ?>
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'One', 'stage' => 'Active Zone' ]); ?>       
                   
                    </div>
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day2', [ 'city' => $parent_city, 'vanday2' => $vancouverDay2, 'today2' => $torontoDay2 ]); ?>
                   
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'Two', 'stage' => 'Active Zone' ]); ?>
                    </div>
                </div>
              </section>


              <section id="content5">
                <div class="row schedule-inner">
                    <div class="col-md-12">
                       <p style="padding: 0 15px;"><!-- zen subheading goes here--></p>
                   </div>
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day1', [ 'city' => $parent_city, 'vanday1' => $vancouverDay1, 'today1' => $torontoDay1 ]); ?>
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'One', 'stage' => 'Zen/Treatment Zone' ]); ?>       
                   
                    </div>
                    <div class="col-md-6">
<?php hm_get_template_part( 'loop-templates/schedule-day2', [ 'city' => $parent_city, 'vanday2' => $vancouverDay2, 'today2' => $torontoDay2 ]); ?>
                   
<?php hm_get_template_part( 'loop-templates/schedule-query', [ 'city' => $parent_city, 'eventday' => 'Two', 'stage' => 'Zen/Treatment Zone' ]); ?>
                    </div>
                </div>
              </section>

            </div>
    </div>
    </div>
</div>



<?php } else { ?>
        <div class="container-fluid secPad schedule">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="secPadBottom">Schedule</h1>
                <h4 class="text-center">COMING SOON</h4>
            </div>
        </div>
    </div>

<?php } ?>

</section>








