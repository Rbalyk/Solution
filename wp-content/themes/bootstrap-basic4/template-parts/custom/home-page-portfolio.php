<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<a href="<?php the_permalink(); ?>" class=" item-project" style="background:url(<?php the_field('preview_image'); ?>)">
    <div class="text-wrapper">
        <h3 class="text"><?php the_field('project_title'); ?></h3>
        <pre class="text"><?php the_field('project_small_description'); ?></pre>
    </div>
</a>
<?php unset($Bsb4Design); ?>
