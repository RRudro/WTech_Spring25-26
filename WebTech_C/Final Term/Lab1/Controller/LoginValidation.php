<?php
session_start();
$username = "";
$password = "";
$username= $_POST["username"];
$password= $_POST["password"];

if(!$username || !$password)
{
    $_SESSION["usernameError"]="UserName & Password Required";
    Header("Location: ../View/Login.php");
}
else{
    $_SESSION["usernameError"]=" ";
}
?>