<?php

namespace Libs;


class View
{
    public $layoutsName = "Base";

    public function render($view)
    {
        if (file_exists(__DIR__ . "/../Views/" . $view . ".php")){
       $file =  __DIR__ . "/../Views/" . $view . ".php";
        require_once __DIR__ ."/../Views/Layouts/" . $this->layoutsName . ".php";
        }
        else {
            throw new \Exception("файл не существует");
        }
    }
}
