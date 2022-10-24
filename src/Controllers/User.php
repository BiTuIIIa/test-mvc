<?php

namespace Controllers;

use Libs\BaseController;
use Libs\Model;
use PDO;

class User extends BaseController
{


    public function viewuser()
    {
        $this->view->layoutsName = "BaseMain";
        $this->view->render("User");

    }

    public function Tables()
    {
        $this->view->layoutsName = "BaseMain";
        $this->view->render("Tablesuser");

    }

    public function viewed()
    {




        $this->view->layoutsName = "BaseMain";
        $this->view->render("Useredit",['id'=>$this->request->id]);


    }


    public function adduser()
    {

        $firstname = $this->request->first_name;
        $lastname = $this->request->last_name;
        $mail = $this->request->email;
        $password = $this->request->password;


        $pdo = new Model();
        $check_email = $pdo->connection->query("SELECT * FROM `adduser` WHERE `email` = '$mail'")->fetch(PDO::FETCH_ASSOC);
        if (!empty($check_email) > 0) {
            echo "Данный @mail уже занят, попробуйте другой!";
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $pdo->connection->query("INSERT INTO `adduser` (`first_name`,`last_name`,`email`,`password`) 
        VALUE ('$firstname','$lastname','$mail','$hashed_password')");
        header('Location: /user/tables ');
        exit();

    }

    public function deluser()
    {
        $pdo = new Model();
        $id = $this->request->id;
        if (isset($id)) {
            $pdo->connection->query("DELETE  FROM `adduser`  WHERE `id` ='$id'");
            header("Location:/user/tables");
        }
    }


    public function edit()
    {
        $id = $this->request->id;
        $firstname = $this->request->first_name;
        $lastname = $this->request->last_name;
        $mail = $this->request->email;
        if (isset($id)) {
            $pdo = new Model();
            $pdo->connection->query("UPDATE `adduser` SET `first_name`='$firstname',`last_name`='$lastname',`email`='$mail' WHERE `id`= '$id'");

            header("Location:/user/tables");

        }
    }


    public function seluser (){


          $pdo = new Model();
          $user =  $pdo->connection->query("SELECT * FROM `adduser` ")->fetchAll(PDO::FETCH_ASSOC);
          return json_encode($user);

        }


}