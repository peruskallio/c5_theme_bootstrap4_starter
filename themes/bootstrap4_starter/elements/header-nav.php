<?php defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Support\Facade\Facade;

$app = Facade::getFacadeApplication();

$menu = BlockType::getByHandle('autonav');

if ($app->make('multilingual/detector')->isEnabled()) {
    $menu->controller->displayPages = 'second_level';
} else {
    $menu->controller->displayPages = 'top';
}
$menu->controller->displayPages = 'top';

$menu->controller->orderBy = 'display_asc';
$menu->controller->displaySubPages = 'none';
$menu->controller->displaySubPageLevels = 'enough';
$menu->controller->set("displayParentPage", true);

$tpl = 'templates/header_menu';
$menu->render($tpl);