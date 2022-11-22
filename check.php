<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>check cookie</title>
</head>

<?php
session_start();

if(!isset($_SESSION["cookie"])){
	header("Location: A12.php");
	die;
}
$cookie = $_SESSION["cookie"];

echo $cookie;
?>
<body>
    <form method="post" action="A12.php">
        <input type="submit" value="HOME" />
    </form>
</body>
</html>