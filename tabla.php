<?php
include("./php/conecta.php");
$nombres = "SELECT * FROM nombres";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="js/jquery-3.3.1.min.js" > </script> <!--archivo jquery para funcion hide-->

                        <script> //FUNCION PARA OCULTAR
                        function oculta(nfila){

                        $('#'+nfila).hide();}
                        </script>

    <title>Nombres</title>
</head>
<body>

    <div class="container">
      <div class="col">NAMES IN THE TABLE</div>
        <div class="row">
          <div class="col">
           ID
          </div>
          <div class="col">
          NAME
          </div>
          <div class="col">
           *
          </div>
          <div class="col">
           X
          </div>
        </div><!--first row-->
        <?php $res = mysqli_query($con,$nombres);
        
        while($row=mysqli_fetch_assoc($res))
        {?>
        <div class="row" id="<?php echo $row["id"];?>" name="id" value="<?php echo $row["id"];?>">
          <div class="col">
           <?php echo $row["id"];?>
          </div>
          <div class="col">
            <?php echo $row["name"];?>
          </div>

          <div class="col"><!--BOTON OCULTAR-->
          <input onclick="oculta(<?php echo $row['id'];?>);" type="submit" value="Hide" >
          </div>

          <div class="col"> <!--BOTON ELIMINAR-->
          <form action="./php/eliminar.php" method="post">
        <input type="hidden" name="eliminar" value="<?php echo $row['id'];?>"> 
        <button type="submit">Delete</button>
          </form>
          </div>

        </div>
</form>
        <?php } ?>

      </div><!--Container-->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="eliminar.php"></script>
    
</body>
</html>