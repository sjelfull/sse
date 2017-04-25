<?php
/**
 * SSE plugin for Craft CMS
 *
 * SSE Controller
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   SSE
 * @since     1.0.0
 */

namespace Craft;

class SSEController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = array('actionIndex',
        );

    /**
     */
    public function actionIndex()
    {
        craft()->sSE->start();
        craft()->end();
    }
}