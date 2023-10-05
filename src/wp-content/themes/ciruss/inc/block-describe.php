<?php
    $contents = get_field( 'contents' );
    $select_cut = get_field( 'select_cut' );
    $title = get_field( 'title' );
?>

<div class="describe <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center hidden-admin">
            <div class="row row-title">
                <div class="col-6"></div>
                <div class="col-6 col-title scrollreveal-left">
                    <h2 class="title-block">
                        <?php echo strip_tags(nl2br($title), "<br>"); ?>
                    </h2>
                </div>
            </div>
            <?php if ( is_array( $contents ) ) : ?>
            <div class="row row-content">
                <div class="col-6 col-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php foreach ( $contents as $key => $content ) : ?>
                            <li class="nav-item scrollreveal-interval" role="presentation">
                                <button class="nav-link" id="nav-item-<?php echo esc_attr( $key ); ?>" data-bs-toggle="tab" data-bs-target="#content-<?php echo esc_attr( $key ) ?>" type="button" role="tab" aria-controls="content-<?php echo esc_attr( $key ) ?>" aria-selected="true">
                                    <div class="image">
                                        <img <?php echo ciruss_load_link_image( $content['image_content'] ); ?> class="lazy absolute">
                                    </div>
                                    <div class="content-item">
                                        <h3>
                                            <?php echo esc_html( $content['title_content'] ); ?>
                                        </h3>
                                        <div class="description-item">
                                            <?php echo esc_html( $content['description_content'] ); ?>
                                        </div>
                                    </div>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-6 col-video scrollreveal-right">
                    <div class="tab-content" id="myTabContent">
                        <?php
                        foreach ( $contents as $key => $content ) :
                        $select_type = $content['select_type'];
                        $link_video = $content['link_video'];
                        $file_video = $content['file_video'];
                        ?>
                        <div class="tab-pane fade" id="content-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="content-<?php echo esc_attr( $key ); ?>-tab">
                            <?php if ( $select_type == 'youtube' ) : ?>
                            <div class="video-wrap background lazy" <?php echo ciruss_load_link_background( $content['image_content'] ); ?>>
                                <div id="<?php echo esc_attr( $link_video ); ?>" class="box-video absolute">
                                    <a href="#" class="btn-play" data-target="<?php echo esc_attr( $link_video ); ?>" data-video-id="<?php echo esc_attr( $link_video ); ?>">
                                        <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play">
                                    </a>
                                </div>
                            </div>
                            <?php else : ?>
                            <div class="video-wrap lazy">
                                <video loop muted autoplay controls preload="auto" class="lazy absolute">
                                    <source <?php echo ciruss_load_source_video( $file_video ); ?>>
                                </video> 
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="block-admin show-admin">
            <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/describe-admin.jpg" alt="describe">
        </div>
    </div>
</div>