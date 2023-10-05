<?php
    $background = get_field( 'background' );
    $link = get_field( 'link' );
    $title = get_field( 'title' );
    $time = get_field( 'time' );
    $select_cut = get_field( 'select_cut' );
    $color_text = get_field( 'color_text' );
    $color = ( $color_text != '' )? $color_text : '#FFFFFF';
?>

<div class="play <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid lazy background" <?php echo ciruss_load_link_background( $background ); ?>>
        <div class="container-center">
            <div class="content-wrap">
                <div class="content scrollreveal-bottom" style="color: <?php echo esc_attr( $color ); ?>">
                    <div class="title-block">
                        <?php echo strip_tags(nl2br($title), "<br>"); ?>
                    </div>
                    <div class="time">
                        <?php echo esc_html( $time ); ?>
                    </div>
                    <div class="btn-submit btn-white">
                        <a href="<?php echo esc_url( ciruss_get_link( $link ) ); ?>"><?php echo esc_html( ciruss_get_link_title( $link ) ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>