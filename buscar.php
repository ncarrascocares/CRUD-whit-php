<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="buscar" id="">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>
    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>NOMBRES</td>
                <td>APELLIDOS</td>
                <td>OPCIONES</td>
            </tr>
            <?php 
                $buscar = $_POST['buscar'];
                $con = mysqli_connect("localhost", "root", "", "prueba");
                $sql = "SELECT id, nom, ape FROM talumno WHERE nom like '$buscar' '%' order by id desc";
                $rta = mysqli_query($con, $sql);

                while ($mostrar = mysqli_fetch_row($rta)) {
             ?> 
             <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td>
                    <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?>&
                        nom=<?php echo $mostrar['1'] ?>&
                        ape=<?php echo $mostrar['2'] ?>
                        ">Editar</a>
                    <a href="sp_eliminar.php?id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                </td>
             </tr>   
            <?php
            }
            ?>
           
        </table>
    </div>
</body>
</html>