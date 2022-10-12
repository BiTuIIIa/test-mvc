<?php

namespace Controllers;

class Logout
{

  public function exitSes(){

      unset($_SESSION['user']);
      header("Location: /login/login");

  }

}