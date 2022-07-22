<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="Style_Login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<script defer src="Tela de Login.js"></script>
</head>
<body>
    <div id=login-container>
        <h1>Login</h1>
        <form action="">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autocomplete="off">
            <label for="password">Sennha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Login">
        </form>

<div id="social-container">
<p>Ou entre pelas suas redes sociais</p>
<i class="fab fa-facebook-f"></i>
<i class="fab fa-google"></i>
<div id="register-container">
<p>Ainda não tem uma conta?</p>
<a href="#">Registrar-se</a>
</div>
</div>
</div>

<!--Revisar-->
<p id="error-validation template"></p>


</body>
</html>