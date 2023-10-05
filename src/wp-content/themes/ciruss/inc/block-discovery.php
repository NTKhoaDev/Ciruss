<?php
    $slides= get_field( 'slides' );
    $select_cut = get_field( 'select_cut' );
    $title = get_field( 'title' );
?>

<div class="discovery <?php echo ciruss_cut( $select_cut ); ?>">
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
                    <a href="<?php echo esc_url( ciruss_get_link( $slide['link_item'] ) ); ?>" class="slide-inner">
                        <div class="image">
                            <img <?php echo ciruss_load_link_image( $slide['image'] ); ?> class="absolute lazy">
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
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>