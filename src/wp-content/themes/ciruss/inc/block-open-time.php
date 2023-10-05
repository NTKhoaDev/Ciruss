<?php
    $select_cut = get_field( 'select_cut' );
    $tables = get_field( 'tables' );
    $title = get_field( 'title' );
    $sub_title = get_field( 'sub_title' );
    $sub_time = get_field( 'sub_time' );
?>

<div class="open-time <?php echo ciruss_cut( $select_cut ); ?>">
    <div class="container-fluid section">
        <div class="container-center">
            <div class="content-top scrollreveal-bottom">
                <h2 class="title-block">
                    <?php echo strip_tags(nl2br($title), "<br>"); ?>
                </h2>
                <h3 class="sub-title">
                    <?php echo esc_html( $sub_title ); ?>
                </h3>
                <div class="sub-time">
                    <?php echo esc_html( $sub_time ); ?>
                </div>
            </div>
            <?php if ( is_array( $tables ) ) : ?>
            <div class="table-time">
                <?php foreach ( $tables as $table ) : ?>
                <table class="scrollreveal-scale">
                    <tr>
                        <th><?php echo esc_html( $table['date_monday'] ); ?></th>
                        <th><?php echo esc_html( $table['date_tuesday'] ); ?></th>
                        <th><?php echo esc_html( $table['date_wednesday'] ); ?></th>
                        <th><?php echo esc_html( $table['date_thursday'] ); ?></th>
                        <th><?php echo esc_html( $table['date_friday'] ); ?></th>
                        <th><?php echo esc_html( $table['date_saturday'] ); ?></th>
                        <th><?php echo esc_html( $table['date_sunday'] ); ?></th>
                    </tr>
                    <tr>
                        <td><?php echo esc_html( $table['monday'] ); ?></td>
                        <td><?php echo esc_html( $table['tuesday'] ); ?></td>
                        <td><?php echo esc_html( $table['wednesday'] ); ?></td>
                        <td><?php echo esc_html( $table['thursday'] ); ?></td>
                        <td><?php echo esc_html( $table['friday'] ); ?></td>
                        <td><?php echo esc_html( $table['saturday'] ); ?></td>
                        <td><?php echo esc_html( $table['sunday'] ); ?></td>
                    </tr>
                </table>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>