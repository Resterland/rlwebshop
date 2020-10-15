<?php


namespace Aimeos\Client\Jsonapi;

use Aimeos\MShop;
use PHPUnit\Framework\TestCase;
use TestHelperJapi;

class DemoTest extends TestCase
{
    private $context;
    private $object;


    protected function setUp() : void
    {
        MShop::cache(true);

        $this->context = TestHelperJapi::getContext();
        $paths = TestHelperJapi::getTemplatePaths();

        // $this->object = new \Aimeos\Client\Jsonapi\..._Standard( $this->context, $paths );
        // $this->object->setView( \TestHelperJapi::getView() );
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
