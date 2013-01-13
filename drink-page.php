<?php
/*
Template Name: DRINK_TEMPLATE
*/
?>

<?php get_header(); ?>
<div class="catch_image">
some image here. delete height style
</div>
<div class="container home-widget">
	<div class="title">
        <h2>Drink</h2>
    </div>
    <div class="general_frame drink columns" id="base_frame">
    	<div class="circle_title">
        </div>
        <div class="content">
            <div class="base_item">
            	<img src="<?php bloginfo('stylesheet_directory');?>/images/circle.png">Black tea
            </div>
        </div>
    </div>
    <div class="general_frame drink columns" id="flavor_frame">
    	<div class="circle_title">
        </div>
        <div class="content">
            <div class="base_item">
            	<img src="<?php bloginfo('stylesheet_directory');?>/images/circle.png">Black tea
            </div>
        </div>
    </div>
    <div class="general_frame drink columns" id="topping_frame">
    	<div class="circle_title">
        </div>
        <div class="content">
            <div class="base_item">
            	<img src="<?php bloginfo('stylesheet_directory');?>/images/circle.png">Black tea
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>