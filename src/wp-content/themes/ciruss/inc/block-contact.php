<?php
    $select_cut = get_field( 'select_cut' );
    $list_contact = get_field( 'list_contact' );
    $title = get_field( 'title' );
    $link_map = get_field( 'link_map' );
?>

<div class="contact <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <h1 class="title-block scrollreveal-top">
                <?php echo esc_html( $title ); ?>
            </h1>
            <div class="row">
                <div class="col-4 scrollreveal-left">
                    <?php if ( is_array( $list_contact ) ) : ?>
                    <ul class="list-contact">
                        <?php foreach ( $list_contact as $contact ) : ?>
                        <li>
                            <img src="<?php echo esc_url( $contact['image']['url'] ); ?>" alt="<?php echo esc_url( $contact['image']['title'] ); ?>">
                            <?php
                                $contents = $contact['contents'];
                                if ( is_array( $contents ) ) :
                            ?>
                            <div class="contents">
                                <?php foreach ( $contents as $content ) : ?>
                                <p><?php echo esc_html( $content['content'] ); ?></p>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="col-8 scrollreveal-right">
                <div class="map">
                    <iframe src="<?php echo esc_attr( $link_map ); ?>" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>