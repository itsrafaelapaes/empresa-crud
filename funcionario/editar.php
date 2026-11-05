<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
</head>
<body>
    <?php
    include_once("../menu.php");
    //Obter o ID
    $id = $_GET['id'];//Pega o dado vindo da url
    //executar o SELECT
    $sql = "Select * from funcionario where id=$id";
    require_once("../conexao.php");//carrega a conexao
    $result = mysqli_query($conexao, $sql);
    $funcionario= mysqli_fetch_assoc($result) //associa o resultado a variavel
    ?>
    <div class="container">
        <h1>Edição de Funcionário</h1>
        <form actin="atualizar.php" method="post">
    <form action="inserir.php" method="POST" >
    <p>
        <label> nome: </label>
        <input type="text" name="nome" required value="<?php echo $funcionario ['nome'];?>">
    </p>
    <p>
    <label for= "email:">E-mail: </label>
        <input type="email" name="email" required value="<?php echo $funcionario ['email'];?>">
    </p>
    <p>
    <label for= "cargo">Cargo: </label>
        <input type="text" name="cargo" required value="<?php echo $funcionario ['carga'];?>">
    </p>
    <p>
    <label for= "salario:">Sálario base: </label>
        <input type="number" name="salario"  step="0.01" required  value="<?php echo $funcionario ['salario'];?>">
    </p>
    <p>
    <label for= "data:">Data de admissão: </label>
        <input type="date" name="admissao" required  value="<?php echo $funcionario['data_admissao'];?>">
    </p>
    <p>
        <input type = "submit" value="Cadastrar">
        <input type = "reset" value="Limpar">
    </p>
    <p>
        <label for = "ativo"> Ativo: </label>
        <input type="checkbox" name="ativo" <?php if ($funcionario['ativo']==1) {echo 'checked'; } ?> >
    </p>
    <p>
        <input type= "hidden" name="id" value="<?php echo $id; ?>">
        <input type= "submit" value= "Atualizar">
</p>
    
    
</body>
</html>