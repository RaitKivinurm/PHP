<?php
/**
 * Created by PhpStorm.
 * User: Rait
 * Date: 19.01.2017
 * Time: 14:54
 */

// create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
require_once CLASSES_DIR . 'template.php';
// and use it
// create an empty template object
$tmpl = new template();
// set up the file name for template
$tmpl->file = 'main.html';
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
// load template file content
$tmpl->loadFile();
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
echo '<hr/>';
$main = new template('main.html');
echo '<pre>';
print_r($main);
echo '</pre>';
?>