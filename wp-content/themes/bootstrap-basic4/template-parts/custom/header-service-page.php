<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section class="service_header" id="service_header"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="header-bg" style="background:url(<?php the_field('page_header_image'); ?>)"></div>
   <div class="container">
        <div class="row">
            <div class=col-md-12>
                <img src="<?php the_field('icon'); ?>" alt="Solution">
                <h1 class="title"><?php the_field('page_title'); ?></h1>
                <p class="subtitle service"><?php the_field('page_subtitle'); ?></p>
                <?php echo do_shortcode( ' [contact-form-7 id="201" title="Отримати консультацію по конкретному напрямку"]' ); ?>
            </div>
        </div>
    </div>
</section>
<section class="about_service" id="about_service"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 image-block">
                <div class="img fadeInLeft wow" data-wow-offset="10" data-wow-delay="0.4s" style="background:url(<?php the_post_thumbnail_url(); ?>)"></div>
            </div>
            <div class="col-md-5 content-block">
                <span class="top-label fadeIn wow" data-wow-offset="10" data-wow-delay="0.1s"><?php the_field('post_category_subtitle'); ?></span>
                <h2 class="title fadeIn wow" data-wow-offset="10" data-wow-delay="0.3s"><?php the_title(); ?></h2>
                <p class="text fadeIn wow" data-wow-offset="10" data-wow-delay="0.3s"><?php the_field('post_short_text'); ?></p>
                <a href="<?php echo get_post_permalink(); ?>" target="_blank"
                   class="btn-simple btn-transparent fadeInUp wow" data-wow-offset="10" data-wow-delay="0.1s">
                    <?php the_field('button_detail'); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<?php unset($Bsb4Design); ?>
