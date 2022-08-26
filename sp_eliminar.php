<?php
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "prueba");
    $sql = "DELETE FROM talumno WHERE id like $id";
    $rta = mysqli_query($con, $sql);

    if (!$rta) {
        echo "No se Elimino";
    }else{
        header("Location: index.php");
    }

?>