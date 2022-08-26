<?php

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM loja ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Fabricante e categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>

    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-5 mt-5 h1-bg-blue">Fabricante e Categoria</h1>
</div>

<div class="container border border-1">
    <div class="row">
        <div class="col mt-5">
            <table class="table table-hover table-striped table-bordered">

                <tr>
                 <th>ID</th>   <th>Nome produto</th> <th>Fabricante</th> <th>Categoria</th> <th>Preço</th> <th>Atualizar</th>
                </tr>
                <?php
                while($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome_produto']."</td>";
                    echo "<td>".$user_data['fabricante']."</td>";
                    echo "<td>".$user_data['categoria']."</td>";
                    echo "<td>".$user_data['preco']."</td>";
                    echo "<td><a class='btn btn-success' href='edit.php?id=$user_data[id]'>Editar</a> | <a class='btn btn-danger' href='delete.php?id=$user_data[id]'>Deletar</a></td></tr>";
                }
                ?>
            </table>
            <a  class="btn btn-primary m-3" href="add.php">Adicionar novo fabricante e produto</a><br/><br/>
        </div>
    </div>
</div>

</body>
</html>



