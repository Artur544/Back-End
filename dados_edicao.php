<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Minha Loja</title>
</head>
<body id="body-edit">

<?php
    $id_show = $_POST['id_for_updating'];
?>

<div class = "tudo">

    <h1>Edição de Cubos</h1>

    <form action="dados_listados.php" class="form-inicial" method="post" enctype="multipart/form-data" >

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
            <input name="nome_edicao" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Preço:</span>
            <input name="preco_edicao" type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            <span class="input-group-text">R$</span>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Dificuldade:</span>
            <input name="dificuldade_edicao" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Imagem:</label>
            <input name="arquivo_edicao" class="form-control" type="file" id="formFile">
        </div>

        <button name="submit_edicao"  value="<?= $id_show ?>" class="btn btn-success" type="submit">Enviar</button>

    </form>

    <a href="dados_listados.php">Ir para Loja</a>
    
</body>
</html>

