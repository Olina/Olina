<?php
//
// PHASE: BOOTSTRAP
//
define('LYDIA_INSTALL_PATH', dirname(__FILE__));
define('LYDIA_SITE_PATH', LYDIA_INSTALL_PATH . '/site');

require(LYDIA_INSTALL_PATH.'/src/COlina/bootstrap.php');

$olina = COlina::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$olina->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$olina->ThemeEngineRender();
