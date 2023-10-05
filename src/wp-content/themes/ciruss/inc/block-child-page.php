<?php
    $news = get_field( 'news' );
    global $post;
?>

<div class="child-page">
    <div class="container-fluid section">
        <div class="container-center">
            <ul class="menu-page scrollreveal-top">
                <li class="page-child-item">
                    <a href="<?php echo esc_attr( get_permalink( $post->post_parent ) ); ?>"><?php echo __( 'Go back', 'ciruss' ); ?></a>
                </li>
                <?php
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => -1,
                    'post_parent'    => $post->post_parent,
                    'order'          => 'DESC',
                    'orderby'        => 'id',
                    'post__not_in'   => array($post->ID),
                );

                $parent = new WP_Query( $args );
                if ( $parent->have_posts() ) : ?>
                <?php
                    while ( $parent->have_posts() ) : $parent->the_post();
                    $item          = $parent->post;
                ?>
                <li class="page-child-item">
                    <a href="<?php echo esc_url( the_permalink( $item->ID ) ); ?>"><?php echo esc_html( $item->post_title); ?></a>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
            <?php if ( is_array( $news ) ) : ?>
            <div class="news-child">
                <div class="row row-news">
                    <?php foreach ( $news as $new ) : ?>
                    <div class="col-6 col-news-child scrollreveal-scale">
                        <div class="col-inner">
                            <div class="image">
                                <img <?php echo ciruss_load_link_image( $new['image'] ); ?> class="lazy absolute">
                            </div>
                            <div class="new-details">
                                <?php echo apply_filters( 'the_content', $new['details'] ); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>