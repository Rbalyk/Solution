<?php
/** 
 * The theme footer.
 * 
 * @package bootstrap-basic4
 */
?>
            </div><!--.site-content-->

            <?php echo do_shortcode( '[contact-form-7 id="175" title="У вас є ідеї і ви не знаєте з чого почати ? Маєте проект але не знате як його реалізувати ?"]' ); ?>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a id="logo" href="http://www.solution.in.ua/" title="Solution" rel="home">
                                <span>Solution</span>
                                <span>digital agency</span>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div id="contacts">
                                <div class="left-part">
                                    <?php dynamic_sidebar('address'); ?>
                                </div>
                                <div class="right-part">
                                    <?php dynamic_sidebar('phone'); ?>
                                    <?php dynamic_sidebar('email'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="footer-menu">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-menu',
                                    'container_class' => 'footer-menu' ) );
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-2">
                            <div class="social-media">
                                <?php dynamic_sidebar('social-media'); ?>
                            </div>
                        </div>
                    </div>
                </div>


            </footer><!--.page-footer-->
        </div><!--.page-container-->


        <!--wordpress footer-->
        <?php wp_footer(); ?> 
        <!--end wordpress footer-->
    </body>
</html>
