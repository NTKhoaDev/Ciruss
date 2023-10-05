<?php
    $select_cut = get_field( 'select_cut' );
    $image_top = get_field( 'image_top' );
    $image_bottom = get_field( 'image_bottom' );
    $title = get_field( 'title' );
    $description_light = get_field( 'description_light' );
    $description_bold = get_field( 'description_bold' );
    $description = get_field( 'description' );
?>

<div class="perform-show <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="row row-top">
                <div class="col-7">
                    <div class="col-inner">
                        <h2 class="title-block scrollreveal-bottom">
                            <?php echo strip_tags(nl2br($title), "<br>"); ?>
                        </h2>
                        <div class="description-light scrollreveal-bottom">
                            <?php echo esc_html( $description_light ); ?>
                        </div>
                        <div class="description-bold scrollreveal-bottom">
                            <?php echo esc_html( $description_bold ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-5 scrollreveal-right">
                    <div class="image image-top">
                        <img <?php echo ciruss_load_link_image( $image_top ); ?> class="absolute lazy">
                    </div>
                </div>
            </div>
            <div class="row row-bottom">
                <div class="col-6 col-image scrollreveal-left">
                    <div class="image image-bottom">
                        <img <?php echo ciruss_load_link_image( $image_bottom ); ?> class="absolute lazy">
                    </div>
                </div>
                <div class="col-6 col-description scrollreveal-right">
                    <div class="col-inner">
                        <div class="description">
                            <?php echo apply_filters( 'the_content', $description ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>