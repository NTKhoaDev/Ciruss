
<?php
    $select_type = get_field( 'select_type' );
    $title = get_field( 'title' );
    $image = get_field( 'image' );
    $link_video = get_field( 'link_video' );
    $file_video = get_field( 'file_video' );
    $description = get_field( 'description' );
?>
<div class="video-single">
    <div class="container-fluid section">
        <div class="container-center">
            <?php if ( $title ) : ?>
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block">
                        <?php echo strip_tags(nl2br($title), "<br>"); ?>
                    </h2>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-4 scrollreveal-left">
                    <div class="col-inner">
                        <?php echo esc_html( $description ); ?>
                    </div>
                </div>
                <div class="col-8 scrollreveal-right">
                    <?php if ( $select_type == 'youtube' ) : ?>
                    <div class="video-wrap lazy background" <?php echo ciruss_load_link_background( $image ); ?>>
                        <div id="<?php echo esc_attr( $link_video ); ?>" class="box-video absolute">
                            <a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
                                <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                            </a>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="video-wrap">
                        <video loop muted autoplay preload="auto" controls="controls" class="lazy absolute">
                            <source <?php echo ciruss_load_source_video( $file_video ); ?>>
                        </video> 
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>