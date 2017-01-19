<?php
/**
 * Created by PhpStorm.
 * User: Rait
 * Date: 19.01.2017
 * Time: 14:45
 */

class text
{//text class begin
    // class varibles = instsnce varibles

    var $str = '';

    //methods
    //set text function

    function setText($s)
    {
        $this->str = $s;
    }//setTEXT

    // show text Function
    function show()
    {
        echo $this->$str . '<br/>';
    }//show
}//text class end
?>