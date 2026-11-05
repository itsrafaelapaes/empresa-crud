<?php
//ESTE ARQUIVO CONECTA COM BD MYSQL
//DEFINIR AS VARIAVEIS
$servidor = "localhost";
$usuario="root";
$senha= "";
$bd="empresa";
//chamar o comando pra conectar
$conexao=mysqli_connect($servidor, $usuario, $senha, $bd);
if ($conexao){
    echo "Conexao realizada com sucesso";
}
else{
    echo mysqli_error ($conexao);
}