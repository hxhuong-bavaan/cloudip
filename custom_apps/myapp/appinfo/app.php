<?php

namespace OCA\MyApp\AppInfo;

use OCP\AppFramework\App;
use OCP\IContainer;
use OCA\MyApp\SideMenuOverrideService;

$app = new App('myapp');
$container = $app->getContainer();

\OCP\Util::addScript('myapp', 'custom_side_menu_script');
\OCP\Util::addStyle('myapp', 'custom_style');
\OCP\Util::addStyle('myapp', 'css_contact');
\OCP\Util::addStyle('myapp', 'css_account');
\OCP\Util::addScript('myapp', 'custom-search');