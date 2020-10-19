<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section id="web-development">
    <div class="container">
        <div class="row">
            <div class="col-md-12 left-spacer">
                <div class="title-wrapper">
                    <span class="top-label"><?php the_field('title_subtitle'); ?></span>
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center flex-wrap">
            <div class="item-post-design">
                <div class="post-wrapper">
                    <div class="icon"><?php the_field('icon_shop'); ?></div>
                    <h3 class="post-title"><?php the_field('shop_title'); ?></h3>
                    <span class="simple-text"><?php the_field('development_period_text'); ?></span>
                    <span class="period"><?php the_field('shop_period'); ?></span>
                    <span class="simple-text"><?php the_field('price_text'); ?></span>
                    <span class="price"><?php the_field('price_shop'); ?></span>
                    <button class="btn-leave-application">обговорити проект</button>
                </div>
            </div>
            <div class="item-post-design">
                <div class="post-wrapper">
                    <div class="icon"><?php the_field('icon_company_website'); ?></div>
                    <h3 class="post-title"><?php the_field('company_website_title'); ?></h3>
                    <span class="simple-text"><?php the_field('development_period_text'); ?></span>
                    <span class="period"><?php the_field('company_website_period'); ?></span>
                    <span class="simple-text"><?php the_field('price_text'); ?></span>
                    <span class="price"><?php the_field('company_website_price'); ?></span>
                    <button class="btn-leave-application">обговорити проект</button>
                </div>
            </div>
            <div class="item-post-design">
                <div class="post-wrapper">
                    <div class="icon"><?php the_field('icon_landing_page'); ?></div>
                    <h3 class="post-title"><?php the_field('landing_page_title'); ?></h3>
                    <span class="simple-text"><?php the_field('development_period_text'); ?></span>
                    <span class="period"><?php the_field('landing_page_period'); ?></span>
                    <span class="simple-text"><?php the_field('price_text'); ?></span>
                    <span class="price"><?php the_field('landing_page_price'); ?></span>
                    <button class="btn-leave-application">обговорити проект</button>
                </div>
            </div>
            <div class="item-post-design">
                <div class="post-wrapper">
                    <div class="icon"><?php the_field('icon_mobile_app'); ?></div>
                    <h3 class="post-title"><?php the_field('mobile_app_title'); ?></h3>
                    <span class="simple-text"><?php the_field('development_period_text'); ?></span>
                    <span class="period"><?php the_field('mobile_app_period'); ?></span>
                    <span class="simple-text"><?php the_field('price_text'); ?></span>
                    <span class="price"><?php the_field('mobile_app_price'); ?></span>
                    <button class="btn-leave-application">обговорити проект</button>
                </div>
            </div>
            <div class="item-post-design">
                <div class="post-wrapper">
                    <div class="icon tilda"><?php the_field('icon_tilda'); ?></div>
                    <h3 class="post-title"><?php the_field('tilda_title'); ?></h3>
                    <span class="simple-text"><?php the_field('development_period_text'); ?></span>
                    <span class="period"><?php the_field('tilda_period'); ?></span>
                    <span class="simple-text"><?php the_field('price_text'); ?></span>
                    <span class="price"><?php the_field('tilda_price'); ?></span>
                    <button class="btn-leave-application">обговорити проект</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container web-process">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <h2><?php the_field('block_title_first'); ?></h3>
                <p class="text-web-development"><?php the_field('block_text_first'); ?></p>
            </div>
            <div class="line"></div>
            <div class="col-md-12 col-lg-6">
                <h2><?php the_field('block_title_second'); ?></h3>
                <p class="text-web-development"><?php the_field('block_text_second'); ?></p>
            </div>
        </div>
    </div>
    <?php echo do_shortcode( '[contact-form-7 id="599" title="ВИНИКЛИ ЗАПИТАННЯ ?"]' ); ?>
</section>

<?php unset($Bsb4Design); ?>
