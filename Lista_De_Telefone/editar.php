<?php

    include('conexao.php');

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edite um Componente da Lista</title>
</head>
<body>
    
<?php
    
    $sql = "select * from lista_telefone where id=$id";
    $busca = mysqli_query($conexao, $sql);

    while ($array = mysqli_fetch_array($busca)){

        $id = $array['id'];
        $nome = $array['nome'];
        $data = $array['data'];
        $telefone = $array['telefone'];
        $email = $array['email'];

    }

?>


<div class="container">

<h4>Formulário de Cadastro para Lista de Telefone</h4>

<form action="atualizar.php" method="post" style="margin-top: 20px">

    <input type="text" class="form-control" id="modelo" autocomplete="off" name="id" value="<?php echo $id ?>" style="display: none;">

        <div class="form-group">
            <label>Insira seu Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome aqui! "  value="<?php echo $nome ?>" required>
        </div>
        
        <div class="form-group">
            <label>Insira sua Data de Nascimento</label>
            <input type="date" class="form-control" id="data" value="<?php echo $data ?>"  required>
        </div>

        <div class="form-group">
            <label>Insira o seu Telefone</label>
            <input type="tel" class="form-control" id="telefone" value="<?php echo $telefone ?>"  required>
        </div>

        <div class="form-group">
            <label>Insira seu Email</label>
            <input type="email" class="form-control" id="email" placeholder="Digite o seu email! " value="<?php echo $email ?>"  required>
        </div>
    

        <div style="text-align:right">
            <button type="submit" id="botao" class="btn btn-success">Atualizar</button>
        </div>

</form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>