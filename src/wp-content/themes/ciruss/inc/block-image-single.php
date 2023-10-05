<?php
    $title_image = get_field( 'title_image' );
    $description_image = get_field( 'description_image' );
    $images = get_field( 'images' );
    $caption_image = get_field( 'caption_image' );
?>

<div class="image-single">
    <div class="container-fluid section">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/vector-06.png" alt="vector" class="scrollreveal-scale absolute-top">
        <div class="container-center">
            <div class="content-top">
                <?php if ( $title_image ) : ?>
                <div class="title-image scrollreveal-top">
                    <?php echo strip_tags(nl2br($title_image), "<br>"); ?>
                </div>
                <?php endif; ?>
                <?php if ( $description_image ) : ?>
                <div class="description scrollreveal-bottom">
                    <?php echo esc_html( $description_image ); ?>
                </div>
                <?php endif; ?>
            </div>
            <?php if ( is_array( $images ) ) : ?>
            <div class="row">
                <?php if ( count( $images ) == 1 ) : ?>
                <div class="col-12 scrollreveal-scale">
                    <?php foreach ( $images as $image ) : ?>
                    <div class="image">
                        <img <?php echo ciruss_load_link_image( $image ); ?> class="lazy absolute">
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else : ?>
                <?php foreach ( $images as $image ) : ?>
                <div class="col-6 scrollreveal-interval">
                    <div class="image">
                        <img <?php echo ciruss_load_link_image( $image ); ?> class="lazy absolute">
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
            <?php endif; ?>
            <?php if ( $caption_image ) : ?>
            <div class="caption-image">
                <?php echo esc_html( $caption_image ); ?>
            </div>
            <?php endif; ?>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/vector-05.png" alt="vector" class="scrollreveal-scale absolute-bottom">
    </div>
</div>