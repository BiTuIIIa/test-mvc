<?php

namespace Controllers;

use Libs\BaseController;

class Main extends BaseController
{

    public function main (){


        $this->view->layoutsName="BaseMain";
        $this->view->render("Main");
    }

}