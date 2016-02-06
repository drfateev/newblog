<?php
session_start();
if(!empty($_POST["token"])){
    if($_SESSION["token"] !== $_POST["token"]){
        header ('Location: http://lenta.ru/');
    }
}
if(!empty($_COOKIE["backColor"])){
    if($_COOKIE['backColor'] == "pink"){
        $style = "002.css";
    } elseif ($_COOKIE['backColor'] == "blue") {
        $style = "001.css";
    }
    if($_COOKIE['backColor'] == "pink"){
        setcookie('backColor','blue');
    } elseif ($_COOKIE['backColor'] == "blue") {
        setcookie('backColor','pink');
    }
} else {
    setcookie("backColor","blue");
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo $style; ?>">
</head>
<body>
<h1>Blog</h1>
<?php
var_dump($_COOKIE);
echo "<br>";

$pdo = new PDO("mysql:host=localhost;dbname=epicdb;charset=utf8","root","");
//var_dump($_GET);
if(!empty($_POST["txt"])){
    $pabam = $_POST["txt"];
    //$preparedState = $pdo->query("INSERT INTO messages(userid,date,name) VALUES(0,now(),'$pabam')");
    $preparedState = $pdo->prepare("INSERT INTO messages(userid,date,name) VALUES(0,now(),:mess)");
    $preparedState->execute([':mess'=>$pabam]);
}
$statement = $pdo->query("SELECT messages.name, messages.date, users.login FROM messages LEFT JOIN users ON messages.userid = users.id");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($row as $item) {
    echo (htmlspecialchars($item["name"]).'</br>'.'дата поста: '.htmlentities($item["date"]).'</br>пользователь: '.htmlentities($item["login"]).'</br></br></br>');
}
//echo md5('1123581321');
//echo md5('1123581321');
$token = uniqid();
$_SESSION['token'] = $token;
?>
<h4>New Post</h4>
<form method="post" action="index.php">
    <textarea name="txt" id="txt" rows="12"></textarea></br>
    <input type="submit" value="send" name="action">
    <input type="hidden" value="<?= $token ?>" name="token">
</form>
<p>Hello body</p>
<p>How are you?</p>
</body>
</html>