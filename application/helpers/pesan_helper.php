<?php
defined('BASEPATH') or exit('No direct script access allowed');

function hp($string){

    $string = str_replace(" ","",$string);
    $string = str_replace("(","",$string);
    $string = str_replace(") ","",$string);
    $string = str_replace(".","",$string);

    if(!preg_match('/[^+0-9]/',trim($string))){
        if(substr(trim($string), 0, 3)=='+62'){
            $string = trim($string);
        }elseif(substr(trim($string),0,1)==0){
            $string = '+62'.substr(trim($string), 1);
        }
    }else{
        $string = 'Format no hp yang dimasukan salah';
    }
    return $string;
}