<?php
    $select_cut = get_field( 'select_cut' );
    $id_form = get_field( 'id_form' );
    $title = get_field( 'title' );
    $description = get_field( 'description' );
?>

<div class="contact-form <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="row">
                <div class="col-6 col-content">
                    <div class="col-inner">
                        <h2 class="title-block scrollreveal-top">
                            <?php echo esc_html( $title ); ?>
                        </h2>
                        <div class="description scrollreveal-bottom">
                            <?php echo esc_html( $description ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-form scrollreveal-right">
                    <div class="col-inner">
                        <div class="form-contact">
                            <?php echo do_shortcode('[contact-form-7 id="' . $id_form . '" title="Contact Form"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>