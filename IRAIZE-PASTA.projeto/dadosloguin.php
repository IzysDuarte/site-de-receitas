<?php include_once"databaseloguin.php";
?>
<html>
<body>
    <?php
    $email= $_POST["email"];
    $senha= $_POST["senha"];
  

    $conexao= mysqli_connect($servidor,$usuario,$senha,$database);
    mysqli_select_db($conexao, '$database');
    $sql="INSERT INTO loguin (email,senha)
    values ('$email', '$senha')";


    if(mysqli_query($conexao,$sql)){
        echo 'Dados cadastrados';
    }
    else {
        echo 'erro';
    }
    ?>
</body>
</html>