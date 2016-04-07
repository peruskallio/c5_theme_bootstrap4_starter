<?php

namespace Concrete\Package\ThemeBootstrap4Starter;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Support\Facade\Facade;
use Concrete\Package\ThemeBootstrap4Starter\Src\Page\Theme\GridFramework\Type\Bootstrap4 as Bootstrap4GridFramework;
use Exception;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{

    protected $pkgHandle = 'theme_bootstrap4_starter';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.0.1';

    public function getPackageName()
    {
        return t("Bootstrap 4 Starter Theme");
    }

    public function getPackageDescription()
    {
        return t("Provides a Bootstrap 4 starter example theme built with SCSS for concrete5. Uses the Asset Pipeline package for the asset preprocessing.");
    }

    public function install()
    {
        if (!is_object(Package::getByHandle('asset_pipeline'))) {
            throw new Exception(t("You need to install the '%s' package in order to install this package!", t("Asset Pipeline")));
        }

        $pkg = parent::install();

        // Install the theme
        Theme::add('bootstrap4_starter', $pkg);
    }

    public function on_start()
    {
        $app = Facade::getFacadeApplication();
        $manager = $app->make('manager/grid_framework');
        $manager->extend('bootstrap4', function($app) {
            return new Bootstrap4GridFramework();
        });
    }

}
