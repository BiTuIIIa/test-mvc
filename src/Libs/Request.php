<?php

namespace Libs;

class Request
{
    private $params = [];

    public function all(){

        return $this->params;

    }

    public function getMethod(){
        return $_SERVER["REQUEST_METHOD"];

    }

    public function __construct()
    {
        foreach ($_REQUEST as $k => $v) {

            $this->params[$k] = $v;
        }
    }

    public function __get($key)
    {

        if (array_key_exists($key, $this->params)) {
            return  $this->params[$key];
        }


    }

    public function __set($key, $value)
    {
         $this->params[$key] = $value;
    }

}


// 1. Public  metod All ->  вернёт массив парамс

// 2. Public metod GetMethod -> вернёт каким методом был запрос

// cоздать класс Calculatior (4 метода: +-/*), когда обращаюсь в эти медоты (/*) использовать метод пост/ нум 1 нум 2
