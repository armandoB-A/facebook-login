<?php
include("conexion.php");
if (isset($_POST['usuario']) && isset($_POST['contra'])) {
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];
    if ($usuario=="" || $contra=="") {
        header("location:index.php?log=false");
    }
    $queryP = "INSERT INTO usuarios VALUES(DEFAULT, '".$usuario."', '".$contra."');";
    echo $queryP;
    $exeqQuery = mysqli_query($conn, $queryP);
    
    if ($exeqQuery) {
        header("www.facebook.com");
    }
}