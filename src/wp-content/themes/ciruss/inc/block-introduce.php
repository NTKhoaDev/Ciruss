<?php
    $select_cut = get_field( 'select_cut' );
    $type_video = get_field( 'type_video' );
    $background_video = get_field( 'background_video' );
    $file_video = get_field( 'file_video' );
    $link_video = get_field( 'link_video' );
    $page = get_field( 'page_parent' );
    $description = get_field( 'description' );
    $articles = get_field( 'articles' );
?>

<div class="introduce <?php if ( $select_cut == 'top') : ?>top<?php elseif ( $select_cut == 'bottom' ) : ?>bottom<?php else : ?>both<?php endif; ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="row row-top">
                <div class="col-6 col-content scrollreveal-left">
                    <div class="col-inner">
                        <div class="title-description">
                            <?php echo esc_html( $description ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-video scrollreveal-right">
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
            </div>
            <?php if ( is_array( $articles ) ) : ?>
            <div class="page-children">
                <div class="row list-page">
                    <?php
                        foreach ( $articles as $article ) :
                        $background_btn = $article['background_btn'];
                        $background_color = ( $background_btn != '' )? $background_btn : '#000000';
                    ?>
                    <div class="col-3 page-item scrollreveal-interval">
                        <div class="page-inner">
                            <div class="image-show" style="border-bottom: 2px solid <?php echo esc_attr( $background_color ); ?>">
                                <img <?php echo ciruss_load_link_image( $article['image'] ); ?> class="lazy">
                            </div>
                            <div class="contents">
                                <div class="page-title" style="color: <?php echo esc_attr( $background_color ); ?>;">
                                    <?php echo esc_html( ciruss_get_link_title( $article['link_page'] ) ); ?>
                                </div>
                                <p><?php echo esc_html( $article['description_short'] ); ?></p>
                                <div class="btn-link">
                                    <a href="<?php echo esc_url( ciruss_get_link( $article['link_page'] ) ); ?>" style="background: <?php echo esc_attr( $background_color ); ?>;">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-next.svg" alt="arrow-next">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>