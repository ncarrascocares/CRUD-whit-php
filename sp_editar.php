<?php
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];

    $con = mysqli_connect("localhost", "root", "", "prueba");
    $sql = "UPDATE talumno SET nom='$nom', ape='$ape' WHERE id like $id";
    $rta = mysqli_query($con, $sql);

    if (!$rta) {
        echo "No se Actualizo";
    }else{
        header("Location: index.php");
    }

?>