<?php
/**
 * Created by PhpStorm.
 * User: Rait
 * Date: 19.01.2017
 * Time: 12:47
 */

// create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
require_once CLASSES_DIR.'template.php';
// and use it
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main.html');
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
?>



