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

//////////////////////////////////////////SHORTCODES/////////////////////////////////////////
function portfolio_func()
{
    query_posts(array('category_name' => 'portfolio'));
    echo '<section class="portfolio-area section-gap fadeIn wow" data-wow-delay="0.1s" id="portfolio">';
    echo '<div class="container">';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '<div class="filters">';
    echo '<ul>';
    echo '<li class="active" data-filter="*">Всі</li>';
    echo '<li data-filter=".apartment">Квартири</li>';
    echo '<li data-filter=".office">Офіси</li>';
    echo '<li data-filter=".room">Кімнати</li>';
    echo '<li data-filter=".events">Комерція</li>';
    echo '</ul>';
    echo '</div>';
    echo '<div class="filters-content">';
    echo '<div class="row grid">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/portfolio/_gallery');

    }
    echo '</div></div></div></div></section>';
    wp_reset_query();
}
add_shortcode('portfolio', 'portfolio_func');

function team_func()
{
    query_posts(array('category_name' => 'team'));
    echo '<section class="team fadeIn wow" data-wow-delay="0.1s" id="team">';
    echo '<div class="container-fluid">';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '<div class="row">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/_team');

    }
    echo '</div></div></section>';
    wp_reset_query();
}
add_shortcode('team', 'team_func');



function rangeworks_func(){
    query_posts(array('category_name' => 'rangeworks','posts_per_page' => -4));
    echo '<section class="rangeworks fadeIn wow" data-wow-delay="0.1s" id="rangeworks">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="container">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/_rangeWorks');

    }
    echo '</div></div></div></section>';
    wp_reset_query();
}
add_shortcode('rangeworks', 'rangeworks_func');



function rangeworkspage_func(){
    query_posts(array('category_name' => 'rangeworks'));
    echo '<section class="rangeworks fadeIn wow" data-wow-delay="0.1s" id="rangeworks">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="container">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/_rangeWorks');

    }
    echo '</div></div></div></section>';
    wp_reset_query();
}
add_shortcode('rangeworkspage', 'rangeworkspage_func');



function aboutus_func(){
    query_posts(array('category_name' => 'about-us'));
    echo '<section class="about-us fadeIn wow" data-wow-delay="0.1s" id="about-us">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="container">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/about-us/_about-short');

    }
    echo '</div></div></div></section>';
    wp_reset_query();
}
add_shortcode('about-us', 'aboutus_func');



function aboutusfront_func(){
    query_posts(array('category_name' => 'about-us','posts_per_page' => -1));
    echo '<section class="about-us fadeIn wow" data-wow-delay="0.1s" id="about-us">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="container">';
    $i = 1;
    while (have_posts() && $i < 2) {

        the_post();
        get_template_part('/partials/about-us/_about-short');
        $i++;

    }
    echo '</div></div></div></section>';
    wp_reset_query();
}
add_shortcode('about-us-front', 'aboutusfront_func');



function process_func(){
    query_posts(array('category_name' => 'process'));
    echo '<section class="process fadeIn wow" data-wow-delay="0.1s" id="process">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/_process');

    }
    echo '</div></div></section>';
    wp_reset_query();
}
add_shortcode('process', 'process_func');



function processfront_func(){
    query_posts(array('category_name' => 'process'));
    echo '<section class="process fadeIn wow" data-wow-delay="0.1s" id="process">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    $i = 1;
    while (have_posts() && $i < 2) {

        the_post();
        get_template_part('/partials/_process-front');
        $i++;

    };
    echo '</div></div></section>';
    wp_reset_query();
}
add_shortcode('processfront', 'processfront_func');



function clientsfeedback_func(){
    query_posts(array('category_name' => 'clients-feedback'));
    echo '<section class="clients-feedback fadeIn wow" data-wow-delay="0.1s"  id="clients-feedback">';
    echo '<div class="container">';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '<div class="row">';
    echo '<div class="slick-slider-clients">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/_clients-feedback');

    }
    echo '</div></div></div></section>';
    wp_reset_query();
}
add_shortcode('clients-feedback', 'clientsfeedback_func');



function blog_func(){
    query_posts(array('category_name' => 'blog'));
    echo '<section class="blog fadeIn wow" data-wow-delay="0.1s" id="blog">';
    echo '<div class="container">';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '<div class="row">';
    while (have_posts()) {

        the_post();
        get_template_part('/partials/_blog');

    }
    echo '</div></div></section>';
    wp_reset_query();
}
add_shortcode('blog', 'blog_func');



function blogfront_func(){
    query_posts(array('category_name' => 'blog'));
    echo '<section class="blog fadeIn wow" data-wow-delay="0.1s" id="blog">';
    echo '<div class="container">';
    echo '<h2>';
    single_cat_title();
    echo '</h2>';
    echo '<div class="row">';
    $i = 1;
    while (have_posts() && $i < 4) {

        the_post();
        get_template_part('/partials/_blog');
        $i++;

    };
    echo '</div>';
    echo '<a class="more-link" href='. home_url("/category/blog/"). ' target="_blank"><span>Більше</span></a>';
    echo '</div></section>';
    wp_reset_query();
}
add_shortcode('blogfront', 'blogfront_func');
