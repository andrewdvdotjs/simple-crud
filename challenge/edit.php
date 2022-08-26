<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $fabricante = $_POST['fabricante'];
    $categoria = $_POST['categoria'];
    $nome_produto = $_POST['nome_produto'];
    $preco = $_POST['preco'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE loja SET fabricante='$fabricante',categoria='$categoria',nome_produto='$nome_produto',preco='$preco' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM loja WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{

    $fabricante = $_POST['fabricante'];
    $categoria = $_POST['categoria'];
    $nome_produto = $_POST['nome_produto'];
    $preco = $_POST['preco'];
}
?>

<html>
<head>
    <title>Editar informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        body{
            background: #cccac8;
        }

        .h1-bg-blue, .title{
            color: #0a53be;
            text-transform: uppercase;
        }

        .btn-bg-blue{
            background: #073d8e;
            color: white;
            padding-inline: 25px;
            margin-right: 10px;
        }

        .btn-bg-blue:hover{
            background: #0167ea;
            color: white;
        }
    </style>
</head>

<body>

<br/><br/>
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h1 class="mb-3 mt-4 h1-bg-blue">Atualizando produtos existentes</h1>


            <form name="update_user" method="post" action="edit.php">
                <div class="mb-3">
                    <label class="title mb-2" for="nome_produto">Nome do Produto</label>
                    <input placeholder="Digite o nome do produto" class="form-control form-control-lg" type="text" name="nome_produto" value=<?php echo $nome_produto;?>>

                </div>
                <div class="mb-3">
                    <label class="title mb-3" for="fabricante">Fabricante</label>
                    <input placeholder="Digite o nome do fabricante" class="form-control mb-3 form-control-lg" type="text" name="fabricante" value=<?php echo $fabricante;?>>
                </div>

                <div class="mb-3">
                    <label class="title mb-2" for="nome_produto">Categoria</label>
                    <input placeholder="Digite a nova categoria" class="form-control form-control-lg" type="text" name="categoria" value=<?php echo $categoria;?>>
                </div>

                <div class="mb-3">
                    <label class="title mb-2" for="preco">Preço</label>
                    <input placeholder="Digite o preço" class="form-control form-control-lg" type="text" name="preco" value=<?php echo $preco;?>>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <input class="btn btn-bg-blue" type="submit" name="update" value="Atualizar">
                    <a class="btn btn-dark text-light" href="index.php">Voltar pra home</a>
                </div>
            </form>
        </div>
    </div>
</div>



</body>
</html>

