<?php
require 'conection.php';
session_start();

$first_name = $_POST("first_name");
$password = $_POST("password");
$last_name = $_POST("last_name");
$email = $_POST("email");
$telephone = $_POST("telephone");

$q = "select count(*) as contar from users where user = '$first_name'  and password = '$password'";
$consulta = mysqli_query($conection, $q);
$array = mysqli_fetch_array($consulta);

if ($array["contar"]>0) {
    $_SESSION['first_name'];
    header("location: ../main.php");
}else{
echo "bad information";

}

?>