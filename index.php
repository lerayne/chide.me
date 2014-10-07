<?php
/**
 * Created by PhpStorm.
 * User: M. Yegorov
 * Date: 2014-10-07
 * Time: 11:52
 */

$protocol = explode('/', $_SERVER['SERVER_PROTOCOL']);
$protocol = strtolower($protocol[0]);

define('URL', $protocol .'://'. $_SERVER['HTTP_HOST'] . ($_SERVER["SERVER_PORT"] == '80' ? '' : $_SERVER["SERVER_PORT"]) . $_SERVER['REQUEST_URI'] );
define('LIB', 'bower_components');
define('APPDIR', './');

require APPDIR.'template.php';