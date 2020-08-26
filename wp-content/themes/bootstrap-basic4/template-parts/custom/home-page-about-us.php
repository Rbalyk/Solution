<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section class="home_page_about_us" id="home_page_about_us"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="container">
        <div class="row">
            <div class="col-md-6 image-block">
                <div class="img" style="background:url(<?php the_field('first_image'); ?>)"></div>
                <div class="img" style="background:url(<?php the_field('second_image'); ?>)"></div>
            </div>
            <div class="col-md-6 content-block">
                <span class="top-label"><?php the_field('top_label'); ?></span>
                <h2 class="title"><?php the_field('home_page_title'); ?></h1>
                <p class="text"><?php the_field('home_page_text'); ?></p>
                <?php
                    $category_id = get_cat_ID( 'Про нас' );
                    $category_link = get_category_link( $category_id );
                ?>
                <a href="<?php echo $category_link; ?>" target="_blank" class='btn-simple btn-transparent'><?php the_field('button_detail'); ?></a>
            </div>
        </div>
    </div>
</section><!-- #post-## -->
<?php unset($Bsb4Design); ?>
