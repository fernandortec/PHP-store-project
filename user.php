<?php
    header('Content-type:text/html; charset=utf8');

    session_start();

    $name = '';
    $email = '';
    $password = '';
    $address = '';

    if (isset($_POST['store'])) {
        if(
            isset($_POST['name']) && !empty($_POST['name'])
            &&
            isset($_POST['email'])&& !empty($_POST['email'])
            &&
            isset($_POST['password'])&& !empty($_POST['password'])
            &&
            isset($_POST['address']) && !empty($_POST['address'])
            &&
            isset($_POST['profile']) && !empty($_POST['profile'])
            
        )
        {

            $_SESSION['name'] = $_POST['name'];
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['profile'] = $_POST['profile'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];

            echo "<script>
                    alert('Usuário cadastrado com sucesso');
                    window.location.href = 'index.html'
                 </script>";
        } else {
            header('location:userRegister.html');
        }



    } else if(isset($_POST['login'])){
        if(
            isset($_POST['email']) && !empty($_POST['email'])
            &&
            isset($_POST['password']) && !empty($_POST['password'])
        ){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email == $_SESSION['email'] && $password == $_SESSION['password'] ){
                echo "<script>
                        alert('Login feito com sucesso');
                        windows.location.href = 'user.php';
                     </script>";
            } else {
                echo "<script>
                        alert('Credenciais incorreta, verifique o email, senha e tente novamente');
                        window.location.href = 'index.html';
                      </script>";
            }

         } else {
             header('location:index.html');
         }
    } 

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="contents">
        <header>
            <h3> Olá seja bem vindo<h3> : <?php echo $_SESSION['name']; ?></h3> </h3>
            <div class="login">
                <p>Logado como : <b> <?php echo $_SESSION['email'];  ?> </b> </p>
                <p>Perfil de : <b> <?php echo $_SESSION['profile']; ?> </b> </p>
            </div>
        </header>
        <div class="services-offering">
            <h3> Olá, seja bem vindo à central do nosso site, caso você não possua nenhum produto nosso clique neste link : 
                <a href='products.html'>aqui !!</a>
            </h3>
            <p>Principais serviços : </p>
            <div class="services">
                <div class="service" id='support-service'>
                    <h2>Suporte</h2>
                    <p>Tire aqui suas dúvidas sobre nosso site e empresa</p>
                    <img src='imgs/whatsapp-suporte.png' alt='suporte'/>
                    <a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' ><i class="fas fa-sign-in-alt"></i></a>
                </div>
                <div class="service" id='products-service'>
                    <h2>Produtos</h2>
                    <p>Cadastre seus produtos aqui</p>
                    <img src='imgs/produtos.png' alt='suporte'/>
                    <a href='products.html'><i class="fas fa-sign-in-alt"></i></a>
                </div>
                    <div class="service" id='phisical-store-service'>
                    <h2>Lojas físicas</h2>
                    <p>Saiba aqui sobre os endereços e informações sobre as lojas físicas</p>
                    <img src='imgs/friboi.png' alt='suporte'/>
                    <a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' ><i class="fas fa-sign-in-alt"></i></a>
                </div>
                    <div class="service" id='work-with-us-service'>
                    <h2>Trabalhe com nós</h2>
                    <p>Envie seu currículo para trabalhar como desenvolvedor em home office</p>
                    <img src='imgs/developer.png' alt='suporte'/>
                    <a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' ><i class="fas fa-sign-in-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
<script src="https://kit.fontawesome.com/f90dab5b1d.js" crossorigin="anonymous"></script>
</body>
</html>
