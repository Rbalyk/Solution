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
                    <div class="company-info">
                        <a href="mailto:info@solution.in.ua">
                            <span class="text">info@solution.in.ua</span>
                        </a>
                        <a href="tel:+380969489639">
                            <span class="text">(096) 948-96-39</span>
                            <span class="icons">
                                <span class="icon">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.0004 6.49613L9.65196 10L12 0L0 4.70939L3.65146 5.91607L10.3155 1.45631L5.0004 6.49613Z" fill="#1e1e1c"/>
                                    </svg>
                                </span>
                                <span class="icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.649 5.25928C5.79828 5.15524 5.89758 4.99901 5.92505 4.82516C5.95252 4.65137 5.90569 4.47436 5.79507 4.33346L5.06144 3.39822C4.97533 3.28845 4.8462 3.21645 4.70327 3.19842C4.56034 3.18039 4.41566 3.21777 4.30238 3.30234C4.16714 3.40333 4.01568 3.5161 3.87239 3.62197C3.51967 3.88264 3.38655 4.32967 3.54267 4.72715C4.40374 6.91961 6.21399 8.65831 8.50967 9.50334C8.98184 9.67714 9.51772 9.49737 9.76848 9.07991L10.0503 8.61048C10.1889 8.37984 10.1163 8.08686 9.88412 7.93884L8.98637 7.36653C8.82947 7.26651 8.63644 7.23149 8.4517 7.26927C8.26696 7.3071 8.10599 7.41453 8.00658 7.56713C7.97723 7.61215 7.94885 7.6559 7.92234 7.69661C7.88537 7.7535 7.82571 7.79381 7.75697 7.80833C7.68823 7.82286 7.61616 7.8104 7.55722 7.77377C6.69651 7.23895 5.96118 6.54009 5.39909 5.72233C5.32284 5.6114 5.35207 5.4631 5.46553 5.38594C5.52205 5.34741 5.58474 5.30406 5.649 5.25928Z" fill="#1e1e1c"/>
                                        <path d="M10.3521 6.46656C10.2039 6.46656 10.0837 6.35247 10.0837 6.21186C10.0837 4.53534 8.64619 3.17139 6.87927 3.17139C6.73102 3.17139 6.61084 3.05731 6.61084 2.9167C6.61084 2.77603 6.73108 2.662 6.87927 2.662C8.94221 2.662 10.6206 4.25453 10.6206 6.21186C10.6206 6.35253 10.5004 6.46656 10.3521 6.46656Z" fill="#1e1e1c"/>
                                        <path d="M9.51139 6.46654C9.36313 6.46654 9.24296 6.35245 9.24296 6.21184C9.24296 4.97541 8.1828 3.96955 6.87976 3.96955C6.7315 3.96955 6.61133 3.85547 6.61133 3.71486C6.61133 3.57419 6.73156 3.46017 6.87976 3.46017C8.47888 3.46017 9.77987 4.69459 9.77987 6.2119C9.77981 6.35251 9.65964 6.46654 9.51139 6.46654Z" fill="#1e1e1c"/>
                                        <path d="M8.68468 6.46656C8.53643 6.46656 8.41625 6.35247 8.41625 6.21186C8.41625 5.40776 7.72673 4.75352 6.87927 4.75352C6.73102 4.75352 6.61084 4.63944 6.61084 4.49883C6.61084 4.35816 6.73108 4.24413 6.87927 4.24413C8.02281 4.24413 8.95317 5.12689 8.95317 6.21192C8.95317 6.35253 8.83293 6.46656 8.68468 6.46656Z" fill="#1e1e1c"/>
                                        <path d="M13.6663 4.95285C13.6663 2.40156 11.4865 0.333351 8.79767 0.333351H5.35071C2.57948 0.333351 0.333008 2.46489 0.333008 5.09432V7.14795C0.333008 9.17659 1.67079 10.9078 3.5545 11.5935V13.2066C3.5545 13.3977 3.68133 13.571 3.87007 13.6379C3.92489 13.6573 3.98201 13.6667 4.03859 13.6667C4.17692 13.6667 4.31265 13.6107 4.40632 13.5083L5.86851 11.909H8.79773C11.4866 11.909 13.6663 9.84077 13.6663 7.28948V4.95285H13.6663ZM12.5328 7.28948C12.5328 9.24366 10.8573 10.8335 8.79773 10.8335H6.20114L4.20034 13.0411C4.1742 13.0699 4.1319 13.0802 4.09432 13.0671C4.05674 13.0539 4.03175 13.0199 4.03175 12.9818C4.03175 12.5116 4.03175 11.4551 4.03175 10.6144C2.53737 10.1009 1.4665 8.74099 1.4665 7.14801V5.09438C1.4665 3.06218 3.20898 1.40885 5.35078 1.40885H8.79779C10.8574 1.40885 12.5329 2.99867 12.5329 4.95285V7.28948H12.5328Z" fill="#1e1e1c"/>
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <?php dynamic_sidebar('navigation-short-contact'); ?>
                    </div>
                    <button class="btn-leave-application">ЗАЛИШИТИ ЗАЯВКУ</button>
                    <button class="btn-complete-brief">ЗАПОВНИТИ БРИФ</button>
                    <div class="social-media">
                        <?php dynamic_sidebar('social-media'); ?>
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
