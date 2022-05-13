<?php
include("conecta.php");

$id = $_POST['eliminar'];

$delete = "DELETE FROM nombres WHERE id=$id"; //insecion del dato

$res = mysqli_query($con, $delete); //ejecutamos la funcion con la conexion y consulta

if($res){
    echo "<script>alert('eliminado con exito');
    window.location='../tabla.php'</script>"; //redireccionamos a la tabla para vizualizar los datos
}else{
    echo "<script>alert('error');</script>";
}


?>