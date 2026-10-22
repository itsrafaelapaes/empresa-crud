<?php
//ESTE ARQUIVO CONECTA COM BD MYSQL
//DEFINIR AS VARIAVEIS
$servidor = "localhost";
$usuario="root";
$senha= "";
$bd="empresa";
//chamar o comando pra conectar
$result=mysqli_connect($servidor, $usuario, $senha, $bd);
if ($result){
    echo "Conexao realizada com sucesso"
}
else{
    echo mysqli_error ($result);
}