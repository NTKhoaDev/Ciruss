<?php
    $image = get_field( 'image' );
    $link = get_field( 'link' );
    $title = get_field( 'title' );
?>

<div class="come-enjoy">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="row">
                <div class="col-5 scrollreveal-left">
                    <div class="image">
                        <img <?php echo ciruss_load_link_image( $image ); ?> class="lazy">
                    </div>
                </div>
                <div class="col-7 scrollreveal-right">
                    <div class="col-inner">
                        <h2 class="title-block">
                            <?php echo strip_tags(nl2br($title), "<br>"); ?>
                        </h2>
                        <div class="btn-submit btn-white">
                            <a href="<?php echo esc_url( ciruss_get_link( $link ) ); ?>"><?php echo esc_html( ciruss_get_link_title( $link ) ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>