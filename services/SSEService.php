<?php
/**
 * SSE plugin for Craft CMS
 *
 * SSE Service
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   SSE
 * @since     1.0.0
 */

namespace Craft;

use Sse\Event as SSEvent;
use Sse\SSE;

//create the event handler
class UpdateEvent implements SSEvent
{
    public function update ()
    {
        //Here's the place to send data
        return 'Hello, world!';
    }

    public function check ()
    {
        //Here's the place to check when the data needs update
        return true;
    }
}

class SSEService extends BaseApplicationComponent
{
    public function init ()
    {
        parent::init();

        //require_once(realpath(__DIR__ . '/../vendor') . '/autoload.php');
    }


    public function start ()
    {
        $sse = new SSE(); //create a libSSE instance
        $sse->addEventListener('update', new UpdateEvent());//register your event handler
        $sse->start();//start the event loop
    }

    public function test ()
    {
        return 'test';
    }

}