<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

return array(
    
    '/admin/module/about-box' => array(
        'controller' => 'Admin:Config@indexAction',
    ),
    
    '/admin/module/about-box/save.ajax' => array(
        'controller' => 'Admin:Config@saveAction',
        'disallow' => array('guest')
    )
);
