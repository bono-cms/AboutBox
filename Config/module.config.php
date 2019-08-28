<?php

/**
 * Module configuration container
 */

return array(
    'caption' => 'About box',
    'order' => 5,
    'menu' => array(
        'name' => 'AboutBox',
        'icon' => 'fas fa-file-signature',
        'items' => array(
            array(
                'route' => 'AboutBox:Admin:Config@indexAction',
                'icon' => 'fa fa-hashtag fa-5x',
                'name' => 'AboutBox',
                'description' => 'About box module allows to handle small info about you or your company on your blog'
            )
        )
    )
);