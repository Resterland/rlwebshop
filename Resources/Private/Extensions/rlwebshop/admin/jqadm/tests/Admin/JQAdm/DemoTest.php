<?php

namespace Aimeos\Admin\JQAdm;

use Aimeos\MShop;
use PHPUnit\Framework\TestCase;
use TestHelperJqadm;

class DemoTest extends TestCase
{

    private $context;

    private $object;

    public function testDemo()
    {
        $this->markTestIncomplete('Just a demo');
    }

    protected function setUp(): void
    {
        MShop::cache(true);

        $this->context = TestHelperJqadm::getContext();
        $paths = TestHelperJqadm::getTemplatePaths();
        // $this->object = new \Aimeos\Admin\JQAdm\...\Standard( $this->context, $paths );
    }

    protected function tearDown(): void
    {
        MShop::cache(false);

        unset($this->object);
    }
}

                                                                  
