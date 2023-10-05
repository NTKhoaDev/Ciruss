<?php
    $title = get_field( 'title' );
    $content = get_field( 'content' );
    $image_absolute = get_field( 'image_absolute' );
?>

<div class="question-answer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 col-title scrollreveal-left">
                <div class="col-inner">
                    <h2 class="title-block">
                        <?php echo esc_html( $title ); ?>
                    </h2>
                </div>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/vector-04.png" alt="vector" class="vector">
                <?php if ( is_array( $image_absolute ) ) : ?>
                <img <?php echo ciruss_load_link_image( $image_absolute ); ?> class="image-absolute">
                <?php endif; ?>
            </div>
            <div class="col-7 col-content scrollreveal-right">
                <div class="col-inner">
                    <div class="content">
                        <?php echo apply_filters( 'the_content', $content ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>