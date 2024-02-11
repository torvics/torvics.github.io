<?php
#print_r($_POST);

    if (empty($_POST["user"]) || empty($_POST["pswd"])){
        header("Location:index.php?error=200");
    }

    $SQL = "SELECT * FROM alumnos WHERE expediente = ".$_POST["user"]." 
        AND contrasenia = MD5('".$_POST["pswd"]."'); ";

    #echo $SQL;

    $connection = mysqli_connect("localhost","root","","sistema_escolar")or die("falsió la conesion");

    $result = mysqli_query($connection, $SQL) or die("falsió la kueri");

    #print_r($result);

    if ($result->num_rows == 1) {
        header("Location:menu.php");

    
    }else{
        header("Location:index.php?error=100");

    }

mysqli_close($connection);



















