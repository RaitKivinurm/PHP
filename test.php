<?php
/**
 * Created by PhpStorm.
 * User: Rait
 * Date: 30.01.2017
 * Time: 13:38
 */

// require the object creating and using class
require_once('text.php');
// create an object
$sentence = new text();
// control object output
echo '<pre>';
print_r($sentence);
echo '</pre>';
// set text
$sentence->setText('TERE text object!');
// control object output
echo '<pre>';
print_r($sentence);
echo '</pre>';
// show object output
$sentence->show();
echo '<hr/>';
// create an object
$sentence2 = new text('Tere text by construct!');
// control object output
echo '<pre>';
print_r($sentence2);
echo '</pre>';
// show object output
$sentence2->show();
?>