<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section id="what-result-do-you-get">
    <div class="container what-result-do-you-get">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('section_title'); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h3><?php the_field('first_title'); ?></h3>
            </div>
            <div class="col-lg-8">
                <p><?php the_field('first_text'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h3><?php the_field('second_title'); ?></h3>
            </div>
            <div class="col-lg-8">
                <p><?php the_field('second_text'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h3><?php the_field('third_title'); ?></h3>
            </div>
            <div class="col-lg-8">
                <p><?php the_field('third_text'); ?></p>
            </div>
        </div>
    </div>
     <?php echo do_shortcode( '[contact-form-7 id="599" title="ВИНИКЛИ ЗАПИТАННЯ ?"]' ); ?>
</section>
<?php unset($Bsb4Design); ?>
