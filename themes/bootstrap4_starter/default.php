<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('elements/header.php'); ?>

        <div id="content">
            <?php
                $a = new Area('Main');
                $a->enableGridContainer();
                $a->display($c);
            ?>

            <?php
                $a = new Area('Page Footer');
                $a->enableGridContainer();
                $a->display($c);
            ?>
        </div>

<?php $view->inc('elements/footer.php') ?>