<div class="promo-wrap">
    <section class="container">
        <div class="row">
            <div class="col-md-7 offset-md-1">
<!--                <p>Health, Travel, Finance, Contests &amp; Giveaways!</p>-->
                <p><?php echo get_field('video_line');?></p>
            </div>
            <div class="col-md-3">
<!--               https://www.youtube.com/watch?v=K7hkLlPbDBg-->
                <a href="<?php echo get_field('video_youtube_url');?>" target="_blank" class="promo-button"><?php echo get_field('video_cta');?></a>
            </div>
        </div>
    </section>
</div>