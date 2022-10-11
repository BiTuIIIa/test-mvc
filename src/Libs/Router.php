<?php

namespace Libs;

class Router
{
    private $className;
    private $methodName;



    public function __construct()
    {
        $a = trim($_SERVER["REQUEST_URI"], "/");// /product/time -> trim product/time?quri=name&alm?

        $cat = strpos($a, "?");

        if ($cat !== false) {

            $str = substr($a, 0, $cat);//"base/param" - тут я обрезаю всё что полсле знака ? включая знак

        }else {

            $str = $a;
        }

        $b = explode("/", $str); // ["0"=>"product","1"=>"time"]
        $this->className = ucfirst($b[0]); // делаем заглавную 1ю букву  (P)roduct
        $this->methodName =  $b[1]; // time


    }

    public function getClassName()
    {

        return "Controllers\\" .  $this->className;
    }


    public function getMetodName(){

        return $this->methodName;
    }



}


