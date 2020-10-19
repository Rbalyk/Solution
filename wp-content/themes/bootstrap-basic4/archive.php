<?php
/** 
 * The archive template.
 * 
 * Use for display author archive, category, custom post archive, custom taxonomy archive, tag, date archive.<br>
 * These archive can override by each archive file name such as category will be override by category.php.<br>
 * To learn more, please read on this link. https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?>
                <div class="category-header entry-header">
                    <div class="header-bg" style="background:url(<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>)"></div>
                        <div class="container">
                           <div class="row">
                               <div class="col-md-12">
                                    <?php if( is_category( 'blog' ) ){ ?>
                                        <h1 class="title">Блог</h1>
                                    <?php } else if ( is_category('best_services')) { ?>
                                        <h1 class="title">Послуги</h1>
                                    <?php } else if ( is_category('portfolio')) { ?>
                                        <h1 class="title">Наші Проекти</h1>
                                     <?php } else if ( is_category('about_us')) { ?>
                                        <h1 class="title">Про нашу команду</h1>
                                     <?php  } ?>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
                <main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main category" role="main">
                    <?php if( is_category( 'blog' ) ){ ?>
                        <div id="blog">
                            <div class="container category-text-portfolio">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php the_archive_description(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="custom-row row">
                                    <?php if (have_posts()) {
                                        while (have_posts()) {
                                            the_post();
                                            get_template_part('template-parts/custom/home-page-last-news', get_post_format());
                                        }

                                        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                                        $Bsb4Design->pagination();
                                        unset($Bsb4Design);
                                    }?>
                                </div>
                            </div>
                        </div>
                    <?php } else if ( is_category('best_services')) { ?>
                        <div class="container category-text-services">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php the_archive_description(); ?>
                                </div>
                            </div>
                        </div>
                        <div id="category-services">
                            <div class="container-fluid">
                                <div class="custom-row row">
                                    <?php if (have_posts()) {
                                        while (have_posts()) {
                                            the_post();
                                            get_template_part('template-parts/custom/home-page-services', get_post_format());
                                        }

                                        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                                        $Bsb4Design->pagination();
                                        unset($Bsb4Design);
                                    }?>
                                </div>
                            </div>
                        </div>
                        <?php do_shortcode("[our-advantages]"); ?>
                    <?php } else if ( is_category('portfolio')) { ?>
                        <div id="category-portfolio">
                            <div class="container category-text-portfolio">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php the_archive_description(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="custom-row row">
                                    <?php if (have_posts()) {
                                        while (have_posts()) {
                                            the_post();
                                            get_template_part('template-parts/custom/home-page-portfolio', get_post_format());
                                        }

                                        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                                        $Bsb4Design->pagination();
                                        unset($Bsb4Design);
                                    }?>
                                </div>
                            </div>
                        </div>
                        <?php do_shortcode("[our-advantages]"); ?>
                        <?php } else if ( is_category('about_us')) { ?>
                            <div id="category-about-us">
                                <div class="container category-text-about-us">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php the_archive_description(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="custom-row row">
                                        <?php if (have_posts()) {
                                            while (have_posts()) {
                                                the_post();
                                                get_template_part('template-parts/content', get_post_format());
                                            }

                                            $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                                            $Bsb4Design->pagination();
                                            unset($Bsb4Design);
                                        }?>
                                    </div>
                                </div>
                            </div>
                            <?php do_shortcode("[our-advantages]"); ?>
                        <?php } ?>
                </main>
<?php
get_sidebar('right');
get_footer();
