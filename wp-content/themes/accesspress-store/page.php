<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package AccessPress Store
 */
get_header();

global $post;
$single_page_layout = get_post_meta($post->ID, 'accesspress_store_sidebar_layout', true);
if (empty($single_page_layout)) {
    $single_page_layout = get_theme_mod('single_page_layout','right-sidebar');
}
if (is_page('cart') || is_page('checkout')) {
    $single_page_layout = "no-sidebar";
}
$breadcrumb = get_theme_mod('breadcrumb_options_page','1');
$archive_bread = get_theme_mod('breadcrumb_page_image');
if($archive_bread){
    $bread_archive = $archive_bread;
}else{
  $bread_archive = get_template_directory_uri().'/images/about-us-bg.jpg';
}
if($breadcrumb == '1') :
?>
<div class="page_header_wrap clearfix" style="background:url('<?php echo $bread_archive; ?>') no-repeat center; background-size: cover;">
    <div class="ak-container">
       

 



        <?php accesspress_breadcrumbs() ?>
    </div>
</div>
<?php endif; ?>
<div class="inner">
    <main id="main" class="site-main clearfix <?php echo $single_page_layout; ?>">
        <?php if ($single_page_layout == 'both-sidebar'): ?>
            <div id="primary-wrap" class="clearfix">
            <?php endif; ?>

            <div id="primary" class="content-area">

                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('content', 'page'); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                <?php endwhile; // end of the loop.  ?>
            </div><!-- #primary -->

            <?php
            if ($single_page_layout == 'both-sidebar' || $single_page_layout == 'left-sidebar'):
                get_sidebar('left');
            endif;
            ?>

            <?php if ($single_page_layout == 'both-sidebar'): ?>
            </div>
        <?php endif; ?>

        <?php
        if ($single_page_layout == 'both-sidebar' || $single_page_layout == 'right-sidebar'):
            get_sidebar('right');
        endif;
        ?>
    </main>
</div>
<?php get_footer(); ?>
