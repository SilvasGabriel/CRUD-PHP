<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lista de Telefone</title>

</head>

<body>

    <div class="container" style="margin-top: 40px">
        
        <h2 style="text-align:center">Lista de Telefones</h2>

        <table class="table table-dark table-hover">
            
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            
            <tbody>

              <?php
                include('conexao.php');

                $sql = "select * from lista_telefone;";
                $busca = mysqli_query($conexao, $sql);

                while($array=mysqli_fetch_array($busca)){
                    
                    $id=$array['id'];
                    $nome=$array['nome'];
                    $data=$array['data'];
                    $telefone=$array['telefone'];
                    $email=$array['email'];
                    
                    
                    echo '<td>'.$id.'</td>';
                    echo '<td>'.$nome.'</td>';
                    echo '<td>'.$data.'</td>';
                    echo '<td>'.$telefone.'</td>';
                    echo '<td>'.$email.'</td>';
                    

                    echo '<td> <a class="btn btn-warning btn-sm" href="editar.php?id=' . $id .'" role="button"><i class="far fa-edit"></i> Editar</a>';
					echo ' <a class="btn btn-danger btn-sm" href="deletar.php?id=' . $id .'" role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>';	

					echo '</tr>';
					
                }

              ?>
            
            </tbody>
        
        </table>

        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

    </div>




    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>