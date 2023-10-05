<?php
    $select_cut = get_field( 'select_cut' );
    $title_tag = get_field( 'title_tag' );
    $title_post_tag = get_field( 'title_post_tag' );
    global $post
?>

<div class="discovery post-tags <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="tags-wrap">
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block title-tags">
                        <?php echo esc_html( $title_tag ); ?>
                    </h2>
                </div>
                <ul class="list-tags list-taxonomy scrollreveal-bottom">
                    <?php
                        $args       = array(
                            'type'       => 'post',
                            'child_of'   => 0,
                            'parent'     => '',
                            'hide_empty' => 1,
                        );
                        $tags = get_tags( $args );
                        if ( is_array( $tags ) ) :
                        foreach ( $tags as $tag ) :
                        $color = get_field( 'color', $tag );
                        $background = ( $color != '' )? $color : '#000000';
                    ?>
                    <li class="tag-item taxonomy-item">
                        <a class="tag-link taxonomy-link" id="<?php echo esc_attr( $tag->slug ); ?>" href="<?php echo esc_attr( get_tag_link( $tag->term_id ) ); ?>">
                            <span class="tag-name taxonomy-name"><?php echo esc_html( $tag->name ); ?></span>
                            <span class="tag-count taxonomy-count" style="background: <?php echo esc_attr( $background ); ?>;"><?php echo esc_html( $tag->count ); ?></span>
                        </a>
                    </li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="post-wrap">
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block title-list-post">
                        <?php echo esc_html( $title_post_tag ); ?>
                    </h2>
                </div>
                <div class="all-post-wrap">
                <?php
                    $tags_post = wp_get_post_tags( $post->ID );

                    if ($tags_post):
                        $tag_ids = array();
                    foreach($tags_post as $tag_post) $tag_ids[] = $tag_post->term_id;

                    $args=array(
                    'tag__in' => $tag_ids,
                    'post__not_in' => array( $post->ID ),
                    'showposts' => 10,
                    'ignore_sticky_posts' => 1,
                    'order' => 'DESC',
                    'orderby' => 'id'
                    );
                    $getposts = new wp_query($args);
                    if( $getposts->have_posts() ):
                        while ($getposts->have_posts()):
                            $getposts->the_post();
                            $item          = $getposts->post;
                            $image  = get_field( 'image', $item->ID );
                            $des_short  = get_field( 'description_short', $item->ID );
                            $terms = get_the_terms( $item->ID, 'category' );
                    ?>
                    <div class="post-item scrollreveal-interval">
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
                    endwhile; endif; endif; wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>