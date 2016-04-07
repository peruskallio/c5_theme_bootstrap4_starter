<?php defined('C5_EXECUTE') or die("Access Denied.");

$searchTarget = HOME_CID;
$searchPage = Page::getByPath('/search');
if (is_object($searchPage) && !$searchPage->isError()) {
    $searchTarget= $searchPage->getCollectionID();
}

$menu = BlockType::getByHandle('search');

$menu->controller->postTo_cID = $searchTarget;
$menu->controller->buttonText = t("Search");
$menu->controller->set('do_search', false);

$tpl = 'templates/header_search';
$menu->render($tpl);