<?php
    $servername = "localhost";
    $database = "faceb";
    $username = "root";
    $password = "12";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connexion fallida: " . mysqli_connect_error());
    }
    
    mysqli_query($conn, "SET NAMES 'utf8'");
?>