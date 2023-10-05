<?php
    $select_cut = get_field( 'select_cut' );
    $images = get_field( 'images' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="gallerys <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content-top">
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block">
                        <?php echo strip_tags(nl2br($title), "<br>"); ?>
                    </h2>
                </div>
                <div class="description scrollreveal-bottom">
                    <?php echo esc_html( $description ); ?>
                </div>

            </div>
            <?php if ( is_array( $images ) ) : ?>
            <div class="row">
                <?php foreach ( $images as $image ) : ?>
                <div class="col">
                    <div class="col-inner scrollreveal-interval">
                        <div class="image">
                            <img class="absolute lazy" <?php echo ciruss_load_link_image( $image ); ?>>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>