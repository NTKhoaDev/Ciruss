<?php
    $select_cut = get_field( 'select_cut' );
    $image_seating = get_field( 'seating_image' );
    $image = get_field( 'image' );
    $title_seating = get_field( 'title_seating' );
    $caption_seating_image = get_field( 'caption_seating_image' );
    $seating_content = get_field( 'seating_content' );
?>

<div class="seating <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content-top">
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block">
                        <?php echo strip_tags(nl2br($title_seating), "<br>"); ?>
                    </h2>
                </div>
                <div class="image-top scrollreveal-bottom">
                    <div class="image-seating">
                        <img <?php echo ciruss_load_link_image( $image_seating ); ?> class="lazy">
                    </div>
                    <p>
                        <?php echo esc_html( $caption_seating_image ); ?>
                    </p>
                </div>
            </div>
            <div class="content-wrap scrollreveal-bottom">
                <div class="seating-content">
                    <?php echo apply_filters( 'the_content', $seating_content ); ?>
                </div>
                <img <?php echo ciruss_load_link_image( $image ); ?> class="image-welcome lazy">
            </div>
        </div>
    </div>
</div>