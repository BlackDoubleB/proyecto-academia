<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="academia";
    $port = 3307;
    $con=mysqli_connect($host, $user, $password, $db, $port)or die("Problemas al Conectar");
        mysqli_select_db($con,$db);
    //Trabajando con las variables
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $sql=mysqli_query($con,"SELECT * FROM academia WHERE usuario='".$usuario."' and password='".$password."' ");
    $nr=mysqli_num_rows($sql);
    //Uso mi condicional
    if ($nr==1){
        header("Location:pagina.html");
    }
    else{
        echo "<script>alert('Usuario Incorrecto');</script>";
        echo "<script>window.location.href=('login.html');</script>";
    }
?>
