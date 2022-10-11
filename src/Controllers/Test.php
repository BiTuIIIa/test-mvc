<?php

namespace Controllers;

use Libs\BaseController;

class Test extends BaseController
{


    public function index(){

        $this->view->render("/Test");

    }


}