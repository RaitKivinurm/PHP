<?php
/**
 * Created by PhpStorm.
 * User: Rait
 * Date: 19.01.2017
 * Time: 12:47
 */
require_once 'conf.php';
// create and template object
//define('CLASSES_DIR', 'classes/');
//define('TMPL_DIR', 'tmpl/');
//define('STYLE_DIR', 'css/');
require_once CLASSES_DIR.'template.php';
// and use it
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main.html');
// add pairs of temlate element names and real values
//$tmpl->set('menu', 'minu menüü');
require_once 'menu.php';
require_once 'act.php';
$tmpl->set('nav_bar', $sess->user_data['username']);
$tmpl->set('lang_bar', 'minu keeleriba');
$tmpl->set('content', 'minu sisu');
$tmpl->set('style', STYLE_DIR.'main.css');
$tmpl->set('header', 'minu lehe pealkiri');
// control the content of template object
echo '<pre>';
//print_r($sess);
echo '</pre>';
// output template content set up with real values
echo $tmpl->parse();

//echo '<pre>';
//print_r($db);
?>


