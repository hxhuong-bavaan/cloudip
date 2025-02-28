<?php

namespace OCA\MyAppCustom\AppInfo;

use OCP\AppFramework\App;
use OCP\IContainer;
use OCA\MyApp\SideMenuOverrideService;

$app = new App('myappcustom');
$container = $app->getContainer();

\OCP\Util::addScript('myappcustom', 'script');
\OCP\Util::addStyle('myappcustom', 'bootstrap.min');
\OCP\Util::addStyle('myappcustom', 'style_navigation');
\OCP\Util::addStyle('myappcustom', 'style');
\OCP\Util::addStyle('myappcustom', 'bootstrap');
\OCP\Util::addScript('myappcustom', 'bootstrap.bundle.min');
\OCP\Util::addScript('myappcustom', 'chart');
\OCP\Util::addScript('myappcustom', 'chartjs-plugin-datalabels');
