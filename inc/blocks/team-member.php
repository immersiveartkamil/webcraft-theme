<?php

function team_member()
{

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name' => 'team-member',
            'title' => 'Team Member',
            'render_template' => TEMPLATES_BLOCKS . 'team-member.php',
            'icon' => 'f319',
            'keywords' => array('main', 'heading'),
            'category' => 'spectrum',
            'mode' => 'edit',
            'supports' => array('align' => false, 'align_text' => false, 'align_content' => false, 'full_height' => true),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview'
                )
            )
        ));
    }
}

add_action('acf/init', 'team_member');
