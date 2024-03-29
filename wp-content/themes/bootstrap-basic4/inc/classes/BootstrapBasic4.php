<?php
/**
 * The Bootstrap Basic 4 main functional file.
 *
 * @package bootstrap-basic4
 */


namespace BootstrapBasic4;

if (!class_exists('\\BootstrapBasic4\\BootstrapBasic4')) {
    /**
     * Bootstrap Basic 4 main functional in class style.
     *
     * This class will be handle all the main hooks that work with theme features such as add theme support features, register widgets area or sidebar, enqueue scripts and styles.<br>
     * If you want to hook into WordPress and make changes or modification, please use \BootstrapBasic4\Hooks\Bsb4Hooks() class.<br>
     * To use, just code as follows:
     *
     * $BootstrapBasic4 = new \BootstrapBasic4\BootstrapBasic4();
     * $BootstrapBasic4->addActionsFilters();
     *
     * That's it.
     */
    class BootstrapBasic4
    {


        /**
         * Add actions and filters to make main theme functional works.
         */
        public function addActionsFilters()
        {
            // Change main content width up to columns available.
            add_action('template_redirect', array($this, 'detectContentWidth'));
            // Add theme feature.
            add_action('after_setup_theme', array($this, 'themeSetup'));
            // Register sidebars.
            add_action('widgets_init', array($this, 'registerSidebars'));
            // Enqueue scripts and styles.
            add_action('wp_enqueue_scripts', array($this, 'registerCommonScriptsAndStyles'));
            add_action('admin_enqueue_scripts', array($this, 'registerCommonScriptsAndStyles'));
            add_action('wp_enqueue_scripts', array($this, 'enqueueScriptsAndStyles'));
            // Add Bootstrap styles into editor.
            add_action('admin_init', array($this, 'addEditorStyles'));
            // Add Bootstrap styles into Gutenberg editor.
            add_action('enqueue_block_editor_assets', array($this, 'enqueueBlockEditorAssets'));
        }// addActionsFilters


        /**
         * Add Bootstrap styles into classic editor.
         */
        public function addEditorStyles()
        {
            add_editor_style('assets/css/bootstrap.min.css');
        }// addEditorStyles


        /**
         * Detect main content width upto columns available.
         */
        public function detectContentWidth()
        {
            global $content_width, $bootstrapbasic4_sidebar_left_size, $bootstrapbasic4_sidebar_right_size;

            if (is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right')) {
                $content_width = 540;
            } elseif (is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right')) {
                $content_width = 825;
            }

            $content_width = apply_filters('bootstrap_basic4_content_width', $content_width, $bootstrapbasic4_sidebar_left_size, $bootstrapbasic4_sidebar_right_size);
        }// detectContentWidth


        /**
         * Add Bootstrap styles into Gutenberg editor.
         */
        public function enqueueBlockEditorAssets()
        {
            if (!wp_script_is('bootstrap4', 'registered')) {
                $this->registerCommonScriptsAndStyles();
            }
            wp_enqueue_style('bootstrap4');
        }// enqueueBlockEditorAssets


        /**
         * Enqueue scripts and styles.
         *
         * @access private Do not access this method directly. This is for hook callback not for direct call.
         */
        public function enqueueScriptsAndStyles()
        {
            wp_enqueue_style('bootstrap-basic4-wp-main', get_stylesheet_uri(), array(), '1.2.5');

            wp_enqueue_style('bootstrap4');
            // font awesome. choose css fonts instead of svg, see more at https://fontawesome.com/how-to-use/on-the-web/other-topics/performance
            wp_enqueue_style('bootstrap-basic4-font-awesome5', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), '5.12.1');
            wp_enqueue_style('bootstrap-basic4-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.2.5');
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.0');

            if (is_singular() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
            wp_enqueue_script('bootstrap4-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '4.4.1', true);// bundled with popper. see https://getbootstrap.com/docs/4.0/getting-started/contents/#comparison-of-css-files
            wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js', array('jquery'), '1.8.0', true);
            wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.3', true);
            wp_enqueue_script('bootstrap-basic4-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.2.5', true);
        }// enqueueScriptsAndStyles


        /**
         * Register commonly use scripts and styles for back-end and front-end.
         */
        public function registerCommonScriptsAndStyles()
        {
            wp_register_style('bootstrap4', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.4.1');
        }// registerCommonScriptsAndStyles


        /**
         * Register sidebars
         *
         * @access private Do not access this method directly. This is for hook callback not for direct call.
         */
        public function registerSidebars()
        {

            register_sidebar(array(
                'name'          => __('Address', 'bootstrap-basic4'),
                'id'            => 'address',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<div class="widget-title">',
                'after_title'   => '</div>',
            ));

            register_sidebar(array(
                'name'          => __('Email', 'bootstrap-basic4'),
                'id'            => 'email',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<div class="widget-title">',
                'after_title'   => '</div>',
            ));

            register_sidebar(array(
                'name'          => __('Phone', 'bootstrap-basic4'),
                'id'            => 'phone',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<div class="widget-title">',
                'after_title'   => '</div>',
            ));

            register_sidebar(array(
                'name'          => __('Social Media', 'bootstrap-basic4'),
                'id'            => 'social-media',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => '',
            ));
        }// registerSidebars


        /**
         * Add theme feature.
         *
         * @access private Do not access this method directly. This is for hook callback not for direct call.
         */
        public function themeSetup()
        {
            // load theme textdomain for translation
            load_theme_textdomain('bootstrap-basic4', get_template_directory() . '/languages');

            // add theme support title-tag
            add_theme_support('title-tag');

            // add theme support post and comment automatic feed links
            add_theme_support('automatic-feed-links');

            // allow the use of html5 markup
            // @link https://codex.wordpress.org/Theme_Markup
            add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

            // add support menu
            register_nav_menus(array(
                'primary' => __('Primary Menu', 'bootstrap-basic4'),
            ));

            // add post formats support
            add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

            // add post thumbnails support. **This is REQUIRED for post editor to show featured image field.**
            // To display featured image, please use post thumbnail functions.
            // See https://codex.wordpress.org/Post_Thumbnails for reference.
            add_theme_support('post-thumbnails');

            // add support custom background
            add_theme_support(
                'custom-background',
                apply_filters(
                    'bootstrap_basic4_custom_background_args',
                    array(
                        'default-color' => 'ffffff',
                        'default-image' => ''
                    )
                )
            );

            // @since 1.2 or WordPress 5.0+
            // make gutenberg support. --------------------------------------------------------------------------------------
            // @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/ reference.
            // add wide alignment ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment )
            add_theme_support('align-wide');

            // support default block styles for front-end ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#default-block-styles )
            add_theme_support('wp-block-styles');

            // support editor styles ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#editor-styles )
            // this one make appearance in editor more close to Bootstrap 4.
            add_theme_support('editor-styles');

            // support responsive embeds for front-end ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content )
            add_theme_support('responsive-embeds');
            // end make gutenberg support. ---------------------------------------------------------------------------------
        }// themeSetup


    }
}
