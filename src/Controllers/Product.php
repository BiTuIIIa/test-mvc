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
        $plus_margin = $this->request->plus_margin;
        $fixa = $this->request->fixa;

        $pdo = new Model();

        if (isset($plus_margin) && ($fixa === null)) {

            $final_price = $original_price + (($margin / 100) * $original_price);
            $margin_mode = "margin";

            $pdo->connection->query("INSERT INTO `product` (`title`,`description`,`original_price`,`margin`,`margin_mode`,`final_price`) 
        VALUE ('$title','$description','$original_price','$margin', '$margin_mode','$final_price')");
            header('Location: /product/tables ');
            exit();
        } elseif (isset($fixa) && ($plus_margin === null)) {

            $final_price = $original_price + ((40 / 100) * $original_price);
            $margin_mode = "fix overpriced";
            $margin = 0;

            $pdo->connection->query("INSERT INTO `product` (`title`,`description`,`original_price`,`margin`,`margin_mode`,`final_price`) 
        VALUE ('$title','$description','$original_price','$margin', '$margin_mode','$final_price')");
            header('Location: /product/tables ');
            exit();
        } else {
            echo "Вы добрый человек но накинуть что то нужно!";

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
    {
        $title = $this->request->title;
        $description = $this->request->description;
        $original_price = $this->request->original_price;
        $margin = $this->request->margin;
        $plus_margin = $this->request->plus_margin;
        $fixa = $this->request->fixa;
        if (isset($id)) {
            $pdo = new Model();
            $pdo->connection->query("UPDATE `product` SET `title`='$title',`description`='$description',`original_price`='$original_price',
                `margin`='$margin' WHERE `id`= '$id'");

            header("Location:/product/tables");

        }
    }
}