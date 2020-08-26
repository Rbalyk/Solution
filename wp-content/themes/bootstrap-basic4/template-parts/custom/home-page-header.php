<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section class="home_page_header" id="home_page_header"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="header-bg" style="background:url(<?php the_post_thumbnail_url(); ?>)"></div>
   <div class="container">
        <div class="row">
            <div class=col-md-12>
                <div class="breadcrumbs"><?php the_field('breadcrumbs'); ?></div>
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="subtitle"><?php the_field('subtitle'); ?></div>
                <a href="#" target="_blank" class='btn-simple btn-transparent'><?php the_field('button_detail'); ?></a>
            </div>
        </div>
    </div>
</section><!-- #post-## -->
<?php unset($Bsb4Design); ?>
