<?php
$nome= $_POST['nome']; //o $_POST[] obtem o dado do form
$email= $_POST['emai'];
$cargo = $_POST ['cargo'];
$salario= $_POST['salario'];
$admissao= $admissao ['admissao'];
//CRIAR A INSTRUÇÃO SQL
$sql= "insert into funcionario (nome, email, carga, salario, data_admissao) values('$nome', '$email','$cargo','$salario', '$admissao')";
require_once("../conexao.php"); //CHAMA O ARQUIVO DE CONEXAO
$resposta= mysqli_query($conexao, $sql); //EXECUTA O SQL
if ($resposta == true)
{
    header("location: listar.php"); //REDIRECIONA
}

?>