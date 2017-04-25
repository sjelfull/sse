<?php
/**
 * SSE plugin for Craft CMS
 *
 * SSE
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   SSE
 * @since     1.0.0
 */

namespace Craft;

class SSEPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init ()
    {
        parent::init();

        require_once(__DIR__ . '/vendor/autoload.php');
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        return Craft::t('SSE');
    }

    /**
     * @return mixed
     */
    public function getDescription ()
    {
        return Craft::t('SSE');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl ()
    {
        return 'https://github.com/sjelfull/sse/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl ()
    {
        return 'https://raw.githubusercontent.com/sjelfull/sse/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper ()
    {
        return 'Superbig';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl ()
    {
        return 'https://superbig.co';
    }

    /**
     * @return bool
     */
    public function hasCpSection ()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall ()
    {
    }

    /**
     */
    public function onAfterInstall ()
    {
    }

    /**
     */
    public function onBeforeUninstall ()
    {
    }

    /**
     */
    public function onAfterUninstall ()
    {
    }
}