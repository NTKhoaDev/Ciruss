<?php
/*
 * Template Name: Home
 */

get_header();
?>

<div class="main-content" id="main">  
    <div class="block-hide"></div> 
    <?php echo apply_filters( 'the_content', $post->post_content ); ?>
    <?php require get_template_directory() . '/inc/modal-video.php'; ?>  
</div>
<form class="form-search" action="<?php echo site_url(); ?>" method="get" id="search-form">
    <div class="form-control">
        <img class="icon-search icon-show" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/search.svg" alt="search">
        <img class="icon-search icon-submit" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/search.svg" alt="search">
        <input class="input-search" type="text" name="s" placeholder="Search...">
    </div>
</form>
<?php
get_footer();