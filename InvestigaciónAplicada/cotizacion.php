<!DOCTYPE html>
<html>
<head>
    <title>Cotización ropa</title>
    <style type="text/css">
        
        .form-container{
            width: 500px;
            margin: 100px auto;
            text-align: center;
        }
        h1{
            font-size: 36px;
        }
        label{
            font-size: 24px;
        }
        input[type="text"], input[type="email"]{
            font-size: 18px;
            padding: 10px;
            width: 100%;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"]{
            font-size: 18px;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <?php
    $xml = simplexml_load_file('productos.xml');
    if (isset($_POST['proSele'])) {
        $proSele=array();
            foreach ($_POST['proSele'] as $valor) {
                $proSele[] = $valor;
                
            }
          
            print_r($proSele);
            var_dump($proSele);
            
            
        }
    
        else {
                  
          }
        
    ?>
    <div class="form-container">
        <h1>Obten tu cotización</h1>
        <form action="envia.php" method="post">
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <label for="correo">Correo:</label><br>
            <input type="email" name="correo" placeholder="Correo" required><br>
            <input type="submit" name="submit" name="submit" value="Enviar" class="submit" >
        </form>
    </div>
</body>
</html>
