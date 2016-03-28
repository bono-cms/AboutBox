<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

namespace AboutBox\Service;

use Cms\Service\AbstractSiteBootstrapper;

final class SiteBootstrapper extends AbstractSiteBootstrapper
{
    /**
     * {@inheritDoc}
     */
    public function bootstrap()
    {
        $aboutBoxManager = $this->moduleManager->getModule('AboutBox')->getService('aboutBoxManager');
        $content = $aboutBoxManager->fetch();

        $this->view->addVariable('aboutBox', $content);
    }
}
