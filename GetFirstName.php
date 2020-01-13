<?php
/**
 * Created by PhpStorm.
 * User: Danilo
 * Date: 13/01/2020
 * Time: 17:54
 */

class GetFirstName{

    function palavra($s){
        
        $sp = preg_split('[ ]',$s);
        $res = $sp[0];

        return $res;
    }

}