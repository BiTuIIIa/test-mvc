<?php

namespace Controllers;

class Logout
{

  public function exitSes(){

      session_start();
      unset($_SESSION['user']);
      header("Location: /test/index");

  }

}