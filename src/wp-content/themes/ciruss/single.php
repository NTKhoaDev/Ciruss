<?php
get_header();
?>

<?php
    global $post;
    $query_object = get_queried_object();
    $terms = get_the_terms( $post->ID, 'category' );
    $author_id = get_post_field ('post_author', $post->ID );
    $description_short = get_field( 'description_short', $post->ID );
    $single_thumbnail = get_field( 'single_thumbnail', $post->ID );
    $background = ( is_array( $single_thumbnail ) )? $single_thumbnail['url'] : '';
?>

<div class="main-content" id="main">  
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="block-hide"></div> 
        <?php
            if ( $single_thumbnail ) :
                show_banner($background);
            endif; 
        ?>
        <div class="header-single">
            <div class="container-fluid section">
                <div class="container-center">
                    <div class="content-header">
                        <div class="cate-content scrollreveal-top">
                            <?php foreach ( $terms as $term ) : ?>
                            <div class="cate">
                                <?php echo esc_html( $term->name ); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="title-block scrollreveal-top">
                            <?php echo esc_html( $post->post_title ); ?>
                        </div>
                        <div class="description-short scrollreveal-bottom">
                            <?php echo esc_html( $description_short ); ?>
                        </div>
                        <div class="tag-list scrollreveal-bottom">
                            <?php echo the_tags(); ?>
                        </div>
                    </div>
                    <div class="info-content">
                        <div class="author-wrap scrollreveal-left">
                            <div class="image-author">
                                <?php echo apply_filters( 'the_content', get_avatar( get_the_author_meta( 'ID' ) , $post->ID ) ); ?>
                            </div>
                            <div class="name-author">
                                <?php echo esc_html( get_the_author_meta( 'display_name' , $author_id ) ); ?>
                            </div>
                        </div>
                        <div class="date-post scrollreveal-right">
                            <?php echo esc_html( get_the_date() ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo apply_filters( 'the_content', $post->post_content ); ?>
        <?php echo wp_link_pages(); ?>
        <div class="comment-wrapper">
            <div class="container-fluid">
                <div class="container-center">
                    <div class="list-comment">
                        <?php comments_template('/comments.php'); ?>
                    </div>
                    <?php comment_form(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<form class="form-search" action="<?php echo site_url(); ?>" method="get" id="search-form">
    <div class="form-control">
        <img class="icon-search icon-show" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/search.svg" alt="search">
        <img class="icon-search icon-submit" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/search.svg" alt="search">
        <input class="input-search" type="text" name="s" placeholder="Search...">
    </div>
</form>
<?php
get_footer();