<?php
/** 
 * Display the page content for post type "page".
 * This will be use in full page display.
 * 
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?> 
<div id="post-<?php the_ID(); ?>">
    <div class="entry-content">
        <?php the_content(); ?>
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
    </div><!-- .entry-content -->
</div><!-- #post-## -->
<?php unset($Bsb4Design); ?> 