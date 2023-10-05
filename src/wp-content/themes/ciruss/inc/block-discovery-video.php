<?php
    $slides= get_field( 'slides' );
    $select_cut = get_field( 'select_cut' );
    $title = get_field( 'title' );
?>

<div class="discovery discovery-video <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="cart-out scrollreveal-top">
                <h2 class="title-block">
                    <?php echo strip_tags(nl2br($title), "<br>"); ?>
                </h2>
            </div>
            <?php if ( is_array( $slides ) ) : ?>
            <div class="slide scrollreveal-bottom">
                <?php foreach ( $slides as $slide ) : ?>
                <div class="slide-item">
                    <button class="slide-inner" data-bs-toggle="modal" data-bs-target="#modalVideo">
                        <div class="image" data-src="<?php echo esc_attr( $slide['src_youtube'] ); ?>">
                            <img <?php echo ciruss_load_link_image( $slide['image'] ); ?> class="absolute lazy">
                            <img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/play.svg" alt="play" class="icon-play">
                        </div>
                        <div class="content">
                            <div class="cate-content">
                                <div class="cate">
                                    <?php echo esc_html( $slide['cate_item']); ?>
                                </div>
                            </div>
                            <div class="title-content">
                                <?php echo esc_html( $slide['title_item']); ?>
                            </div>
                            <div class="description-content">
                                <?php echo esc_html( $slide['description_item']); ?>
                            </div>
                        </div>
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>