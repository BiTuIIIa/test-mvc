<?php
$connection = new PDO ("mysql:host=localhost; dbname=market","root","Lfcfan1995");


$user =
    'CREATE TABLE users (
    id INT PRIMARY KEY, 
    first_name VARCHAR(45) NOT NULL,
    last_name VARCHAR(45) NULL,
    email VARCHAR(45) NULL,
    password VARCHAR(45) NULL,
    role VARCHAR(45) NULL);';

$product =
    ' CREATE TABLE product (
    id INT PRIMARY KEY, 
    title VARCHAR(45) NULL,
    discription VARCHAR(45) NULL,
    original_price INT NULL,
    margin_price INT NULL,
    create_add VARCHAR(45) NULL,
    update_add VARCHAR(45) NULL);';

$product_img =
    'CREATE TABLE product_img (
    id INT PRIMARY KEY,
    product_id INT,
    image_pass VARCHAR(45),
    create_add VARCHAR(45),
    update_add VARCHAR(45));';

$order =
    'CREATE TABLE order (
    id INT PRIMARY KEY, 
    user_id INT,
    product_id INT,
    quantity INT,
    create_add VARCHAR(45),
    update_add VARCHAR(45));';

$coment =
    'CREATE TABLE coments(
     id INT PRIMARY KEY,
     user_id INT,
     product_id INT,
     coment VARCHAR(200),
     parent_coment_id INT,
     create_add VARCHAR(45),
     update_add VARCHAR(45));';

$rating =
    'CREATE TABLE rating (
     id INT PRIMARY KEY,
     user_id INT,
     product_id INT,
     rating INT,
     create_add VARCHAR(45),
     update_add VARCHAR(45));';

$connection->exec($user);
$connection->exec($product);
$connection->exec($product_img);
//$connection->exec($order);
$connection->exec($coment);
$connection->exec($rating);
