<?php
/**
 * SSE plugin for Craft CMS
 *
 * SSE Record
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   SSE
 * @since     1.0.0
 */

namespace Craft;

class SSERecord extends BaseRecord
{
    /**
     * @return string
     */
    public function getTableName()
    {
        return 'sse';
    }

    /**
     * @access protected
     * @return array
     */
   protected function defineAttributes()
    {
        return array(
            'someField'     => array(AttributeType::String, 'default' => ''),
        );
    }

    /**
     * @return array
     */
    public function defineRelations()
    {
        return array(
        );
    }
}