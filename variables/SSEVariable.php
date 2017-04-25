<?php
/**
 * SSE plugin for Craft CMS
 *
 * SSE Variable
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   SSE
 * @since     1.0.0
 */

namespace Craft;

class SSEVariable
{
    /**
     */
    public function test($optional = null)
    {
        return craft()->sSE->test();
    }
}