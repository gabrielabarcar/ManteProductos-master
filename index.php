<?php include_once 'include/encabezado.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Mantenimiento</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="estilo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<section>
    <br>
    <h1>Lista de Productos</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Presentación</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $listaProductos = listarProductos();
            if(count($listaProductos) >0):  
                foreach ($listaProductos as $posicion => $producto):
        ?>
                <tr>
                    <td><?=$producto['nombre'];?></td>
                    <td><?=$producto['marca'];?></td>
                    <td><?=$producto['presentacion'];?></td>
                    <td><?=$producto['cantidad'];?></td>
                    <td><?=$producto['precio'];?></td>
                    <td><a href="editar.php?nombre=<?=$producto['nombre'];?>">Editar</a></td>
                    <td><a href="manteProductos.php?accion=eliminar&nombre=<?=$producto['nombre'];?>">Borrar</a></td>
                </tr>
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
</section> 
<?php include_once 'include/pie.php'; ?>