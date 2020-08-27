<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 *
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?>
<div class="col-xl-4 col-md-6 col-sm-12">
    <div class='item-blog-post'>
        <?php
            $categories_list = get_the_category_list(__('', 'bootstrap-basic4'));
            if (!empty($categories_list)) {
        ?>
        <span class='category-name'>
            <?php $Bsb4Design->categoriesList($categories_list); ?>
        </span>
        <?php } // End if categories ?>
        <a href="<?php echo get_the_permalink(); ?>">
            <span class='image-wrapper'>
               <img src="<?php the_field('post_image_preview'); ?>" />
            </span>
            <h3><?php the_title(); ?></h3>
            <span class="post-time"><?php the_field('post_time'); ?></span>
            <p class="text"><?php the_field('post_text_preview'); ?></p>
        </a>
    </div>
</div>
<?php unset($Bsb4Design); ?>
