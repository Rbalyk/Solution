<?php
/** 
 * Functions file.
 * 
 * To getting start design the theme, please begins by reading on this link. https://codex.wordpress.org/Theme_Development
 * You can make this theme as your parent theme (design new by modify this theme and make it yours).
 * But I recommend that you use this theme as parent and create your new child theme.
 * 
 * Learn more about template hierarchy, please read on this link. https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package bootstrap-basic4
 */


// Required WordPress variable
if (!isset($content_width)) {
    $content_width = 1140;// this will be override again in inc/classes/BootstrapBasic4.php `detectContentWidth()` method.
}


// Configurations ----------------------------------------------------------------------------
// Left sidebar column size. Bootstrap have 12 columns this sidebar column size must not greater than 12.
if (!isset($bootstrapbasic4_sidebar_left_size)) {
    $bootstrapbasic4_sidebar_left_size = apply_filters('bootstrap_basic4_column_left', 3);
}
// Right sidebar column size.
if (!isset($bootstrapbasic4_sidebar_right_size)) {
    $bootstrapbasic4_sidebar_right_size = apply_filters('bootstrap_basic4_column_right', 3);;
}
// Once you specified left and right column size, while widget was activated in all or some sidebar the main column size will be calculate automatically from these size and widgets activated.
// For example: you use only left sidebar (widgets activated) and left sidebar size is 4, the main column size will be 12 - 4 = 8.
// 
// Title separator. Please note that this value maybe able overriden by other plugins.
if (!isset($bootstrapbasic4_title_separator)) {
    $bootstrapbasic4_title_separator = '|';
}


// Require, include files ---------------------------------------------------------------------
require get_template_directory() . '/inc/classes/Autoload.php';
require get_template_directory() . '/inc/functions/include-functions.php';

// Setup auto load for load the class files without manually include file by file.
$Autoload = new \BootstrapBasic4\Autoload();
$Autoload->register();
$Autoload->addNamespace('BootstrapBasic4', get_template_directory() . '/inc/classes');
unset($Autoload);

// Call to actions/filters of the theme to enable features, register sidebars, enqueue scripts and styles.
$BootstrapBasic4 = new \BootstrapBasic4\BootstrapBasic4();
$BootstrapBasic4->addActionsFilters();
unset($BootstrapBasic4);

// Call to actions/filters of theme hook to hook into WordPress and make changes to the theme.
$Bsb4Hooks = new \BootstrapBasic4\Hooks\Bsb4Hooks();
$Bsb4Hooks->addActionsFilters();
unset($Bsb4Hooks);

// Call to actions/filters of theme hook to hook into WordPress widgets.
$WidgetHooks = new \BootstrapBasic4\Hooks\WidgetHooks();
$WidgetHooks->addActionsFilters();
unset($WidgetHooks);

// Display theme help page for admin.
$ThemeHelp = new \BootstrapBasic4\Controller\ThemeHelp();
$ThemeHelp->addActionsFilters();
unset($ThemeHelp);

function wp_custom_new_menu(){
    register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action('init', 'wp_custom_new_menu');

//////////////////////////////////////////SHORTCODES/////////////////////////////////////////
function home_page_header_func(){
    query_posts(array('category_name' => 'home_page_header'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/home-page-header');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('home_page_header', 'home_page_header_func');

function header_design_func(){
    query_posts(array('category_name' => 'header_design'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/header-service-page');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('header_design', 'header_design_func');

function header_smm_func(){
    query_posts(array('category_name' => 'header_smm'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/header-service-page');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('header_smm', 'header_smm_func');

function home_page_about_us_func(){
    query_posts(array('category_name' => 'about_us'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/home-page-about-us');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('about_us', 'home_page_about_us_func');

function home_page_services_func(){
    query_posts(array('category_name' => 'best_services'));
    echo '<section class="home_page_services" id="home_page_services">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<div class="subtitle fadeIn wow" data-wow-offset="10" data-wow-delay="0.1s">';
      the_archive_description( '<div class="taxonomy-description">', '</div>' );
    echo '</div>';
    echo '<h2 class="fadeIn wow" data-wow-offset="10" data-wow-delay="0.3s">';
        single_cat_title();
    echo '</h2>';
    echo '</div>';
    echo '<div class="custom-row">';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/home-page-services');
        };
    };
    unset($Bsb4Design);
    echo '</div>';
    echo '</div></div></section>';
    wp_reset_query();
}
add_shortcode('home_page_services', 'home_page_services_func');

function home_page_portfolio_func(){
    query_posts(array('category_name' => 'portfolio'));
    echo '<section class="home_page_portfolio_slider fadeIn wow" data-wow-offset="10" data-wow-delay="0.1s" id="home_page_portfolio_slider">';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/home-page-portfolio');
        };
    };
    unset($Bsb4Design);
    echo '</section>';
    wp_reset_query();
}
add_shortcode('home_page_portfolio', 'home_page_portfolio_func');

function home_page_last_news_func(){
    query_posts(array('category_name' => 'blog'));
    echo '<section class="home_page_last_news" id="home_page_last_news">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<div class="subtitle fadeIn wow" data-wow-offset="10" data-wow-delay="0.1s">';
      the_archive_description( '<div class="taxonomy-description">', '</div>' );
    echo '</div>';
    echo '<h2 class="fadeIn wow" data-wow-offset="10" data-wow-delay="0.3s">';
        single_cat_title();
    echo '</h2>';
    echo '</div>';
    echo '<div class="custom-row">';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();

    if ( have_posts() ) {
        $i = 1;
        while ( have_posts() && $i < 4 ) {
            the_post();

            get_template_part('template-parts/custom/home-page-last-news');

            $i++;
        };
    };
    unset($Bsb4Design);
    echo '</div>';
    echo '<a class="more-link fadeInUp wow" data-wow-offset="10" data-wow-delay="0.1s" href='. home_url("/category/blog/"). ' target="_blank">БІЛЬШЕ НОВИН</a>';
    echo '</div></section>';
    wp_reset_query();
}
add_shortcode('home_page_last_news', 'home_page_last_news_func');

function develop_ux_ui_func(){
    query_posts(array('category_name' => 'develop_ux_ui'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/ux-ui-development');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('develop_ux_ui', 'develop_ux_ui_func');

function our_advantages_func(){
    query_posts(array('category_name' => 'our-advantages'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/our-advantages');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('our-advantages', 'our_advantages_func');

function how_we_works_func(){
    query_posts(array('category_name' => 'how_we_works'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/how-we-works');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('how-we-works', 'how_we_works_func');