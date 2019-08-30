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

use AboutBox\Storage\AboutBoxMapperInterface;
use Cms\Service\HistoryManagerInterface;
use Krystal\Security\Filter;

final class AboutBoxManager
{
    /**
     * Any compliant box's mapper
     * 
     * @var \AboutBox\Storage\AboutBoxMapperInterface
     */
    private $aboutBoxMapper;

    /**
     * State initialization
     * 
     * @param \AboutBox\Storage\AboutBoxMapperInterface $aboutBoxMapper
     * @return void
     */
    public function __construct(AboutBoxMapperInterface $aboutBoxMapper)
    {
        $this->aboutBoxMapper = $aboutBoxMapper;
    }

    /**
     * Fetches box's content
     * 
     * @return string
     */
    public function fetch()
    {
        return Filter::safeTags($this->aboutBoxMapper->fetch());
    }

    /**
     * Updates box's data
     * 
     * @param string $content New content
     * @return boolean
     */
    public function update($content)
    {
        if ($this->aboutBoxMapper->exists()) {
            return $this->aboutBoxMapper->update($content);
        } else {
            return $this->aboutBoxMapper->insert($content);
        }
    }
}
