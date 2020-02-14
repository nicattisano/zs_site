 <?php $floorplan_title = get_field('floorplan_title');

  if ($floorplan_title !== "" && $floorplan_title !== " " && $floorplan_title !== false && $floorplan_title !== null) {
    $floorplan_title = $floorplan_title;
  } else {
    $floorplan_title = "Floorplan";
  }
  ?>
<section class="container signUp secPad" id="floorplan">
    <div class="row">
        <div class="col-md-8 offset-md-2">
                   <h1 class="text-center"><?php echo $floorplan_title;?></h1>
                    
                    <?php
                        $floorplanImg = get_field('floorplan_image');
                    ?>
                    
                    <p class="footnote text-center"><a href="<?php echo $floorplanImg['sizes']['large']; ?>" class="simpleLink" download><i class="fas fa-download"></i> Download</a></p>
                
                    <img src="<?php echo $floorplanImg['sizes']['large']; ?>" class="full floorplanImg margTopMd">
        </div>
   </div>
</section>