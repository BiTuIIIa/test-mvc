<?php


spl_autoload_register(function ($class) {
    require_once "src/" . str_replace("\\","/", $class) . ".php";
});


//1. Папки с большой класы с большой - done
//2.сокр автолоад - done
/*
 * function autoload ($class){
    var_dump($class);
    $src ="src/" . $class; // src/Controllers\Users\Userlist
    $srcf = str_replace("\\","/",$src)  ; // src\Controllers\Users\Userlist
    $dotPhp = ".php";
    $final = $srcf . $dotPhp;
    require_once $final;
}
 */