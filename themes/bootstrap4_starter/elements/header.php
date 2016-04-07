<?php
use Concrete\Core\Multilingual\Page\Section\Section;

defined('C5_EXECUTE') or die("Access Denied.");

$ms = Section::getBySectionOfSite($c);

$lang = 'en';
$homelink = Core::make('app_relative_path') . '/';
if (is_object($ms)) {
    $lang = $ms->getLanguage();
    $nav = Core::make("helper/navigation");
    $homelink = $nav->getCollectionUrl($ms);
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <?php echo $assets->css(array(
        'style.scss',
    )); ?>

<!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $view->getThemePath() ?>/js/ie/html5-shiv.js"></script>
    <script type="text/javascript" src="<?php echo $view->getThemePath() ?>/js/ie/respond.js"></script>
<![endif]-->

    <?php echo View::element('header_required'); ?>
</head>
<body>

<div id="container" class="<?php echo $c->getPageWrapperClass()?>">

    <div class="pos-f-t">
        <nav class="navbar navbar-light bg-faded">
            <a class="navbar-brand" href="<?php echo $homelink ?>"><?php echo Config::get('concrete.site') ?></a>

            <?php $view->inc('elements/header-nav.php'); ?>

            <?php $view->inc('elements/header-search.php'); ?>
        </nav>
    </div>

