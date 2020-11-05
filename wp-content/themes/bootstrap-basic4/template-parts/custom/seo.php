<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<div id="post-<?php the_ID(); ?>">
    <?php if (is_search()) { // Only display Excerpts for Search ?>
    <?php } else { ?>
    <div class="col-md-12 seo-text">
                    <?php the_content($Bsb4Design->continueReading(true)); ?>
                    <?php
                    /**
                     * This wp_link_pages option adapt to use bootstrap pagination style.
                     */
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic4') . ' <ul class="pagination">',
                        'after'  => '</ul></div>',
                        'separator' => ''
                    ));
                    ?>
    </div>
    <?php } //endif; ?>
</div><!-- #post-## -->
<?php unset($Bsb4Design); ?>
