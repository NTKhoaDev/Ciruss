<?php
    $image = get_field( 'image' );
    $link = get_field( 'link' );
    $select_cut = get_field( 'select_cut' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="artist <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="image-absolute image-absolute-left">
            <img class="scrollreveal-scale" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/vector-03.png" alt="vector">
        </div>
        <div class="image-absolute image-absolute-bottom">
            <img class="scrollreveal-scale" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/vector-02.png" alt="vector">
        </div>
        <div class="container-center">
            <div class="row">
                <div class="col-6 col-image scrollreveal-left">
                    <div class="col-inner">
                        <div class="image">
                            <img class="lazy" <?php echo ciruss_load_link_image( $image ); ?>>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-content scrollreveal-right">
                    <div class="col-inner">
                        <div class="title-block">
                            <?php echo strip_tags(nl2br($title), "<br>"); ?>
                        </div>
                        <div class="description">
                            <?php echo esc_html( $description ); ?>
                        </div>
                        <div class="btn-submit btn-violet">
                            <a href="<?php echo esc_url( ciruss_get_link( $link ) ); ?>"><?php echo esc_html( ciruss_get_link_title( $link ) ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>