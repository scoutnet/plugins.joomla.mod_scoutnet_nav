<?php
/**
 * Einbindung des ScoutNet Navigator zum Suchen von Gruppen
 *
 * (c) 2012, Manfred Loebling
 */

// Verhindern, dass die Datei direkt aufgerufen wird
defined('_JEXEC') or die('Restricted access');

// helper.php aufrufen
JLoader::import('mod_scoutnet_nav.helper', JPATH_SITE.DS.'modules');

// default.php einbinden (tmpl)
require(JModuleHelper::getLayoutPath('mod_scoutnet_nav'));
?>
