<?php
    $select_cut = get_field( 'select_cut' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
    $list_team = get_field( 'list_team' );
?>

<div class="our-team <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content-top">
                <div class="cart-out scrollreveal-top">
                    <h2 class="title-block">
                        <?php echo esc_html( $title ); ?>
                    </h2>
                </div>
                <div class="description scrollreveal-bottom">
                    <?php echo esc_html( $description ); ?>
                </div>
            </div>
            <?php if ( is_array( $list_team ) ) : ?>
            <div class="row">
                <?php foreach ( $list_team as $list_item ) : ?>
                <div class="col-2">
                    <div class="col-inner scrollreveal-flip">
                        <div class="image">
                            <img <?php echo ciruss_load_link_image( $list_item['image'] ); ?> class="lazy absolute">
                        </div>
                        <div class="contents">
                            <div class="name">
                                <?php echo esc_html( $list_item['name'] ); ?>
                            </div>
                            <div class="specialize">
                                <?php echo esc_html( $list_item['specialize'] ); ?>
                            </div>
                            <?php
                                $socials = $list_item['socials'];
                                if ( is_array( $socials ) ) :
                            ?>
                            <ul class="socials">
                                <?php foreach ( $socials as $social ) : ?>
                                <li class="social-item">
                                    <a href="<?php echo esc_url( ciruss_get_link( $social['link'] ) ); ?>">
                                        <img src="<?php echo esc_url( $social['icon']['url'] ); ?>" alt="<?php echo esc_url( $social['icon']['title'] ); ?>">
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>