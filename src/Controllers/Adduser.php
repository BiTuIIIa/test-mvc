<?php

namespace Controllers;

use Libs\BaseController;
use Libs\Model;
use PDO;

class Adduser extends BaseController
{


    public function User(){

        $this->view->render("/User");

    }

    public function pushuser() {

       $firstname =  $this->request-> first_name;
       $lastname = $this->request-> last_name;
       $mail = $this->request->email;
       $password = $this->request-> password;
       $id = $this->request->id;

       $pdo = new Model();
       $check_email = $pdo->connection->query("SELECT * FROM `adduser` WHERE `email` = '$mail'")->fetch(PDO::FETCH_ASSOC);
       if (!empty($check_email)>0){
           echo "Данный @mail уже занят, попробуйте другой!";
           exit();
       }

       $hashed_password = password_hash($password,PASSWORD_DEFAULT);

       $pdo->connection->query("INSERT adduser (first_name,last_name,email,password) 
       VALUE ('$firstname','$lastname','$mail','$hashed_password')");
       header('Location: /authuser/login ');
       exit();

    }

    public function showuser(){

        $pdo = new Model();
        $all_user = $pdo->connection->query("SELECT * FROM `adduser` WHERE id > 0; ")->fetch(PDO::FETCH_ASSOC);
        if (!empty($all_user)){

            print_r($all_user) . '<br>';
        }


    }





}