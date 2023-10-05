<?php
    $select_cut = get_field( 'select_cut' );
    $link = get_field( 'link' );
    $title_cate = get_field( 'title_cate' );
    $title_list_post = get_field( 'title_list_post' );
?>

<div class="discovery post-all <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="cate-wrap">
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block title-cate">
                        <?php echo strip_tags(nl2br($title_cate), "<br>"); ?>
                    </h2>
                </div>
                <ul class="list-category list-taxonomy scrollreveal-bottom">
                    <?php
                        $args       = array(
                            'type'       => 'post',
                            'child_of'   => 0,
                            'parent'     => '',
                            'hide_empty' => 1,
                        );
                        $categories = get_categories( $args );
                        if ( is_array( $categories ) ) :
                        foreach ( $categories as $category ) :
                        $color = get_field( 'color', $category );
                        $background = ( $color != '' )? $color : '#000000';
                    ?>
                    <li class="cate-item taxonomy-item">
                        <a class="cate-link taxonomy-link" style="color: <?php echo esc_attr( $background ); ?>; border: 1px solid <?php echo esc_attr( $background ); ?>;" id="<?php echo esc_attr( $category->slug ); ?>" href="<?php echo esc_attr( get_term_link( $category->slug, 'category' ) ); ?>">
                            <span class="cate-name taxonomy-name"><?php echo esc_html( $category->name ); ?></span>
                            <span class="cate-count taxonomy-count" style="background: <?php echo esc_attr( $background ); ?>;"><?php echo esc_html( $category->count ); ?></span>
                        </a>
                    </li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="post-wrap">
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block title-list-post">
                        <?php echo strip_tags(nl2br($title_list_post), "<br>"); ?>
                    </h2>
                </div>
                <div class="row all-post-wrap">
                    <?php 
                    $args     = array(
                        'post_type'      => 'post',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
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
                    <div class="col-3 post-item scrollreveal-interval">
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
                <?php if ( is_array( $link ) ) : ?>
                <div class="btn-submit btn-violet" id="load-more scrollreveal-bottom">
                    <a href="<?php echo esc_url( ciruss_get_link( $link ) ); ?>"><?php echo esc_html( ciruss_get_link_title( $link ) ); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>