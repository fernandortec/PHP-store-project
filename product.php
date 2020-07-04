<?php
    header('Content-type:text/html; charset= utf-8');

    session_start();

    if(isset($_POST['products'])){
        if(
        isset($_POST['product-name']) && !empty($_POST['product-name'])
        &&
        isset($_POST['product-brand']) && !empty($_POST['product-brand'])
        &&
        isset($_POST['product-date']) && !empty($_POST['product-date'])
        &&
        isset($_POST['fabrication-date']) && !empty($_POST['fabrication-date'])
        &&
        isset($_POST['product-weight']) && !empty($_POST['product-weight'])
        &&
        isset($_POST['product-quantity']) && !empty($_POST['product-quantity'])
        &&
        isset($_POST['product-price']) && !empty($_POST['product-price'])
        ){
            $_SESSION['product-name'] = $_POST['product-name'];
            $_SESSION['product-brand'] = $_POST['product-brand'];
            $_SESSION['product-date'] = $_POST['product-date'];
            $_SESSION['fabrication-date'] = $_POST['fabrication-date'];
            $_SESSION['product-weight'] = $_POST['product-weight'];
            $_SESSION['product-quantity'] = $_POST['product-quantity'];
            $_SESSION['product-price'] = $_POST['product-price'];

            echo "<script>
                    alert('Produto cadastrado com sucesso');
                    window.location.href = 'product.php'
                </script>";
        } else {
            header('location:products.html');
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/products.css">
    <title>Document</title>
</head>
<body>
    <div class="contents">
        <div class="product">
            <h2> Produto cadastrado !! </h2>
            <p>Informações abaixo </p>
            <div class="product-info">
                <p> Produto : <b><?php echo $_SESSION['product-name']?></b> </p>
                <p> Marca : <b><?php echo $_SESSION['product-brand'] ?></b> </p>
                <p> Data de validade :  <b><?php echo $_SESSION['product-date'] ?></b> </p>
                <p> Data de fabricação :  <b><?php echo $_SESSION['fabrication-date'] ?></b> </p>
                <p>Peso líquido : <b><?php echo $_SESSION['product-weight'] ?></b> gramas </p>
                <p>Quantidade : <b> <?php echo $_SESSION['product-quantity'] ?> </b> </p>
                <p>Preço : <b> <?php echo $_SESSION['product-price'] ?> </b> </p>
            </div>
        </div>
        <button><a href='products.html' >Voltar</a></button>
    </div>
</body>
</html>