<?php

namespace Libs;

abstract class BaseController
{

    protected $request;
    protected $view;


    public function __construct()
    {
        $request = new Request();
        $this->request = $request;

        $view = new View();
        $this->view = $view;




    }


}
