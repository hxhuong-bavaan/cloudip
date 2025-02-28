<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocpetywf56l7',
  'passwordsalt' => 'dWUEhGMnyP+d/gUpNS83bdW/tmCpYL',
  'secret' => '6lNqxwd6+ywg2M9oy4lICuvLfFrKdxrszDDMtqvjxUGYE2Kk',
  'trusted_domains' => 
  array (
    0 => 'apps-cloudip.landofcoder.com',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '30.0.1.2',
  'overwrite.cli.url' => 'https://apps-cloudip.landofcoder.com',
  'dbname' => 'cloudipdev',
  'dbhost' => 'dbcloudip',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_landofcoder@gmail.com',
  'dbpassword' => 'gZ5Dm9ARqJQAR4CvJlbjMSLLaH6jI9',
  'installed' => true,
  "defaultapp" => "files",
  'app_install_overwrite' =>
  array (
      0 => 'widget',
      1 => 'contact',
      2 => 'myappboootstrap',
      3 => 'catgifs',
  )
);
