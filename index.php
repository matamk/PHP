<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
    <div id = "top">
      <h1>Aplicación crud php mysql</h1>
    </div>
    
    <div id = "formulario">
      <form action="conexion.php" method = "post">
        <label for="">Nombre</label><br>
        <input type="text" name="nombre" id=""><br>

        <label for="">Apellidos</label><br>
        <input type="text" name="apellidos" id=""><br><br>
        
        <input type="submit" value="Enviar" id = "enviar">

      </form>
  </div> 
  
    
  
  </body>
</html>