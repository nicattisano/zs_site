<section id="whats-new">
    <section class="container-fluid secPadWhy lightGreyBg">
        <div class="row secPadBottom">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center"><?php echo get_field('highlighted_posts_title');?></h1>
                <p class="text-center"><?php echo get_field('why_attend_line');?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                    <?php 
                    // get selected people
                    $posts = get_field('highlighted_posts');
                    if( $posts )
                        $counter= 0;
                    {
                        foreach( $posts as $aPost )
                        {
                            ?>
                            <div class="col-md-6">
                                <div class="whats-new-box">
                                   <?php echo get_the_post_thumbnail( $aPost->ID, 'regular'); ?>
                                    <h2><?php echo get_the_title( $aPost->ID ); ?></h2> 
<!--                                    <p class="text-center">-->
                                        <?php /*
                                        echo str_replace("[...]Read More...","", strip_tags(get_the_excerpt( $aPost->ID )));
                                        */
                                        ?>
<!--                                    </p>-->
                                </div>
                            </div>
                            <?php
                            $counter++;
                            
                            if ($counter % 2 == 0) {
                                ?>
                                    </div><div class="row">
                                <?php
                            }
                        }
                    }

                    ?>
                        <div class="col-md-12">
                            <a href="<?php echo site_url();?>/<?php echo get_field('more_posts_cta_link');?>" class="btn more-btn">
                                <?php echo get_field('more_posts_cta_title');?>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="row videoCol">
                            <div class="col-md-12">
                                <h4><?php echo get_field('video_line');?></h4>

                                <div class="video">
                                <div class="videoWrapper">
                                <?php echo get_field('video_youtube_embed_code');?>
                                </div>
                               </div>
                            </div>
                        </div>
                        <div class="row videoCol">
                            <div class="col-lg-11 col-md-12">
                                <p><?php echo get_field('video_content');?></p>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
</section> 