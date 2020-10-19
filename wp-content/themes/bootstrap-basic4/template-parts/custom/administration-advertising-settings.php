<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<div class="col-xl-4 col-md-12 col-sm-12">
    <h3><?php the_title(); ?></h3>
    <div class='item-smm-post'>
        <div class="price-block">
            <div class="top-block">
                <span class="high-price"><?php the_field('old_price'); ?></span>
                <span class="month"><?php the_field('text_month'); ?></span>
            </div>
            <div class="bottom-block">
                <span class="price"><?php the_field('new_price'); ?></span>
                <span class="month"><?php the_field('text_month'); ?></span>
                <button><?php the_field('text_button_order'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php unset($Bsb4Design); ?>
