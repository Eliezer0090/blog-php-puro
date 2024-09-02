<?php 
//conexion con la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

//verificar la conexion
if (mysqli_errno($conexion)) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
}else{
    echo "Conectado a la base de datos";
}


//consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// consulta select desde php
$query= mysqli_query($conexion, "select * from notas");
$notas=mysqli_fetch_assoc($query); // solo muestra un resuiltado no todo el contenido
while($nota=mysqli_fetch_assoc($query)){
    //var_dump($notas);
    echo   $nota['descripcion'];
    }
// insertar datos
$sql="INSERT INTO notas VALUES (null, 'Nota de php', 'Esto es una nota de php', 'green')";
$insert=mysqli_query($conexion,$sql);

if ($insert) {
    echo "Nota agregada con exito";
    } else {
        echo "Error :".mysqli_error($conexion);
}
?>