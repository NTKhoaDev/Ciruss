<?php
    $select_cut = get_field( 'select_cut' );
    $images = get_field( 'images' );
    $title = get_field( 'title' );
?>

<div class="partners <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="cart-out scrollreveal-top">
                <h2 class="title-block">
                    <?php echo strip_tags(nl2br($title), "<br>"); ?>
                </h2>
            </div>
            <?php if ( is_array( $images ) ) : ?>
            <div class="row">
                <?php foreach ( $images as $image ) : ?>
                <div class="col scrollreveal-flip">
                    <div class="col-inner">
                        <img class="lazy" <?php echo ciruss_load_link_image( $image ); ?>>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>