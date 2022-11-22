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