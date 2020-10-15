<?php

namespace Aimeos\MW;

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
     */
    protected function setUp(): void
    {
        // $this->object = new \Aimeos\MW\View\Helper\Test\Standard();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        unset($this->object);
    }
}
