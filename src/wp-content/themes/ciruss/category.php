<?php
get_header();
?>

<?php
    global $post;
    $query_object = get_queried_object();
    $image_cate = get_field( 'image_cate', 'options' );
    $color_title_banner_cate = get_field( 'color_title_banner_cate', 'options' );
    $color_title_cate = ( $color_title_banner_cate != '' )? $color_title_banner_cate : '#FFFFFF';
    $current_page = ( isset( $_GET['paging'] ) ) ? $_GET['paging'] : 1;
	$current_page = max( 1, $current_page );
?>

<div class="main-content" id="main">  
    <div class="block-hide"></div> 
    <div class="banner-small">
        <div class="container-fluid lazy background" <?php echo ciruss_load_link_background( $image_cate ); ?>>
            <h1 class="scrollreveal-bottom" style="color: <?php echo esc_attr( $color_title_cate ); ?>;"><?php echo esc_html( single_term_title() ); ?></h1>
        </div>
    </div>
    <div class="discovery post-cate">
        <div class="container-fluid section">
            <div class="container-center">
                <div class="box-taxonomy">
                    <ul class="list-category list-taxonomy scrollreveal-top">
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
                <div class="box-post">
                    <div class="row post-cate">
                        <?php 
                        $args     = array(
                            'post_type'      => 'post',
                            'post_status'    => 'publish',
                            'posts_per_page' => 12,
                            'order'          => 'DESC',
                            'orderby'        => 'id',
                            'paged'          => $current_page,
                            'tax_query' => array (
                                array (
                                    'taxonomy' => 'category',
                                    'field' => 'term_id',
                                    'terms' => $query_object->term_taxonomy_id,
                                ),
                            ),
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
                        <div class="col-3 post-cate-item scrollreveal-interval">
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
                                    'prev_text' => __( '<', 'construction' ),
                                    'next_text' => __( '>', 'construction' ),
                                    'current'   => $current_page,
                                    'total'     => $getposts->max_num_pages,
                                )
                            );
                        ?>
                    </div>
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