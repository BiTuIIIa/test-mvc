<?php

namespace Controllers;


use Libs\BaseController;

class Calculator extends BaseController
{

    public function summ (){

       return $this->request->num1 + $this->request->num2;
    }

    public function min(){

        return $this->request->num1 - $this->request->num2;
    }

    public function del(){

        return $this->request->num1 / $this->request->num2;

    }
    public function umn(){

        return $this->request->num1 * $this->request->num2;

    }





}