<?php

    $keyword = (isset($_GET['s']))? trim($_GET['s']) : null;
    if ( $keyword == "" ) {
        wp_redirect( site_url() );
        exit();
    }

    get_header();
?>

<?php
    $current_page = ( isset( $_GET['paging'] ) ) ? $_GET['paging'] : 1;
    $current_page = max( 1, $current_page );
    $image_cate = get_field( 'image_cate', 'options' );
?>
<div class="main-content" id="main">
    <div class="block-hide"></div> 
    <div class="banner-small">
        <div class="container-fluid lazy background" <?php echo ciruss_load_link_background( $image_cate ); ?>></div>
    </div> 
    <div class="discovery search-page post-cate">
        <div class="container-fluid section">
            <div class="container-center">
            <?php
                $search = new WP_Query(
                    array(
                        's'              => $keyword,
                        'post_type'      => 'post',
                        'posts_per_page' => 12,
                        'post_status'    => 'publish',
                        'paged'          => $current_page,
                    )
                );
            ?>  
                <div class="total-search">
                    <?php echo esc_html( $search->found_posts ); ?> <?php echo __("Search results with keyword", "flower"); ?> : "<strong><?php echo esc_html( $keyword ); ?> </strong>"
                </div>
                <div class="row">
                    <?php
                        global $wp_query; $wp_query->in_the_loop = true;
                        while ($search->have_posts()) : $search->the_post();
                            $item          = $search->post;
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
                        endwhile; wp_reset_postdata()
                    ?>
                </div>
                <div class="pagination-wrap scrollreveal-bottom">
                    <?php
                    $big = 999999999;

                    echo paginate_links(
                        array(
                            'base'      => add_query_arg( 'paging', '%#%' ),
                            'format'    => '?paging=%#%',
                            'show_all'  => false,
                            'type'      => 'list',
                            'end_size'  => 1,
                            'mid_size'  => 2,
                            'prev_text' => __( '<', 'mkcafe' ),
                            'next_text' => __( '>', 'mkcafe' ),
                            'current'   => $current_page,
                            'total'     => $search->max_num_pages,
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<form class="form-search" action="<?php echo site_url(); ?>" method="get" id="search-form">
    <div class="form-control">
        <img class="icon-search icon-show" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/search.svg" alt="search">
        <img class="icon-search icon-submit" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/search.svg" alt="search">
        <input class="input-search" type="text" name="s" placeholder="Search...">
    </div>
</form>

<?php
get_footer();
?>