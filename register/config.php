
<?php

$server="auth-db542.hstgr.io"
$user=""
$pass=""
$database=""

$conn =
mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("No hay conexion")
}