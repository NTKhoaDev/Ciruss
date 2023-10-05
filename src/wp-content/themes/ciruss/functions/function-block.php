<?php

// register blocks
function tt_register_module_blocks() {
    if (!function_exists('acf_register_block_type')) {
        return;
    }
    $block_types = array(
        array(
            'name' => 'banner-video',
            'title' => __('Banner Video', 'ciruss'),
            'keywords' => array('banner video'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'experience',
            'title' => __('Experience', 'ciruss'),
            'keywords' => array('experience'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'artist',
            'title' => __('Artist', 'ciruss'),
            'keywords' => array('artist'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'play',
            'title' => __('Play', 'ciruss'),
            'keywords' => array('play'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'show-kid',
            'title' => __('Show Kid', 'ciruss'),
            'keywords' => array('show kid'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'programs',
            'title' => __('Programs', 'ciruss'),
            'keywords' => array('programs'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'describe',
            'title' => __('Describe', 'ciruss'),
            'keywords' => array('describe'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'discovery',
            'title' => __('Discovery', 'ciruss'),
            'keywords' => array('discovery'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'come-enjoy',
            'title' => __('Come Enjoy', 'ciruss'),
            'keywords' => array('come enjoy'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'open-time',
            'title' => __('Open Time', 'ciruss'),
            'keywords' => array('open time'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'perform-show',
            'title' => __('Perform Show', 'ciruss'),
            'keywords' => array('perform show'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'description',
            'title' => __('Description', 'ciruss'),
            'keywords' => array('description'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'members',
            'title' => __('Members', 'ciruss'),
            'keywords' => array('members'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'seating',
            'title' => __('Seating', 'ciruss'),
            'keywords' => array('seating'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'post-news',
            'title' => __('Post News', 'ciruss'),
            'keywords' => array('post news'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'partners',
            'title' => __('Partners', 'ciruss'),
            'keywords' => array('partners'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'post-cate',
            'title' => __('Post Cate', 'ciruss'),
            'keywords' => array('post cate'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'gallerys',
            'title' => __('Gallerys', 'ciruss'),
            'keywords' => array('gallerys'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'discovery-video',
            'title' => __('Discovery Video', 'ciruss'),
            'keywords' => array('discovery video'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'post-featured',
            'title' => __('Post Featured', 'ciruss'),
            'keywords' => array('post featured'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'performance-description',
            'title' => __('Performance Description', 'ciruss'),
            'keywords' => array('performance description'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'post-all',
            'title' => __('Post All', 'ciruss'),
            'keywords' => array('post all'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'question-answer',
            'title' => __('Question Answer', 'ciruss'),
            'keywords' => array('question answer'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'banner-small',
            'title' => __('Banner Small', 'ciruss'),
            'keywords' => array('banner small'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'contact',
            'title' => __('Contact', 'ciruss'),
            'keywords' => array('contact'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'contact-form',
            'title' => __('Contact Form', 'ciruss'),
            'keywords' => array('contact form'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'introduce',
            'title' => __('Introduce', 'ciruss'),
            'keywords' => array('introduce'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'advantage',
            'title' => __('Advantage', 'ciruss'),
            'keywords' => array('advantage'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'our-team',
            'title' => __('Our Team', 'ciruss'),
            'keywords' => array('our team'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'feelings',
            'title' => __('Feelings', 'ciruss'),
            'keywords' => array('feelings'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'child-page',
            'title' => __('Child Page', 'ciruss'),
            'keywords' => array('child page'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'single-editor',
            'title' => __('Single Editor', 'ciruss'),
            'keywords' => array('single editor'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'image-single',
            'title' => __('Image Single', 'ciruss'),
            'keywords' => array('image single'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'video-single',
            'title' => __('Video Single', 'ciruss'),
            'keywords' => array('video single'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'post-tags',
            'title' => __('Post Tags', 'ciruss'),
            'keywords' => array('post tags'),
        // 'category' => 'modules'
        ),
    );

    foreach ($block_types as $block_type) {
        $args = array(
            'name' => $block_type['name'],
            'title' => $block_type['title'],
            'keywords' => $block_type['keywords'],
            'icon' => 'admin-generic',
            'render_callback' => 'etypes_acf_block_render_callback',
//			'category'        => $block_type['category'],
            // 'mode' => 'edit',
            'mode'            => 'view',
            'supports' => array(
                'align' => false,
                'mode' => false,
            ),
        );
        if (array_key_exists('post_types', $block_type)) {
            $args['post_types'] = $block_type['post_types'];
        }
        acf_register_block_type($args);
    }
}

add_action('acf/init', 'tt_register_module_blocks');

function etypes_acf_block_render_callback($block) {
    $name = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/inc/block-{$name}.php"))) {
        include get_theme_file_path("/inc/block-{$name}.php");
    }
}

