<?php
/**
 * The theme header.
 * 
 * @package bootstrap-basic4
 */

$container_class = apply_filters('bootstrap_basic4_container_class', 'container');
if (!is_scalar($container_class) || empty($container_class)) {
    $container_class = 'container';
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!--wordpress head-->
        <?php wp_head(); ?> 
        <!--end wordpress head-->
    </head>
    <body <?php body_class(); ?>>
        <div class="<?php echo $container_class; ?> page-container">
            <header class="page-header page-header-sitebrand-topbar">
                <a id="logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <span><?php bloginfo('name'); ?></span>
                    <span>digital agency</span>
                </a>
                <div class="right-header">
                    <div class="social-media">
                        <?php dynamic_sidebar('social-media'); ?>
                    </div>
                    <button class="toggle-navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="overlay"></div>
                <nav class="main-navigation">
                    <?php
                        wp_nav_menu(
                        array(
                            'depth' => '2',
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_id' => 'bb4-primary-menu',
                            'menu_class' => 'navbar-nav mr-auto',
                            'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                        )
                    );
                    ?>
                    <div class="social-media">
                        <?php dynamic_sidebar('navigation-short-contact'); ?>
                    </div>
                    <button class="btn-leave-application">ЗАЛИШИТИ ЗАЯВКУ</button>
                    <button class="btn-complete-brief">ЗАПОВНИТИ БРИФ</button>
                    <div class="social-media">
                        <?php dynamic_sidebar('navigation-social-media'); ?>
                    </div>
                </nav>
                <div id="application-form">
                    <?php echo do_shortcode( '[contact-form-7 id="189" title="Відправити заявку"]' ); ?>
                </div>
                <div id="brief-form">
                    <?php echo do_shortcode( '[contact-form-7 id="190" title="Замовити Бриф"]' ); ?>
                </div>
            </header><!--.page-header-->


            <div id="content" class="site-content row row-with-vspace">
