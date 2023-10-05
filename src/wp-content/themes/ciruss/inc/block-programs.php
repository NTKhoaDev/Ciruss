<?php
    $select_cut = get_field( 'select_cut' );
    $list_content_images = get_field('list_content_images');
    $title = get_field('title');
    $description = get_field('description');
?>


<div class="programs <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="row row-text">
                <div class="col-5 scrollreveal-left">
                    <div class="col-inner">
                        <h2 class="title-block">
                            <?php echo strip_tags(nl2br($title), "<br>"); ?>
                        </h2>
                    </div>
                </div>
                <div class="col-7 scrollreveal-right">
                    <div class="col-inner">
                        <div class="description">
                            <?php echo esc_html( $description ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( is_array( $list_content_images ) ) : ?>
            <div class="row row-image">
                <?php
                foreach( $list_content_images as $content_image ) :
                $color_background = $content_image['color_background'];
                $color = ( $color_background != '' ) ? $color_background : '#0a0a0abd';
                ?>
                <div class="col-6 scrollreveal-scale">
                    <a href="<?php echo esc_url( ciruss_get_link( $content_image['link'] ) ); ?>" class="col-inner">
                        <div class="image">
                            <img class="lazy absolute" <?php echo ciruss_load_link_image( $content_image['image'] ); ?>>
                            <div class="absolute background-opacity" style="background: <?php echo esc_attr( $color ) ?>;"></div>
                            <div class="content">
                                <div class="content-left">
                                    <h3><?php echo esc_html( $content_image['title_content'] ); ?></h3>
                                    <div class="sub-title"><?php echo esc_html( $content_image['sub_title_content'] ); ?></div>
                                </div>
                                <div class="icon">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-next.svg" alt="next">
                                </div>
                            </div>
                        </div>
                        <div class="content-mobile" style="background: <?php echo esc_attr( $color ) ?>;">
                            <div class="content-left">
                                <h3><?php echo esc_html( $content_image['title_content'] ); ?></h3>
                                <div class="sub-title"><?php echo esc_html( $content_image['sub_title_content'] ); ?></div>
                            </div>
                            <div class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-next.svg" alt="next">
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