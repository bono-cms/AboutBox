<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

namespace AboutBox\Storage\MySQL;

use Cms\Storage\MySQL\AbstractMapper;
use AboutBox\Storage\AboutBoxMapperInterface;

final class AboutBoxMapper extends AbstractMapper implements AboutBoxMapperInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getTableName()
    {
        return self::getWithPrefix('bono_module_aboutbox');
    }

    /**
     * Fetches box's content
     * 
     * @return string
     */
    public function fetch()
    {
        return $this->db->select('content')
                        ->from(self::getTableName())
                        ->whereEquals('lang_id', $this->getLangId())
                        ->query('content');
    }

    /**
     * Inserts box's text
     * 
     * @param string $content
     * @return boolean
     */
    public function insert($content)
    {
        return $this->db->insert(self::getTableName(), array(

            'lang_id'   => $this->getLangId(),
            'content'   => $content

        ))->execute();
    }

    /**
     * Updates box's content
     * 
     * @param string $content
     * @return boolean
     */
    public function update($content)
    {
        return $this->db->update(self::getTableName(), array('content' => $content))
                        ->whereEquals('lang_id', $this->getLangId())
                        ->execute();
    }

    /**
     * Whether content exists associated with initial language id
     * 
     * @return boolean
     */
    public function exists()
    {
        return $this->db->select()
                        ->count('content', 'count')
                        ->from(self::getTableName())
                        ->whereEquals('lang_id', $this->getLangId())
                        ->query('count') != 0;
    }
}
