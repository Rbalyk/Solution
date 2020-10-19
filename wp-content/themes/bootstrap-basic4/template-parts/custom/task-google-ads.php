<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section id="task-google-ads">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrapper">
                    <span class="top-label"><?php the_field('section_subtitle'); ?></span>
                    <h2 class="title"><?php the_field('section_title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <span class="icon"><?php the_field('icon_one'); ?></span>
                    <p class="post-text"><?php the_field('task_title_one'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <span class="icon"><?php the_field('icon_two'); ?></span>
                    <p class="post-text"><?php the_field('task_title_two'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <span class="icon"><?php the_field('icon_third'); ?></span>
                    <p class="post-text"><?php the_field('task_title_third'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <span class="icon"><?php the_field('icon_forth'); ?></span>
                    <p class="post-text"><?php the_field('task_title_forth'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <span class="icon"><?php the_field('icon_fifth'); ?></span>
                    <p class="post-text"><?php the_field('task_title_fifth'); ?></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <span class="icon"><?php the_field('icon_sixth'); ?></span>
                    <p class="post-text"><?php the_field('task_title_sixth'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php unset($Bsb4Design); ?>
