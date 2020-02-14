<?php $exhibitor_forms_coming_soon = get_field('exhibitor_forms_coming_soon');?>
<section class="container-fluid secPad" id="exhibitor-forms">
       
       <?php if ($exhibitor_forms_coming_soon !== true) { ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Exibitor Forms</h2>
                <?php
                // check if the repeater field has rows of data
                if( have_rows('exhibitor_forms') ):
                    // loop through the rows of data
                    ?>
                    <ul class="exhibitor-forms-list">
                    <?php
                    while ( have_rows('exhibitor_forms') ) : the_row();

                    $formPDF = '#';
                    $formPDFField = get_sub_field('form_pdf');
                    if ($formPDFField !== null && $formPDFField !== false) {
                        $formPDF = $formPDFField;
                    }
                ?>
                <li><a href="<?php echo $formPDFField; ?>"><?php echo the_sub_field('title');?></a></li>
                <?php
                endwhile;
                ?>
                </ul>
                <?php
                else :
                    // no rows found
                endif;
            ?>
                
            </div>
        </div>
        
        <?php } else { ?>
        
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center secPadBottom">Exibitor Forms</h2>
                <h4 class="text-center">COMING SOON</h4>
            </div>
        </div>
        
        <?php }?>
    </section>
          