<?php
require "data/basedatos.php";


$sql = "SELECT * FROM departamentos";

$resultado = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPARTAMENTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
<h1>Registro Departamento </h1>
<hr></hr>
<a href="nuevo_depa.php" class="btn btn-primary">Nuevo</a>
<table class="table">
    <thead>
        <tr>
        <th>Titulo</th>
        <th>Precio</th>
        <th>Descripcion</th>
        <th>Habitaciones</th>
        <th>Estacionamiento</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($departamentos = $resultado->fetch_assoc()):
        ?>
         <tr>
                            <td><?php echo $departamentos['titulo']?></td>
                            <td><?php echo $departamentos['precio']?></td>
                            <td><?php echo $departamentos['descripcion']?></td>
                            <td><?php echo $departamentos['habitaciones']?></td>
                            <td><?php echo $departamentos['estacionamiento']?></td>
             
                        
                        </tr>
                        <?php
                        endwhile;
                        ?>
                        </tbody>    
                </table>
                <a href="index.php"class="btn btn-danger">Regresar</a>
                    </div>
            </boy>
        </html> 