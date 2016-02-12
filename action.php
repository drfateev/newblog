<?php
//проверка авторизации
session_start();
if($_SESSION['auth'] !== 1){
    header('Location: /epicphp/newblog/login.php');
}
//$pdo = new PDO('mysql:host=localhost;dbname=epicdb;charset=utf8','root','');
//$deleteState = $pdo->query('DELETE FROM messages WHERE messages.id = 74');

