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

function header_adwords_func(){
    query_posts(array('category_name' => 'header_adwords'));
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
add_shortcode('header_adwords', 'header_adwords_func');

function header_web_development_func(){
    query_posts(array('category_name' => 'header-web-development'));
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
add_shortcode('header_web_development', 'header_web_development_func');

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
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<div class="subtitle">наші послуги</div>';
    echo '<h2>';
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
    echo '<section class="home_page_portfolio_slider" id="home_page_portfolio_slider">';
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
    echo '<div class="subtitle">наш блог</div>';
    echo '<h2>';
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
    echo '<a class="more-link" href='. home_url("/category/blog/"). '>БІЛЬШЕ НОВИН</a>';
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

function web_development_func(){
    query_posts(array('category_name' => 'development_price'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/web-development');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('web_development', 'web_development_func');

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

function smm_administration_func(){
    query_posts(array('category_name' => 'page-administration'));
    echo '<section class="smm_administration" id="smm_administration">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-12 left-spacer">';
    echo '<div class="subtitle">';
    the_archive_description( '<div class="taxonomy-description">', '</div>' );
    echo '</div>';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '</div>';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();

    if ( have_posts() ) {
        $i = 1;
        while ( have_posts() && $i < 4 ) {
            the_post();

            get_template_part('template-parts/custom/smm-administration');

            $i++;
        };
    };
    unset($Bsb4Design);
    echo '</div></section>';
    wp_reset_query();
}
add_shortcode('smm_administration', 'smm_administration_func');

function google_adwords_price_func(){
    query_posts(array('category_name' => 'adwords_price'));
    echo '<section class="google-adwords-price" id="google-adwords-price">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-12 left-spacer">';
    echo '<div class="subtitle">';
    the_archive_description( '<div class="taxonomy-description">', '</div>' );
    echo '</div>';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '</div>';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();

    if ( have_posts() ) {
        $i = 1;
        while ( have_posts() && $i < 4 ) {
            the_post();

            get_template_part('template-parts/custom/google-adwords-price');

            $i++;
        };
    };
    unset($Bsb4Design);
    echo '</div>';
    echo '</section>';
    wp_reset_query();
}
add_shortcode('google_adwords_price', 'google_adwords_price_func');

function setting_facebook_instagram_func(){
    query_posts(array('category_name' => 'setting_facebook_instagram'));
    echo '<section class="setting_facebook_instagram" id="setting_facebook_instagram">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-12 left-spacer">';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '</div>';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();

    if ( have_posts() ) {
        $i = 1;
        while ( have_posts() && $i < 4 ) {
            the_post();

            get_template_part('template-parts/custom/setting-facebook-instagram');

            $i++;
        };
    };
    unset($Bsb4Design);
    echo '</div></section>';
    wp_reset_query();
}
add_shortcode('setting_facebook_instagram', 'setting_facebook_instagram_func');

function administration_advertising_settings_func(){
    query_posts(array('category_name' => 'administration_advertising_settings'));
    echo '<section class="administration_advertising_settings" id="administration_advertising_settings">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-12">';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '</div>';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();

    if ( have_posts() ) {
        $i = 1;
        while ( have_posts() && $i < 4 ) {
            the_post();

            get_template_part('template-parts/custom/administration-advertising-settings');

            $i++;
        };
    };
    unset($Bsb4Design);
    echo '</div></section>';
    wp_reset_query();
}
add_shortcode('administration_advertising_settings', 'administration_advertising_settings_func');

function what_result_do_you_get_func(){
    query_posts(array('category_name' => 'which_result_will_you_have'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/what-result-do-you-get');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('what_result_do_you_get', 'what_result_do_you_get_func');

function seo_func(){
    query_posts(array('category_name' => 'seo-text'));
    echo '<section class="seo" id="seo">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-12 left-spacer">';
    echo '<div class="subtitle">';
    the_archive_description( '<div class="taxonomy-description">', '</div>' );
    echo '</div>';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '</div>';
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/seo');
        };
    };
    unset($Bsb4Design);
    echo '</div></section>';
    wp_reset_query();
}
add_shortcode('seo', 'seo_func');

function what_result_do_you_get_adwords_func(){
    query_posts(array('category_name' => 'google-adwords-result'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/what-result-do-you-get-adwords');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('what_result_do_you_get_adwords', 'what_result_do_you_get_adwords_func');


function task_google_ads_func(){
    query_posts(array('category_name' => 'task_google_ads'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/task-google-ads');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('task_google_ads', 'task_google_ads_func');

function team_func(){
    query_posts(array('category_name' => 'team'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/team');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('team', 'team_func');

function team_only_func(){
    query_posts(array('category_name' => 'team-only'));
    $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('template-parts/custom/team-only');
        };
    };
    unset($Bsb4Design);
    wp_reset_query();
}
add_shortcode('team-only', 'team_only_func');
