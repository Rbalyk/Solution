<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<div class="col-xl-4 col-md-4 col-sm-12">
<h3><?php the_title(); ?></h3>
    <div class='item-smm-post'>

        <div class="price-block">
            <span class="price"><?php the_field('price'); ?></span>
            <span class="month"><?php the_field('month'); ?></span>
            <button class="btn-leave-application"><?php the_field('text_button_order'); ?></button>
        </div>
        <?php if (get_field('analysis_of_the_competitors_') === '1') {  ?>
            <p>Аналіз ніші, конкурентів</p>
            <?php } else { ?>
            <p class="disabled">Аналіз ніші, конкурентів</p>
        <?php } ?>

        <?php if (get_field('creating_content_plan') === '1') {  ?>
            <p>Створення контент плану</p>
        <?php } else { ?>
            <p class="disabled">Створення контент плану</p>
        <?php } ?>

        <?php if (get_field('creating_content_plan') === '1') {  ?>
            <p>Написання текстів</p>
        <?php } else { ?>
            <p class="disabled">Написання текстів</p>
        <?php } ?>

        <?php if (get_field('page_design') === '1') {  ?>
            <p>Оформлення сторінки</p>
        <?php } else { ?>
            <p class="disabled">Оформлення сторінки</p>
        <?php } ?>

        <?php if (get_field('report') === '1') {  ?>
            <p>Звіт</p>
        <?php } else { ?>
            <p class="disabled">Звіт</p>
        <?php } ?>

        <?php if (get_field('publication_stories') === '1') {  ?>
            <p>Публікація stories</p>
        <?php } else { ?>
            <p class="disabled">Публікація stories</p>
        <?php } ?>

        <?php if (get_field('publication_stories') === '1') {  ?>
            <p>Таргетована реклама</p>
        <?php } else { ?>
            <p class="disabled">Таргетована реклама</p>
        <?php } ?>

        <?php if (get_field('targeted_advertising') === '1') {  ?>
            <p>Таргетована реклама</p>
        <?php } else { ?>
            <p class="disabled">Таргетована реклама</p>
        <?php } ?>

        <?php if (get_field('promotions_and_draws') === '1') {  ?>
            <p>Акції та розіграші</p>
        <?php } else { ?>
            <p class="disabled">Акції та розіграші</p>
        <?php } ?>

        <?php if (get_field('strategy_development') === '1') {  ?>
            <p>Розробка стратегії</p>
        <?php } else { ?>
            <p class="disabled">Розробка стратегії</p>
        <?php } ?>

        <?php if (get_field('work_with_the audience') === '1') {  ?>
            <p>Робота з аудиторією</p>
        <?php } else { ?>
            <p class="disabled">Робота з аудиторією</p>
        <?php } ?>
    </div>
</div>
<?php unset($Bsb4Design); ?>
