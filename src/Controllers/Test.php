<?php

namespace Controllers;

use Libs\BaseController;

class Test extends BaseController
{


    public function index(){
        var_dump($_SESSION);
        $this->view->render("/Test");

    }


}