<?php
define("SITE_URL", 'http://' . getenv('SERVER_NAME') . '/');
define("DIR_ROOT", (empty($_SERVER['SUBDOMAIN_DOCUMENT_ROOT'])?$_SERVER['DOCUMENT_ROOT']:$_SERVER['SUBDOMAIN_DOCUMENT_ROOT']).'/');
define("DIR_TEMPLATES", DIR_ROOT . 'templates/');
define("DIR_LIB", DIR_ROOT . 'lib/');
define("STYLE_URL", SITE_URL . '////style/style.css');
?>