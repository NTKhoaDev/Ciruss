<?php
    $select_cut = get_field( 'select_cut' );
    $content_description = get_field( 'content_description' );
?>

<div class="block-description <?php echo ciruss_cut($select_cut); ?>">
    <div class="container-fluid section">
        <div class="container-center scrollreveal-bottom">
            <div class="description">
                <?php echo apply_filters( 'the_content', $content_description ); ?>
            </div>
        </div>
    </div>
</div>