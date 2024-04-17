<?php

function spacer_text()
{

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name' => 'spacer-text',
            'title' => 'Spacer with Text',
            'render_template' => TEMPLATES_BLOCKS . 'spacer-text.php',
            'icon' => 'f319',
            'keywords' => array('main', 'heading'),
            'category' => 'spectrum',
            'mode' => 'edit',
            'supports' => array('align' => false, 'align_text' => false, 'align_content' => false, 'full_height' => false),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview'
                )
            )
        ));
    }
}

add_action('acf/init', 'spacer_text');
