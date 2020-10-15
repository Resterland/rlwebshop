<?php

namespace Aimeos\Controller\Common;

use Aimeos\MShop;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{

    private $object;

    public function testDemo()
    {
        $this->markTestIncomplete('Just a demo');
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp(): void
    {
        MShop::cache(true);
        // $this->object = new \Aimeos\Controller\Common\Demo\Standard( \TestHelperCntl::getContext() );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown(): void
    {
        MShop::cache(false);

        unset($this->object);
    }
}
