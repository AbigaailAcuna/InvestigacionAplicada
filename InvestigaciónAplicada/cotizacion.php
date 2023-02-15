<?php 
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $to = $email;
    $subject = "Cotización ropa";
    $quote = "";
    if(isset($_POST["product"])){
        $products = $_POST["product"];
        foreach($products as $product){
            $quote .= $product . "\n";
        }
    }
    $message = "Estimado " . $name . ",\n\nAqui está su cotización:\n\n" . $quote . "\n\nAgradecemos tu preferencia.\n\nSaludos,\nTienda de ropa.";
    $headers = "From: no-reply@clothingstore.com";
    if(!empty($name) && !empty($email) && !empty($quote)){
        mail($to, $subject, $message, $headers);
        header("Location: quote-sent.php");
        exit();
    } else {
        header("Location: form-error.php");
        exit();
    }
}
?>

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
    <div class="form-container">
        <h1>Obten tu cotización</h1>
        <form action="submit-quote.php" method="post">
            <label for="name">Nombre:</label><br>
            <input type="text" name="name" placeholder="Tu nombre" required><br>
            <label for="email">Correo:</label><br>
            <input type="email" name="email" placeholder="Tu correo" required><br>
            <input type="submit" name="submit" value="Send">
        </form>
    </div>
</body>
</html>
