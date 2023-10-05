<?php
    $select_cut = get_field( 'select_cut' );
    $select_type = get_field( 'select_type' );
    $image = get_field( 'image' );
    $link_video = get_field( 'link_video' );
    $link = get_field( 'link' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="performance-description <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="row">
                <div class="col-6 col-video scrollreveal-left">
                    <?php if ( $select_type == 'youtube' ) : ?>
                    <div class="video-wrap lazy background" <?php echo ciruss_load_link_background( $image ); ?>>
                        <div id="<?php echo esc_attr( $link_video ); ?>" class="box-video absolute">
                            <a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
                                <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                            </a>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="image">
                        <img <?php echo ciruss_load_link_image( $image ); ?> class="absolute lazy">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-6 col-content scrollreveal-right">
                    <div class="col-inner">
                        <h2 class="title-block">
                            <?php echo strip_tags(nl2br($title), "<br>"); ?>
                        </h2>
                        <div class="description">
                            <?php echo esc_html( $description ); ?>
                        </div>
                        <div class="btn-submit btn-white">
                            <a href="<?php echo esc_url( ciruss_get_link( $link ) ); ?>"><?php echo esc_html( ciruss_get_link_title( $link ) ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>