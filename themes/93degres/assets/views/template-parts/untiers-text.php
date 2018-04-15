<?php
	$paragraph = get_sub_field('paragraph');
	$icon = get_sub_field('icon');
    $icon_url = $icon['sizes']['medium'];
	$title = get_sub_field('title');
?>
<div class="un-tiers un-tiers__text col-xs-40 col-md-36">
    <?php if (!empty($icon) || !empty($title)): ?>
    	<div class="title">
            <?php if (!empty($icon)): ?>
                <img src="<?php echo $icon_url; ?>" />
            <?php 
                endif;
                if (!empty($title)):
            ?>
        	<div class="title-content">
           	<h4> <?php echo $title ?> </h4>
            </div>
            <?php endif; ?>
        </div>
   <?php endif;
    echo $paragraph ?>
</div>