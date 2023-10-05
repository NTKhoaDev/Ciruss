<?php
    $select_cut = get_field( 'select_cut' );
    $featured_01 = get_field( 'post_featured_01' );
    $image_01 = get_field( 'image', $featured_01->ID );
    $terms_01 = get_the_terms( $featured_01->ID, 'category' );
    $featured_02 = get_field( 'post_featured_02' );
    $image_02 = get_field( 'image', $featured_02->ID );
    $terms_02 = get_the_terms( $featured_02->ID, 'category' );
    $featured_03 = get_field( 'post_featured_03' );
    $image_03 = get_field( 'image', $featured_03->ID );
    $terms_03 = get_the_terms( $featured_03->ID, 'category' );
    $featured_04 = get_field( 'post_featured_04' );
    $image_04 = get_field( 'image', $featured_04->ID );
    $terms_04 = get_the_terms( $featured_04->ID, 'category' );
    $featured_05 = get_field( 'post_featured_05' );
    $image_05 = get_field( 'image', $featured_05->ID );
    $terms_05 = get_the_terms( $featured_05->ID, 'category' );
    $image_banner = get_field( 'image_banner' );
?>

<div class="discovery post-featured <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="banner-top lazy background" <?php echo ciruss_load_link_background( $image_banner ); ?>></div>
        <div class="container-center">
            <div class="content-bottom">
                <div class="row row-featured">
                    <div class="col-3 scrollreveal-interval">
                        <div class="col-inner">
                            <a href="<?php echo esc_attr( get_permalink( $featured_01->ID ) ); ?>" class="slide-inner">
                                <div class="image">
                                    <img <?php echo ciruss_load_link_image( $image_01 ); ?> class="absolute lazy">
                                </div>
                                <div class="content">
                                    <div class="cate-content">
                                        <?php
                                            foreach ( $terms_01 as $term_01 ) :
                                            $color_01 = get_field( 'color', $term_01 );
                                        ?>
                                        <div class="cate" style="color: <?php echo esc_attr( $color_01 ); ?>">
                                            <?php echo esc_html( $term_01->name ); ?>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="title-content">
                                        <?php echo esc_html( $featured_01->post_title ); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-double">
                        <div class="post-top scrollreveal-interval">
                            <div class="col-inner">
                                <a href="<?php echo esc_attr( get_permalink( $featured_02->ID ) ); ?>" class="slide-inner">
                                    <div class="image">
                                        <img <?php echo ciruss_load_link_image( $image_02 ); ?> class="absolute lazy">
                                    </div>
                                    <div class="content">
                                        <div class="cate-content">
                                            <?php
                                                foreach ( $terms_02 as $term_02 ) :
                                                $color_02 = get_field( 'color', $term_02 );
                                            ?>
                                            <div class="cate" style="color: <?php echo esc_attr( $color_02 ); ?>">
                                                <?php echo esc_html( $term_02->name ); ?>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="title-content">
                                            <?php echo esc_html( $featured_02->post_title ); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-bottom scrollreveal-interval">
                            <div class="col-inner">
                                <a href="<?php echo esc_attr( get_permalink( $featured_03->ID ) ); ?>" class="slide-inner">
                                    <div class="image">
                                        <img <?php echo ciruss_load_link_image( $image_03 ); ?> class="absolute lazy">
                                    </div>
                                    <div class="content">
                                        <div class="cate-content">
                                            <?php
                                                foreach ( $terms_03 as $term_03 ) :
                                                    $color_03 = get_field( 'color', $term_03 );
                                            ?>
                                            <div class="cate" style="color: <?php echo esc_attr( $color_03 ); ?>">
                                                <?php echo esc_html( $term_03->name ); ?>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="title-content">
                                            <?php echo esc_html( $featured_03->post_title ); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="row row-col-6">
                            <div class="col-8 scrollreveal-interval">
                                <div class="col-inner">
                                    <a href="<?php echo esc_attr( get_permalink( $featured_04->ID ) ); ?>" class="slide-inner">
                                        <div class="image">
                                            <img <?php echo ciruss_load_link_image( $image_04 ); ?> class="absolute lazy">
                                        </div>
                                        <div class="content">
                                            <div class="cate-content">
                                                <?php
                                                    foreach ( $terms_04 as $term_04 ) :
                                                        $color_04 = get_field( 'color', $term_04 );
                                                ?>
                                                <div class="cate" style="color: <?php echo esc_attr( $color_04 ); ?>">
                                                    <?php echo esc_html( $term_04->name ); ?>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="title-content">
                                                <?php echo esc_html( $featured_04->post_title ); ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 scrollreveal-interval">
                                <div class="col-inner">
                                    <a href="<?php echo esc_attr( get_permalink( $featured_05->ID ) ); ?>" class="slide-inner">
                                        <div class="image">
                                            <img <?php echo ciruss_load_link_image( $image_05 ); ?> class="absolute lazy">
                                        </div>
                                        <div class="content">
                                            <div class="cate-content">
                                                <?php
                                                    foreach ( $terms_05 as $term_05 ) :
                                                        $color_05 = get_field( 'color', $term_05 );
                                                ?>
                                                <div class="cate" style="color: <?php echo esc_attr( $color_05 ); ?>">
                                                    <?php echo esc_html( $term_05->name ); ?>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="title-content">
                                                <?php echo esc_html( $featured_05->post_title ); ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>