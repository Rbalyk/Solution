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
    <div class='item-adwords-post'>
        <div class="price-block">
            <span class="price"><?php the_field('price'); ?></span>
            <span class="month"><?php the_field('month'); ?></span>
            <button class="btn-leave-application"><?php the_field('text_button_order'); ?></button>
        </div>
        <?php if (get_field('create_account_google_ads') === '1') {  ?>
            <p>Аналіз ніші, конкурентів</p>
            <?php } else { ?>
            <p class="disabled">Аналіз ніші, конкурентів</p>
        <?php } ?>

        <?php if (get_field('connect_google_analytics') === '1') {  ?>
            <p>Підключення Google Analytics</p>
        <?php } else { ?>
            <p class="disabled">Підключення Google Analytics</p>
        <?php } ?>

        <?php if (get_field('develop_structure_account') === '1') {  ?>
            <p>Розробка структури аккаунту</p>
        <?php } else { ?>
            <p class="disabled">Розробка структури аккаунту</p>
        <?php } ?>

        <?php if (get_field('create_settings_pc') === '1') {  ?>
            <p>Створення та налаштування РК</p>
        <?php } else { ?>
            <p class="disabled">Створення та налаштування РК</p>
        <?php } ?>

        <?php if (get_field('create_text_order') === '1') {  ?>
            <p>Написання текстів оголошень</p>
        <?php } else { ?>
            <p class="disabled">Написання текстів оголошень</p>
        <?php } ?>

        <?php if (get_field('key_words') === '1') {  ?>
            <p>Збір ключових слів</p>
        <?php } else { ?>
            <p class="disabled">Збір ключових слів</p>
        <?php } ?>

        <?php if (get_field('media_banner') === '1') {  ?>
            <p>Медійна, банерна реклама</p>
        <?php } else { ?>
            <p class="disabled">Медійна, банерна реклама</p>
        <?php } ?>

        <?php if (get_field('remarketing') === '1') {  ?>
            <p>Ремаркетинг</p>
        <?php } else { ?>
            <p class="disabled">Ремаркетинг</p>
        <?php } ?>

        <?php if (get_field('reklama_facebook_instagram') === '1') {  ?>
            <p>Реклама у Facebook, Instagram</p>
        <?php } else { ?>
            <p class="disabled">Реклама у Facebook, Instagram</p>
        <?php } ?>

        <?php if (get_field('setiing_google_shop') === '1') {  ?>
            <p>Налаштування Google Shopping</p>
        <?php } else { ?>
            <p class="disabled">Налаштування Google Shopping</p>
        <?php } ?>

        <?php if (get_field('reklama_youtube') === '1') {  ?>
            <p>Реклама в YouTube</p>
        <?php } else { ?>
            <p class="disabled">Реклама в YouTube</p>
        <?php } ?>

        <?php if (get_field('reklama_mobile_app') === '1') {  ?>
             <p>Реклама мобільних додатків</p>
        <?php } else { ?>
             <p class="disabled">Реклама мобільних додатків</p>
        <?php } ?>

        <?php if (get_field('time_settings_and_setup') === '1') {  ?>
             <p>Час налаштування та запуску РК</p>
        <?php } else { ?>
             <p class="disabled">Час налаштування та запуску РК</p>
        <?php } ?>
    </div>
</div>
<?php unset($Bsb4Design); ?>
