<?php
namespace Controllers;
use Libs\BaseController;
use Libs\Model;
use PDO;

class Authuser extends BaseController

{


    public function login(){
        $this->view->layoutsName="Base";
        $this->view->render("/Login");

    }
    public function validation(){

        session_start();

        $mail = $this->request->email;
        $password = $this->request->password;

        $pdo = new Model();
        $user = $pdo->connection->query("SELECT * FROM `adduser` WHERE `email` = '$mail'")->fetch(PDO::FETCH_ASSOC);

        if (empty($user)) {
            $_SESSION['error'] = "Неверный email, или он отсутвует в системе"; // если пользователь отсутсвует
            header("Location: /authuser/login");
            exit;
        }

        if (!password_verify($password,$user['password'])) {
            $_SESSION['error'] = "Неверный пароль"; // eсли пароли не совпадут
            header("Location: /authuser/login ");
            exit;
        }


        $_SESSION ['user'] = ["email" => $user['email'], "id" => $user['id']];

        header("Location: /test/index");
        exit;

    }

}