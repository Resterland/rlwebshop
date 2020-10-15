<?php

use Aimeos\Bootstrap;
use Aimeos\MShop\Locale\Manager\Factory;
use Aimeos\MW\Config\Decorator\Memory;
use Aimeos\MW\Config\Iface;
use Aimeos\MW\Config\PHPArray;
use Aimeos\MW\DB\Manager\DBAL;
use Aimeos\MW\Logger\Base;
use Aimeos\MW\Logger\File;
use Aimeos\MW\Session\None;
use Aimeos\MW\View\Helper\Number\Standard;

class TestHelperJobs
{

    private static $aimeos;

    private static $context;

    public static function bootstrap()
    {
        $aimeos = self::getAimeos();

        $includepaths = $aimeos->getIncludePaths();
        $includepaths[] = get_include_path();
        set_include_path(implode(PATH_SEPARATOR, $includepaths));
    }

    public static function getAimeos()
    {
        if (!isset(self::$aimeos)) {
            require_once 'Bootstrap.php';
            spl_autoload_register('Aimeos\\Bootstrap::autoload');

            self::$aimeos = new Bootstrap();
        }

        return self::$aimeos;
    }

    public static function getContext($site = 'unittest')
    {
        if (!isset(self::$context[$site])) {
            self::$context[$site] = self::createContext($site);
        }

        return clone self::$context[$site];
    }

    private static function createContext($site)
    {
        $ctx = new \Aimeos\MShop\Context\Item\Standard();
        $aimeos = self::getAimeos();

        $paths = $aimeos->getConfigPaths();
        $paths[] = __DIR__ . DIRECTORY_SEPARATOR . 'config';

        $conf = new PHPArray(array(), $paths);
        $conf = new Memory($conf);
        $ctx->setConfig($conf);

        $dbm = new DBAL($conf);
        $ctx->setDatabaseManager($dbm);

        $logger = new File($site . '.log', Base::DEBUG);
        $ctx->setLogger($logger);

        $cache = new \Aimeos\MW\Cache\None();
        $ctx->setCache($cache);

        $i18n = new \Aimeos\MW\Translation\None('de');
        $ctx->setI18n(array('de' => $i18n));

        $session = new None();
        $ctx->setSession($session);

        $localeManager = Factory::create($ctx);
        $locale = $localeManager->bootstrap($site, 'de', '', false);
        $ctx->setLocale($locale);

        $view = self::createView($conf);
        $ctx->setView($view);

        $ctx->setEditor('rlwebshop:cntl/jobs');

        return $ctx;
    }

    protected static function createView(Iface $config)
    {
        $view = new \Aimeos\MW\View\Standard(self::getTemplatePaths());

        $helper = new \Aimeos\MW\View\Helper\Config\Standard($view, $config);
        $view->addHelper('config', $helper);

        $sepDec = $config->get('client/html/common/format/seperatorDecimal', '.');
        $sep1000 = $config->get('client/html/common/format/seperator1000', ' ');
        $helper = new Standard($view, $sepDec, $sep1000);
        $view->addHelper('number', $helper);

        return $view;
    }

    public static function getTemplatePaths()
    {
        return self::getAimeos()->getCustomPaths('controller/jobs/templates');
    }

    public static function getControllerPaths()
    {
        return self::getAimeos()->getCustomPaths('controller/jobs');
    }
}
