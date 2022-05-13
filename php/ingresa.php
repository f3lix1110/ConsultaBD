<?php
include("conecta.php");

$name = $_POST['name']; //capturamos el dato mediante el metodo POST por el name del input

$insertar = "INSERT INTO nombres(name) VALUE ('$name')"; //insecion del dato

$res = mysqli_query($con, $insertar); //ejecutamos la funcion con la conexion y consulta

if($res){
    echo "<script>alert('enviado con exito');
    window.location='../tabla.php'</script>"; //redireccionamos a la tabla para vizualizar los datos
}else{
    echo "<script>alert('error');window-history.go(-1);</script>";
}

?>