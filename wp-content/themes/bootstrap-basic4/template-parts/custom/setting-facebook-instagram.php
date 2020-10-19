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

        <?php if (get_field('defining_goals') === '1') {  ?>
            <p>Визначення цілей РК</p>
        <?php } else { ?>
            <p class="disabled">Визначення цілей РК</p>
        <?php } ?>

        <?php if (get_field('creating_advertisements') === '1') {  ?>
            <p>Створення рекламних оголошень</p>
        <?php } else { ?>
            <p class="disabled">Створення рекламних оголошень</p>
        <?php } ?>

        <?php if (get_field('pc_settings') === '1') {  ?>
            <p>Налаштування РК</p>
        <?php } else { ?>
            <p class="disabled">Налаштування РК</p>
        <?php } ?>

        <?php if (get_field('report') === '1') {  ?>
            <p>Звіт</p>
        <?php } else { ?>
            <p class="disabled">Звіт</p>
        <?php } ?>

        <?php if (get_field('12_posts_in_months') === '1') {  ?>
            <p>12 постів в міс</p>
        <?php } else { ?>
            <p class="disabled">12 постів в міс</p>
        <?php } ?>

        <?php if (get_field('retargeting') === '1') {  ?>
            <p>Ретаргетинг</p>
        <?php } else { ?>
            <p class="disabled">Ретаргетинг</p>
        <?php } ?>

        <?php if (get_field('instagram_advertising') === '1') {  ?>
            <p>Реклама Instsgram</p>
        <?php } else { ?>
            <p class="disabled">Реклама Instsgram</p>
        <?php } ?>

        <?php if (get_field('facebook_advertising') === '1') {  ?>
            <p>Реклама Facebook</p>
        <?php } else { ?>
            <p class="disabled">Реклама Facebook</p>
        <?php } ?>

        <?php if (get_field('working_with_KPI') === '1') {  ?>
            <p>Робота з KPI</p>
        <?php } else { ?>
            <p class="disabled">Робота з KPI</p>
        <?php } ?>

        <?php if (get_field('installation_analytics_systems') === '1') {  ?>
            <p>Установка систем аналітики</p>
        <?php } else { ?>
            <p class="disabled">Установка систем аналітики</p>
        <?php } ?>

        <?php if (get_field('work_with_audience') === '1') {  ?>
            <p>Робота з аудиторією</p>
        <?php } else { ?>
            <p class="disabled">Робота з аудиторією</p>
        <?php } ?>
    </div>
</div>
<?php unset($Bsb4Design); ?>
