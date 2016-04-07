<?php defined('C5_EXECUTE') or die("Access Denied.");

$menu = BlockType::getByHandle('switch_language');
$menu->render("templates/list");