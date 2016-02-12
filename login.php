<?php
//проверка авторизации
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=epicdb;charset=utf8','root','');
if(!empty($_POST['login'])){
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    //$preparedState = $pdo->query('INSERT INTO messages(userid,date,name) VALUES(0,now(),"$pabam")');
    $statement = $pdo->query('SELECT * FROM users');
    $admin = $statement->fetch(PDO::FETCH_ASSOC);

    if($admin['login'] == $login && $admin['password'] == $password) {
        $_SESSION['auth'] = 1;
        header('Location: /epicphp/newblog/index.php');
    }
    else {
        echo '<p>wrong password</p>';
        $_SESSION['auth'] = 0;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='001.css'>
    </head>
    <body>
        <form method='post' name='loginform' id='loginform' action='login.php'>
            <input name='login' type='text' value='login'>
            <input name='password' type='text' value='password'>
            <input name='go' type='submit' value='go ahead' class='submit'>
        </form>
    </body>
</html>