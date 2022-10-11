<?php

namespace Controllers;
use Libs\BaseController;
class Product extends BaseController
{


    public function time()
    {
        return date("d-m-Y H i s");

    }

    public function calculate(){

        $this->view->render("/Calculate");

        //include __DIR__ . "/../Views/Calculate.php";
    }

    public function totalPrise(){
       $nonalog = $this->request->price * $this->request->quantity;
       return ($nonalog)+(($nonalog) * 0.2);
    }




}

//SingleTon