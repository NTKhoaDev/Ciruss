<?php
    $logo = get_field( 'logo', 'options' );
    $info_company = get_field( 'info_company', 'options' );
    $title_main_menu = get_field( 'title_main_menu', 'options' );
    $title_information_menu = get_field( 'title_information_menu', 'options' );
    $title_list_post = get_field( 'title_list_post', 'options' );
    $copy_right = get_field( 'copy_right', 'options' );
?>

<footer>
    <div class="container-fluid">
        <div class="container-center">
            <div class="logo">
                <a href="<?php echo esc_attr( site_url() ); ?>">
                    <img src="<?php echo esc_attr( $logo['url'] ); ?>"
                        alt="<?php echo esc_attr( $logo['title'] ); ?>">
                </a>
            </div>
            <div class="row">
                <div class="col-4 col-info">
                    <?php if ( is_array( $info_company ) ) : ?>
                    <div class="info-footer">
                        <?php foreach ( $info_company as $info_item ) : ?>
                        <p>
                            <?php echo esc_html( $info_item['info_item'] ); ?>
                        </p>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-2">
                    <div class="title-menu-wrap">
                        <div class="title-menu"><?php echo esc_html( $title_main_menu ); ?></div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-right.svg" alt="icon-down">
                    </div>
                    <nav class="menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'menu-list',
                            )
                        );
                    ?>
                    </nav>
                </div>
                <div class="col-2">
                    <div class="title-menu-wrap">
                        <div class="title-menu"><?php echo esc_html( $title_information_menu ); ?></div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-right.svg" alt="icon-down">
                    </div>
                    <nav class="menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'information-menu',
                                'menu_class' => 'menu-list',
                            )
                        );
                    ?>
                    </nav>
                </div>
                <div class="col-4 col-post">
                    <div class="title-list-post">
                        <?php echo esc_html( $title_list_post ); ?>
                    </div>
                    <ul class="list-post">
                        <?php 
                        $args     = array(
                            'post_type'      => 'post',
                            'post_status'    => 'publish',
                            'posts_per_page' => 3,
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
                            $terms = get_the_terms( $item->ID, 'category' );
                        ?>
                        <li>
                            <a href="<?php echo esc_attr( get_permalink( $item->ID ) ); ?>" class="item">
                                <div class="image">
                                    <img <?php echo ciruss_load_link_image( $image ); ?> class="absolute lazy">
                                </div>
                                <div class="content">
                                    <div class="cate-content">
                                        <?php foreach ( $terms as $term ) : ?>
                                        <div class="cate">
                                            <?php echo esc_html( $term->name ); ?>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="title-post">
                                        <?php echo esc_html( $item->post_title ); ?>
                                    </div>
                                    <div class="time">
                                        <?php echo esc_html( get_the_date() ); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright"><?php echo esc_html( $copy_right ); ?></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

