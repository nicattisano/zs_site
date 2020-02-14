   <?php 
    if ($template_args['city'] == "Toronto") {
        if (($template_args['today1'] !== '')) {
        ?>
        <h2><span class="smaller"><?php echo formatDayOfWeek($template_args['today1']);?></span><br><?php echo formatMonthDay($template_args['today1']);?></h2>
        <?php
        } else {
        ?>
        Day 1
        <?php
        }
    } else if ($template_args['city'] == "Vancouver") {
        if (($template_args['vanday1'] !== '')) {
    ?>
        <h2><span class="smaller"><?php echo formatDayOfWeek($template_args['vanday1']);?></span><br><?php echo formatMonthDay($template_args['vanday1']);?></h2>
    <?php
        } else {
        ?>
        <h2>Day 1</h2>
        <?php
        }
    } else {
        if (($template_args['vanday1'] !== '')) {
    ?>
        <h2><span class="smaller"><?php echo formatDayOfWeek($template_args['vanday1']);?></span><br><?php echo formatMonthDay($template_args['vanday1']);?></h2>
    <?php
        } else {
        ?>
        <h2>Day 1</h2>
        <?php
        }
    }
    ?>