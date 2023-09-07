<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Promedio estudiante</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <div class="container">
   <h1 class="text-center">Promedio notas</h1>
   <form action="procesar.php" method="post">

    <div class="row justify-content-center mb-3">
     <div class="col-4">
       <input class="form-control" type="text" name="nombre" placeholder="Ingrese su nombre">
     </div>
   </div>

    <div class="row justify-content-center mb-3">
     <div class="col-4">
       <input class="form-control" type="text" name="val1" placeholder="Ingrese la primera nota">
     </div>
   </div>

   <div class="row justify-content-center mb-3">
     <div class="col-4">
       <input class="form-control" type="text" name="val2" placeholder="Ingrese la segunda nota">
     </div>
   </div>

   <div class="row justify-content-center mb-3">
     <div class="col-4">
       <input class="form-control" type="text" name="val3" placeholder="Ingrese la tercera nota">
     </div>
   </div>
    
    <div class="row justify-content-center">
      <div class="col-4 text-center">
          <button type="submit" name="enviar" class="btn btn-primary btn-lg btn-block ">Enviar</button>
        </div>
    </div>
        

 </form>
</div>

</body>
</html>