<?php

namespace Concrete\Package\ThemeBootstrap4Starter\Theme\Bootstrap4Starter;

use Concrete\Core\Asset\Asset;
use Concrete\Core\Asset\AssetList;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die("Access Denied.");

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap4';

    public function registerAssets()
    {
        // We want to utilize the internal minifying logic for the theme's own
        // JavaScript. If new files are needed, add them here.
        $al = AssetList::getInstance();
        $al->register(
            'javascript',
            'site',
            'themes/bootstrap4_starter/js/site.js',
            array(
                'version' => '0.1',
                'position' => Asset::ASSET_POSITION_FOOTER,
                'minify' => true,
                'combine' => true
            ),
            $this->getPackageHandle()
        );

        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'picturefill'); // Responsive images fallback
        $this->requireAsset('javascript', 'site');

        $this->providesAsset('javascript', 'bootstrap/tooltip');

        $this->providesAsset('css', 'bootstrap/tooltip');
        $this->providesAsset('css', 'blocks/page_list');
    }

    public function getThemeEditorClasses()
    {
        return array(
            // Custom styles for the content editor (Redactor)
            //array('title' => t('Standard Button'), 'menuClass' => '', 'spanClass' => 'btn btn-default'),
        );
    }

    public function getThemeBlockClasses()
    {
        return array(
            // Custom classes for the blocks
            //'content' => array('custom-class'),
        );
    }

    public function getThemeResponsiveImageMap()
    {
        return array(
            'lg' => '1600px',
            'md' => '1200px',
            'sm' => '768px',
            'xs' => '0',
        );
    }
}