<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 left-spacer">
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
                    <img src="<?php the_field('team_icon_one'); ?>"/>
                    <p class="post-text"><?php the_field('team_title_one'); ?></p>
                </div>
            </div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <img src="<?php the_field('team_icon_two'); ?>"/>
                    <p class="post-text"><?php the_field('team_title_two'); ?></p>
                </div>
            </div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <img src="<?php the_field('team_icon_third'); ?>"/>
                    <p class="post-text"><?php the_field('team_title_third'); ?></p>
                </div>
            </div>
            <div class=" col-sm-6 col-lg-3">
                <div class="post-wrapper">
                    <img src="<?php the_field('team_icon_forth'); ?>"/>
                    <p class="post-text"><?php the_field('team_title_forth'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php unset($Bsb4Design); ?>
