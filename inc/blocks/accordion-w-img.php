<?php

function accordion_w_img()
{

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name' => 'accordion-w-img',
            'title' => 'Accordion with Img',
            'render_template' => TEMPLATES_BLOCKS . 'accordion-w-img.php',
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

add_action('acf/init', 'accordion_w_img');
