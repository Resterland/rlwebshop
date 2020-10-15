<?php

namespace Aimeos\Admin\Jsonadm;

use Aimeos\MShop;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    private $object;


    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() : void
    {
        MShop::cache(true);

        // $this->object = new \Aimeos\Admin\Jsonadm\Demo\Standard( \TestHelperJsonadm::getContext() );
    }


    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() : void
    {
        MShop::cache(false);

        unset($this->object);
    }


    public function testDemo()
    {
        $this->markTestIncomplete('Just a demo');
    }
}
