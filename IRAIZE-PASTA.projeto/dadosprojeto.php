<?php include_once"databasepro.php";
?>
<html>
<body>
    <?php
    $email= $_POST["email"];
    $nome= $_POST["nome"];
    $sobrenome= $_POST["sobrenome"];
    $senha= $_POST["senha"];
    $confirmesenha= $_POST["confirmarsenha"]

    $conexao= mysqli_connect($servidor,$usuario,$senha,$database);
    mysqli_select_db($conexao, '$database');
    $sql="INSERT INTO cadastro (email,nome,sobrenome,senha,confirmarsenha)
    values ('$email', '$nome','$sobrenome','$senha','$confirmarsenha')";


    if(mysqli_query($conexao,$sql)){
        echo 'Dados cadastrados';
    }
    else {
        echo 'erro';
    }
    ?>
</body>
</html>