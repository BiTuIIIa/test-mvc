<?php

namespace Libs;

class View
{
    public $layoutsName = "Base";

    public function render($view)
    {
        if (file_exists(__DIR__ . "/../Views/" . $view . ".php")){
        $content = file_get_contents(__DIR__ . "/../Views/" . $view . ".php");
        include __DIR__ ."/../Views/Layouts/" . $this->layoutsName . ".php";
        }
        else {
            echo "файла: " . "<b>".$view."</b>"  . " нет в директории!";
        }
    }
}
