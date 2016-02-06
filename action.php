<?php
$postValue = htmlentities($_GET["txt"]);
echo $postValue;
$pdo = new PDO("mysql:host=localhost;dbname=epicdb;charset=utf8","root","");
$pdo->query("INSERT INTO messages(userid,date,name) VALUES(0,now(),'$postValue')");
var_dump($_GET);