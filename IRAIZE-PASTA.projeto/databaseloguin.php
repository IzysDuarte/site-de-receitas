<?php
$servidor= "localhost";
$usuario= "root";
$senha= '';
$database= "receitas";

$conexao= mysqli_connect($servidor,$usuario,$senha,$database);

if(!$conexao){
    die("Conexou falhou" .mysqli_connect_error());
}
?>