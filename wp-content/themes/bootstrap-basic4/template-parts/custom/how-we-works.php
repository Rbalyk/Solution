<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section id="how-we-works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrapper">
                    <span class="top-label"><?php the_field('title_subtitle'); ?></span>
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="post-wrapper">
                    <h3 class="post-title"><?php the_field('title_one'); ?></h3>
                    <p class="post-text"><?php the_field('text_one'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="post-wrapper">
                    <h3 class="post-title"><?php the_field('title_two'); ?></h3>
                    <p class="post-text"><?php the_field('text_two'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="post-wrapper">
                    <h3 class="post-title"><?php the_field('title_three'); ?></h3>
                    <p class="post-text"><?php the_field('text_three'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="post-wrapper">
                    <h3 class="post-title"><?php the_field('title_four'); ?></h3>
                    <p class="post-text"><?php the_field('text_four'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="post-wrapper">
                    <h3 class="post-title"><?php the_field('title_five'); ?></h3>
                    <p class="post-text"><?php the_field('text_five'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="post-wrapper">
                    <h3 class="post-title"><?php the_field('title_six'); ?></h3>
                    <p class="post-text"><?php the_field('text_six'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php unset($Bsb4Design); ?>