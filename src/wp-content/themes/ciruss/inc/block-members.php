<?php
    $select_cut = get_field( 'select_cut' );
    $members = get_field( 'members' );
    $title = get_field( 'title' );
?>

<div class="members <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="cart-out scrollreveal-top">
                <h2 class="title-block">
                    <?php echo strip_tags(nl2br($title), "<br>"); ?>
                </h2>
            </div>
            <?php if ( is_array( $members ) ) : ?>
            <div class="members-wrap">
                <?php foreach ( $members as $member ) : ?>
                <div class="member">
                    <div class="member-inner  scrollreveal-scale">
                        <div class="image-member">
                            <img <?php echo ciruss_load_link_image( $member['image'] ); ?> class="lazy">
                        </div>
                        <div class="name">
                            <?php echo esc_html( $member['name']); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="clear" style="clear: both;"></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>