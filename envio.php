<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="academia";
    $port = 3307;
    $con=mysqli_connect($host, $user, $password, $db, $port)or die("Problemas al Conectar");
        mysqli_select_db($con,$db);
    //Trabajando con las variables
    $nombres=$_POST["nombres"];
    $direction=$_POST["direction"];
    $correo=$_POST["correo"];
    $comentarios=$_POST["comentarios"];
    $sql="INSERT INTO datos VALUES ('$nombres','$direction','$correo','$comentarios')";
    $ejecutar=mysqli_query($con,$sql);
    //Usamos las condiciones
    if (!$ejecutar){
        echo "<script>alert('Problemas al Enviar')</script>";
        echo "<script>window.location.href=('index.html')</script>";
    }
    else{
        echo "<script>alert('Datos enviados correctamente')</script>";
        echo "<script>window.location.href=('index.html')</script>";
    }
?>
