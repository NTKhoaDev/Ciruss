<?php
    $select_cut = get_field( 'select_cut' );
    $link = get_field( 'link' );
    $image_title = get_field( 'image_title' );
    $image_description = get_field( 'image_description' );
    $title = get_field( 'title' );
    $time = get_field( 'time' );
    $description = get_field( 'description' );
?>

<div class="show-kid <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="row">
                <div class="col-6 col-title">
                    <div class="col-inner">
                        <div class="cart-image-out scrollreveal-top">
                            <div class="image image-title">
                                <img <?php echo ciruss_load_link_image( $image_title ); ?> class="lazy absolute">
                            </div>
                        </div>
                        <div class="content-title scrollreveal-bottom">
                            <h2 class="title-block">
                                <?php echo strip_tags(nl2br($title), "<br>"); ?>
                            </h2>
                            <div class="time">
                                <?php echo esc_html( $time ); ?>
                            </div>
                            <div class="btn-submit btn-violet">
                                <a href="<?php echo esc_url( ciruss_get_link( $link ) ); ?>"><?php echo esc_html( ciruss_get_link_title( $link ) ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-description">
                    <div class="col-inner">
                        <div class="description scrollreveal-top">
                            <?php echo esc_html( $description ); ?>
                        </div>
                        <div class="cart-image-out scrollreveal-bottom">
                            <div class="image image-description">
                                <img <?php echo ciruss_load_link_image( $image_description ); ?> class="lazy absolute">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>