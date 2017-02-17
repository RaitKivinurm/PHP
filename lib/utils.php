<?php
/**
 * Created by PhpStorm.
 * User: Rait
 * Date: 15.02.2017
 * Time: 12:23
 */

function fixDb($val){
    return '"'.addslashes($val).'"';
}
?>