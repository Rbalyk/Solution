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
                <?php
                    $category_id = get_cat_ID( 'Про нас' );
                    $category_link = get_category_link( $category_id );
                ?>
            </div>
        </div>
    </div>
    <a href="#home_page_about_us" class='link-to-bottom'>
        <span class="text"><?php the_field('button_detail'); ?></span>
        <span class="circle">
            <svg width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12.3429L5 0.833328L3 0.833328L3 12.3429L-2.62628e-08 12.3429L4 16.1667L8 12.3429L5 12.3429Z" fill="white"/>
            </svg>
        </span>
    </a>      
</section><!-- #post-## -->
<?php unset($Bsb4Design); ?>
