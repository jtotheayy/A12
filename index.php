<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>A12 Cookies Jay Santamaria</title>
</head>

<body>
    <form method="post">
        <label for="cookie"><strong>Enter a data for a Cookie:</strong></label>
        <input type="text" id="cookie" name="cookie" />
        <br />
        <input type="submit" value="Submit" />
    </form>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
session_start();

$cookie = $_POST['cookie'];
$_SESSION["cookie"] = $cookie;


if (isset($cookie)) {
	header("Location:check.php");
}

}
?>
</html>
