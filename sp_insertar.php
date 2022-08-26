<?php

    $nom = $_POST['nom'];
    $ape = $_POST['ape'];

    $con = mysqli_connect("localhost", "root", "", "prueba");
    $sql = "INSERT INTO talumno (nom, ape) VALUE ('$nom','$ape')";
    $rta = mysqli_query($con, $sql);

    if (!$rta) {
        echo "No se inserto";
    }else{
        header("Location: index.php");
    }

?>