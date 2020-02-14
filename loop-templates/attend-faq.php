     <section class="attendFaq containers secPad" id="faq">
      <div class="row">
          <div class="col-md-12">
              <h1 class="text-center margBotMd"><?php echo get_field('faq_title');?></h1>
          </div>
      </div>
       <div class="row">
           <div class="col-md-6 offset-md-3">
            <div id="accordionFaq" role="tablist">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('faq') ):

                $index = 0;
                    // loop through the rows of data
                    while ( have_rows('faq') ) : the_row();
                    if ($index == 1) {$index = 2;}
                ?>
                <div class="card">
                <a data-toggle="collapse" href="#collapse<?php echo $index;?>" aria-expanded="expanded" aria-controls="collapse<?php echo $index;?>" class="card-header-faq" role="tab" id="headingOne">
                  <h5 class="mb-0">
                      <?php echo the_sub_field('question');?>
                  </h5>
                </a>

                <div id="collapse<?php echo $index;?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $index;?>" data-parent="#accordion">
                  <div class="card-body card-faq-body">
                    <?php echo the_sub_field('answer');?>
                  </div>
                </div>
              </div>    
    <?php
        // display a sub field value
        
    $index++;
    endwhile;
    else :
        // no rows found
    endif;

    ?>
            </div>
           </div>
       </div>
   </section>