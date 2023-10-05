<?php
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
            <div class="slide scrollreveal-bottom">
            <?php 
                $args     = array(
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'posts_per_page' => 6,
                    'order'          => 'DESC',
                    'orderby'        => 'id'
                    );
                ?>
                <?php
                $getposts = new WP_query( $args );
                if ( $getposts->have_posts() ) :
                while ( $getposts->have_posts() ) :
                    $getposts->the_post();
                    $item          = $getposts->post;
                    $image  = get_field( 'image', $item->ID );
                    $des_short  = get_field( 'description_short', $item->ID );
                    $terms = get_the_terms( $item->ID, 'category' );
                ?>
                <div class="slide-item">
                    <a href="<?php echo esc_attr( get_permalink( $item->ID ) ); ?>" class="slide-inner">
                        <div class="image">
                            <img <?php echo ciruss_load_link_image( $image ); ?> class="absolute lazy">
                        </div>
                        <div class="content">
                            <div class="cate-content">
                                <?php
                                    foreach ( $terms as $term ) :
                                    $color_cate = get_field( 'color', $term);
                                ?>
                                <div class="cate" style="color: <?php echo esc_attr( $color_cate ); ?>;">
                                    <?php echo esc_html( $term->name ); ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="title-content">
                                <?php echo esc_html( $item->post_title ); ?>
                            </div>
                            <div class="description-content">
                                <?php echo esc_html( $des_short ); ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>