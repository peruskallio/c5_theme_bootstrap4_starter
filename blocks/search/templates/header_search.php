<?php defined('C5_EXECUTE') or die('Access Denied.');

if (isset($error)) {
    ?><?php echo $error?><br/><br/><?php
}

if (!isset($query) || !is_string($query)) {
    $query = '';
}

?>
<form action="<?php echo $view->url($resultTargetURL)?>" method="get" class="ccm-search-block-form form-inline pull-xs-right"><?php
    if (isset($title) && ($title !== '')) {
        ?><h3><?php echo h($title)?></h3><?php
    }
    if ($query === '') {
        ?><input name="search_paths[]" type="hidden" value="<?php echo htmlentities($baseSearchPath, ENT_COMPAT, APP_CHARSET) ?>" /><?php
    } elseif (isset($_REQUEST['search_paths']) && is_array($_REQUEST['search_paths'])) {
        foreach ($_REQUEST['search_paths'] as $search_path) {
            ?><input name="search_paths[]" type="hidden" value="<?php echo htmlentities($search_path, ENT_COMPAT, APP_CHARSET) ?>" /><?php
        }
    }
    ?><input name="query" type="text" value="<?php echo htmlentities($query, ENT_COMPAT, APP_CHARSET)?>" class="ccm-search-block-text form-control" /><?php
    if (isset($buttonText) && ($buttonText !== '')) {
        ?> <input name="submit" type="submit" value="<?php echo h($buttonText)?>" class="btn btn-outline-primary ccm-search-block-submit" /><?php
    }
    ?>
</form>
