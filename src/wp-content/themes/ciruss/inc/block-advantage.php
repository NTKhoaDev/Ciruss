<?php
    $select_cut = get_field( 'select_cut' );
    $type_video = get_field( 'type_video' );
    $list = get_field( 'list' );
    $background_video = get_field( 'background_video' );
    $file_video = get_field( 'file_video' );
    $link_video = get_field( 'link_video' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="advantage <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content-top">
                <div class="card-our scrollreveal-top">
                    <h2 class="title-block">
                        <?php echo esc_html( $title ); ?>
                    </h2>
                </div>
                <div class="description scrollreveal-bottom">
                    <?php echo esc_html( $description ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-video scrollreveal-left">
                    <?php
                        if ( $type_video == 'youtube' ) :
                        if ( is_array( $background_video ) ) :
                    ?>
                    <div class="video-wrap background lazy" <?php echo ciruss_load_link_background( $background_video ); ?>>
                        <div id="<?php echo esc_attr( $link_video ); ?>" class="box-video absolute">
                            <a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
                                <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                            </a>
                        </div>
                    </div>
                    <?php endif; elseif ( $type_video == 'mp4/video' ) : ?>
                    <?php if ( is_array( $file_video ) ) : ?>
                    <div class="video-wrap">
                        <video loop muted autoplay controls playsinline preload="auto" class="lazy absolute">
                            <source <?php echo ciruss_load_source_video( $file_video ); ?>>
                        </video> 
                    </div>
                    <?php endif; else :; if ( is_array( $background_video ) ) :; ?>
                    <div class="video-wrap">
                        <img <?php echo ciruss_load_link_image( $background_video ); ?> class="absolute lazy">
                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="col-6 col-list">
                    <div class="col-inner">
                        <?php if ( is_array( $list ) ) : ?>
                        <ul class="list">
                            <?php foreach ( $list as $item ) : ?>
                            <li class="list-item scrollreveal-interval">
                                <div class="image-left">
                                    <img <?php echo ciruss_load_link_image( $item['image'] ); ?>>
                                </div>
                                <div class="contents">
                                    <h3><?php echo esc_html( $item['title_content'] ); ?></h3>
                                    <div class="description-content">
                                        <?php echo esc_html( $item['description_content'] ); ?>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>