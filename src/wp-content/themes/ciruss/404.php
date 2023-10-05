<?php

get_header();
?>

<?php
    $image_error = get_field( 'image_error', 'options' );
?>
<div class="main-content">
    <div class="error-404">
        <div class="container-fluid background" <?php echo ciruss_load_link_background( $image_error ); ?>>
            <div class="container-inner">
                <div class="btn-submit btn-violet">
                    <a href="<?php echo esc_url( site_url() ); ?>"><?php echo __( 'Back Home', 'ciruss' ); ?></a>
                </div>
            </div>
        </div>
    </div>
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
