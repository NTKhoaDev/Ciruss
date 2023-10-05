<?php $content = get_field( 'content' ); ?>

<div class="single-editor">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content scrollreveal-bottom">
                <?php echo apply_filters( 'the_content', $content ); ?>
            </div>
        </div>
    </div>
</div>