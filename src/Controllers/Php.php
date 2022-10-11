<?php

namespace Controllers;
use Libs\BaseController;
class Php extends BaseController
{
    public function version()
    {
        return phpversion();
    }


}