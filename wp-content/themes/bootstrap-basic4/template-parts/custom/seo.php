<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<div class="col-md-12 seo-text">
    <?php the_field('seo_text'); ?>
</div>
<?php unset($Bsb4Design); ?>
