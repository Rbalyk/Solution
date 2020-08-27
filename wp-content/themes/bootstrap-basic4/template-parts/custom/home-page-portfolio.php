<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<a href="<?php the_permalink(); ?>" target="_blank" class="col-md-3 item-project" style="background:url(<?php the_field('preview_image'); ?>)">
    <h3 class="text"><?php the_field('project_title'); ?></h3>
    <pre class="text"><?php the_field('project_small_description'); ?></pre>
</a>
<?php unset($Bsb4Design); ?>