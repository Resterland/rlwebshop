<?php

namespace Aimeos\Controller\Jobs;

use Aimeos\MShop;
use PHPUnit\Framework\TestCase;
use TestHelperJobs;

class DemoTest extends TestCase
{
    private $object;


    protected function setUp() : void
    {
        MShop::cache(true);

        $aimeos = TestHelperJobs::getAimeos();
        $context = TestHelperJobs::getContext();

        // $this->object = new \Aimeos\Controller\Jobs\Demo\Standard( $context, $aimeos );
    }


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
