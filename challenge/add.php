<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Fabricante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        .h1-bg-blue, .title{
            color: #0a53be;
            text-transform: uppercase;
        }

        .btn-bg-blue{
            background: #073d8e;
            color: white;
            padding-inline: 25px;
        }

        .btn-bg-blue:hover{
            background: #0167ea;
            color: white;
        }




    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-5 mt-5 h1-bg-blue">Fabricante e Categoria</h1>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col mt3">
            <form action="add.php" method="post" name="form1">
                <div class="mb-3">
                    <label class="title mb-2" for="fabricante">Fabricante</label>
                    <input placeholder="Digite o nome do fabricante" class="form-control form-control-lg" type="text" name="fabricante">
                </div>
                <div class="mb-3">
                    <label class="title mb-3" for="email">Categoria</label>
                    <input placeholder="Digite o nome da categoria" class="form-control mb-3 form-control-lg" type="text" name="categoria">
                </div>

                    <h1 class="mb-3 mt-4 h1-bg-blue">Produtos</h1>

                <div class="mb-3">
                    <label class="title mb-2" for="nome_produto">Nome produto</label>
                    <input placeholder="Digite o nome do produto" class="form-control form-control-lg" type="text" name="nome_produto">
                </div>

                <div class="mb-3">
                    <label class="title mb-2" for="preco">Preço</label>
                    <input placeholder="Digite o preço" class="form-control form-control-lg" type="text" name="preco">
                </div>

                <div class="mb-3">
                    <input class="btn btn-bg-blue" type="submit" name="Submit" value="Adicionar">
                </div>
            </form>
<!--            <a class="btn btn-warning" href="index.php">home</a>-->
        </div>
    </div>
</div>

<br/><br/>



<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $fabricante = $_POST['fabricante'];
    $categoria = $_POST['categoria'];
    $nome_produto = $_POST['nome_produto'];
    $preco = $_POST['preco'];


    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO loja(fabricante,categoria, nome_produto, preco) VALUES('$fabricante','$categoria', '$nome_produto','$preco')");


    // Show message when user added
    echo "<h3>Adicionado com sucesso.
               <a href='index.php'>Ver lista</a> </h3>";
    header("Location: index.php");
}
?>

</body>
</html>



