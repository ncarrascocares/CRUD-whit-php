<?php
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $ape = $_GET['ape'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <div>
        <form action="sp_editar.php" method="post">
            <table>
                <tr>
                    <td>Editar Datos:</td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?=$id?>">
                </tr>
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" name="nom" value="<?=$nom?>"></td>
                </tr>
                <tr>
                    <td>APELLIDO</td>
                    <td><input type="text" name="ape" value="<?=$ape?>"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Editar">
                        <a href="index.php">Cancelar</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>