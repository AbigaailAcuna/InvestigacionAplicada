<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/css.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Tienda de Ropa</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<header>
    <br>
        <div class="container">
            <div class="card text-center text-bg-dark mb-3">
            <div class="card-body">
              Tienda de Ropa
            </div>
            </div>
        </div>
    </header>
  <?php 
  $productos=simplexml_load_file('productos.xml');
  foreach($productos->producto as $pro)
  {
    
  ?>
  <section>
    <article>
      <div class="container">
        <form action="cotizacion.php" method="post">
        <div class="lista">
          <div class="producto">  
          <input type="checkbox" name="product[]" value="1">
          <img src= <?php echo $pro->imagen;?> class="product-image">
          <div class="nombre-producto">
          <?php echo $pro->nombre;?>
          </div>
          <div class="precio-producto">
          <?php echo $pro->precio;?>
          </div>
        </div>
        <?php
         
        }
        ?>
         </div>
         
      
 </form>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-dark" type="submit" name="submit" value="Enviar" class="submit">Cotizar</button>
        </div>
     
    </article>
  </section>       
</body>
</html>
