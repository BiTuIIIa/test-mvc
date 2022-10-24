<?php

namespace Controllers;
use Libs\BaseController;
use Libs\Model;
use PDO;

class Product extends BaseController
{

    public function viewproduct()
    {
        $this->view->layoutsName = "BaseMain";
        $this->view->render("Product");

    }

    public function Tables()
    {
        $this->view->layoutsName = "BaseMain";
        $this->view->render("Tableproduct");
    }

    public function viewed()
    {

        $this->view->layoutsName = "BaseMain";
        $this->view->render("Productedit", ['id' => $this->request->id]);

    }


    public function addproduct()
    {

        $title = $this->request->title;
        $description = $this->request->description;
        $original_price = $this->request->original_price;
        $margin = $this->request->margin;
        $margin_mode=$this->request->margin_mode;
        $final_price=$this->request->final_price;
        $id_user=$this->request->id_user;



        if (isset($title) ) {

            $pdo = new Model();
            $pdo->connection->query("INSERT INTO `product` (`title`,`description`,`original_price`,`margin`,`margin_mode`,`final_price`,`id_user`) 
        VALUE ('$title','$description','$original_price','$margin', '$margin_mode','$final_price','$id_user')");
            header('Location: /product/tables ');
            exit();
        } else {
            echo "error";
        }
    }

    public function delproduct()
    {
        $pdo = new Model();
        $id = $this->request->id;
        if (isset($id)) {
            $pdo->connection->query("DELETE  FROM `product`  WHERE `id` ='$id'");
            header("Location:/product/tables");
        }
    }


    public function edit()
    {   $id = $this->request->id;
        $title = $this->request->title;
        $description = $this->request->description;
        $original_price = $this->request->original_price;
        $margin = $this->request->margin;
        $margin_mode=$this->request->margin_mode;
        $final_price=$this->request->final_price;
        $id_user=$this->request->id_user;

        if (isset($id) && ($id_user>0) ) {
            $pdo = new Model();
            $pdo->connection->query("UPDATE `product` SET `title`='$title',`description`='$description',`original_price`='$original_price',
                `margin`='$margin',`margin_mode`='$margin_mode',`final_price`= '$final_price',`id_user`='$id_user' WHERE `id`= '$id'");

            header("Location:/product/tables");
        }


    }
}