<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<div class="col-xl-3 col-md-6 col-sm-12 fadeInUp wow" data-wow-offset="10" data-wow-delay="0.3s">
    <div class='item-service'>
        <?php the_field('icon'); ?>
        <h3 class="text"><?php the_field('title'); ?></h3>
        <p class="text"><?php the_field('text'); ?></p>
        <a href="<?php echo get_site_url(); the_field('services_name_for_url') ?>" target="_blank" class='btn-simple btn-transparent'>
            <?php the_field('button_detail'); ?>
        </a>
    </div>
</div>
<?php unset($Bsb4Design); ?>
