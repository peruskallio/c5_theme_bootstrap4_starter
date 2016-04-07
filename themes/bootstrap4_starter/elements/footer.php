<?php
use Concrete\Core\Multilingual\Page\Section\Section;

defined('C5_EXECUTE') or die("Access Denied.");

$ms = Section::getBySectionOfSite($c);

$homelink = DIR_REL . '/';
if (is_object($ms)) {
    $lang = $ms->getLanguage();
    $nav = Core::make("helper/navigation");
    $homelink = $nav->getCollectionUrl($ms);
}

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>
    <footer id="footer-theme">
        <?php  if ($displayFirstSection) : ?>
        <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <?php
                        $a = new GlobalArea('Footer Site Title');
                        $a->display();
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php
                        $a = new GlobalArea('Footer Social');
                        $a->display();
                    ?>
                </div>
            </div>
        </div>
        </section>
        <?php endif; ?>
        <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <?php
                    $a = new GlobalArea('Footer Legal');
                    $a->display();
                ?>
                </div>
                <div class="col-sm-3">
                    <?php
                        $a = new GlobalArea('Footer Navigation');
                        $a->display();
                    ?>
                </div>
                <div class="col-sm-3">
                    <?php
                        $a = new GlobalArea('Footer Contact');
                        $a->display();
                    ?>
                </div>
            </div>
        </div>
        </section>
    </footer>

    <footer id="concrete5-brand">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span><?php  echo t('Built with <a href="http://www.concrete5.org" class="concrete5">concrete5</a> CMS.')?></span>
                    <span class="pull-right">
                        <?php  echo Core::make('helper/navigation')->getLogInOutLink()?>
                    </span>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #container -->

<?php echo $assets->javascript(array(
    'lib/tether.js',
    'bootstrap/util.js',
    'bootstrap/tooltip.js',
)); ?>
<?php View::element('footer_required'); ?>

</body>
</html>
