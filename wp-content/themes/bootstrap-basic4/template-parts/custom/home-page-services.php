<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<div class="col-md-3 item-service">
    <img src="<?php the_field('icon'); ?>"/>
    <h3 class="text"><?php the_field('text'); ?></h3>
    <p class="text"><?php the_field('text'); ?></p>
    <a href="<?php echo $category_link; ?>" target="_blank" class='btn-simple btn-transparent'><?php the_field('button_detail'); ?></a>
</div>
<?php unset($Bsb4Design); ?>
