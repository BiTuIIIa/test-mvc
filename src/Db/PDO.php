<?php

$connection = new PDO ("mysql:host=localhost; dbname=users","root","Lfcfan1995");

//Прямой запрос
//Запись данных
$query ="INSERT client(client_id,first_name,last_name,password,email) VALUE ('5','Diego','Jota','77777','jota25@gmail.com')";
$connection->exec($query);//EXEC Выполнить внешнюю программу

// Подготовленый запрос

$clientid = 7;
$firstname = "Mats";
$lastname = "Humels";
$password = "993921";
$mail = "mats@gmail.com";


$param=[
    'clientid'=> $clientid,
    'firstname'=> $firstname,
    'lastname'=> $lastname,
    'p'=> $password,
    'mail'=> $mail
];

$sql ="INSERT client(client_id,first_name,last_name,password,email) VALUE (:clientid, :firstname, :lastname, :p, :mail)";// запрос
$queri = $connection->prepare($sql);//Новый обьект, обращаемся к обьекту екземляра класса PDO, вызываем prepare| PDO::prepare — Подготавливает запрос к выполнению и возвращает связанный с этим запросом объект

$queri->execute($param);
//execute — Запускает подготовленный запрос на выполнение

