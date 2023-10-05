<?php
    $select_type = get_field( 'select_type' );
    $file_video = get_field( 'file_video' );
    $image = get_field( 'image' );
    $link = get_field( 'link' );
    $title_banner = get_field( 'title' );
    $color_text = get_field( 'color_title' );
    $color = ( $color_text != '' )? $color_text : '#FFFFFF';
?>

<div class="banner-video">
    <div class="image">
        <?php if ( $select_type == 'image' ) : ?>
        <img <?php echo ciruss_load_link_image( $image ); ?> class="absolute lazy">
        <?php else : ?>
        <video loop muted autoplay preload="auto" class="lazy absolute">
            <source <?php echo ciruss_load_source_video( $file_video ); ?>>
        </video> 
        <?php endif; ?>
        <div class="container-center">
            <div class="content scrollreveal-bottom">
                <?php if ( $title_banner ) : ?>
                <h1 class="title-block" style="color: <?php echo esc_attr( $color ); ?>;">
                    <?php echo strip_tags(nl2br($title_banner), "<br>"); ?>
                </h1>
                <?php endif; ?>
                <?php if ( is_array( $link ) ) : ?>
                <div class="btn-submit btn-white">
                    <a href="<?php echo esc_url( ciruss_get_link( $link ) ); ?>"><?php echo esc_html( ciruss_get_link_title( $link ) ); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>