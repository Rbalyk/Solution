<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 * 
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?> 
<article class='article-post' id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    <div class="header-bg" style="background:url(<?php the_post_thumbnail_url(); ?>)"></div>
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                    <h1 class="title"><?php the_title(); ?></h1>
               </div>
           </div>
        </div>
    </header>

    <?php if (is_search()) { // Only display Excerpts for Search ?>
    <?php } else { ?> 
    <div class="container">
       <div class="row">
           <div class="col-md-12 post-wrapper">
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
       </div>
    </div>
    <?php } //endif; ?>
</article><!-- #post-## -->
<?php unset($Bsb4Design); ?>
