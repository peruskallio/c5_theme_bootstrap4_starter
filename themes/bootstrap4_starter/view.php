<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $view->inc('elements/header.php'); ?>

        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                    <?php echo $innerContent ?>
                    <?php
                        $a = new Area('Main');
                        $a->display($c);
                    ?>
                    </div>
                </div>
            </div>
        </div>

<?php $view->inc('elements/footer.php') ?>