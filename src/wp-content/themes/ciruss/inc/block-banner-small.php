<?php
    $image = get_field( 'image' );
    $color_text = get_field( 'color_text' );
    $color = ( $color_text != '' )? $color_text : '#FFFFFF';
?>

<div class="banner-small">
    <div class="container-fluid lazy background" <?php echo ciruss_load_link_background( $image ) ?>>
        <h1 class="scrollreveal-bottom" style="color: <?php echo esc_attr( $color ); ?>"><?php echo esc_html( get_the_title() ); ?></h1>    
    </div>
</div>