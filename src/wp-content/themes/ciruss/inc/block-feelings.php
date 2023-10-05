<?php
    $select_cut = get_field( 'select_cut' );
    $image_left = get_field('image_left');
    $image_right = get_field('image_right');
    $slides = get_field('slides');
    $title = get_field('title');
    $description = get_field('description');
?>

<div class="feelings <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content-top">
                <h2 class="title-block">
                    <?php echo esc_html( $title ); ?>
                </h2>
                <div class="description">
                    <?php echo esc_html( $description ); ?>
                </div>
            </div>
            <div class="row row-image">
                <div class="col-7 col-image-left scrollreveal-left">
                    <div class="image">
                        <img <?php echo ciruss_load_link_image( $image_left ); ?> class="lazy absolute">
                    </div>
                </div>
                <div class="col-7 col-image-right scrollreveal-right">
                    <div class="image">
                        <img <?php echo ciruss_load_link_image( $image_right ); ?> class="lazy absolute">
                    </div>
                </div>
            </div>
            <div class="row row-content">
                <?php if ( is_array( $slides ) ) : ?>
                <div class="col-6 col-slide scrollreveal-left">
                    <div class="slide">
                        <?php foreach ( $slides as $slide ) : ?>
                        <div class="slide-item">
                            <div class="personal-feelings">
                                <?php echo esc_html( $slide['feelings'] ); ?>
                            </div>
                            <div class="artist-name">
                                <?php echo esc_html( $slide['artist'] ); ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-6 col-content scrollreveal-right">
                    <div class="col-inner">
                        <h2 class="title-block">
                            <?php echo esc_html( $title ); ?>
                        </h2>
                        <div class="description">
                            <?php echo esc_html( $description ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>