<?php
require_once(DIR_LIB . 'Twig/Autoloader.php');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(DIR_TEMPLATES);
$twig = new Twig_Environment($loader);
$twig->addGlobal('site_url', SITE_URL);
$twig->addGlobal('style', STYLE_URL);
$template = $twig->loadTemplate($tpl_file);
$template->display($tpl_vars);
?>