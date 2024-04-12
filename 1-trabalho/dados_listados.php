<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>dados_listados</title>
</head>
<body>

<?php
$targetDir = "uploads/";
$conexao = mysqli_connect("localhost", "root", "", "loja");

if (!empty($_POST['submit'])) {
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $dificuldade = $_POST['dificuldade'];
}

  if(!empty($_POST["id_removed"])) {
      $removingRow = $_POST["id_removed"];
      $query_for_removing = "DELETE FROM cubos WHERE id = $removingRow";
      mysqli_query($conexao,$query_for_removing);
  }

  if (!empty($_POST["submit_edicao"])){
    $id_for_updating = $_POST["submit_edicao"]; 
    $nome_edicao = $_POST["nome_edicao"];
    $dificuldade_edicao = $_POST["dificuldade_edicao"];
    $preco_edicao = $_POST["preco_edicao"];
    
    if(!empty($_FILES["arquivo_edicao"]["name"])){ 
      $fileName = basename($_FILES["arquivo_edicao"]["name"]);
  
      $fileNameModified = date("YmdHis").$fileName;
  
      $targetFilePath = $targetDir . $fileName ; 
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
      $targetFilePath = $targetDir.$fileNameModified; 
    
      // permite formatos de imagens abaixo
      $allowTypes = array('jpg','png','jpeg','gif'); 
      if(in_array($fileType, $allowTypes)){ 
          // Upload file to server 
          if(move_uploaded_file($_FILES["arquivo_edicao"]["tmp_name"], $targetFilePath)){ 
              // Insert image file name into database 
              $query_for_editing = "UPDATE cubos SET nome='$nome_edicao', preco=$preco_edicao, dificuldade='$dificuldade_edicao', imagem='$fileNameModified' WHERE id=$id_for_updating";
              $update = mysqli_query($conexao,$query_for_editing);
                
          }
      } 
  } else{ 
    $query_for_editing = "UPDATE cubos SET nome='$nome_edicao', preco=$preco_edicao, dificuldade='$dificuldade_edicao' WHERE id=$id_for_updating";
    echo $query_for_editing;
    $update = mysqli_query($conexao,$query_for_editing);
  }
    
  }
  
  if(!empty($_FILES["arquivo"]["name"])){ 
    $fileName = basename($_FILES["arquivo"]["name"]);

    $fileNameModified = date("YmdHis").$fileName;

    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
    $targetFilePath = $targetDir.$fileNameModified; 
  
    // permite formatos de imagens abaixo
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to server 
        if(move_uploaded_file($_FILES["arquivo"]["tmp_name"], $targetFilePath)){ 
            // Insert image file name into database 
            $query = "INSERT INTO cubos (nome, preco, dificuldade, imagem) VALUES ('$nome', $preco, '$dificuldade', '$fileNameModified')";
            $insert = mysqli_query($conexao,$query);
            
        }
    }   
  } 

    $query = "SELECT id, nome, preco, dificuldade, imagem FROM cubos";
    if(!empty($_POST["id_pesquisa"])) {
    $pesquisa = $_POST["pesquisa"];
    $query = "SELECT id, nome, preco, dificuldade, imagem FROM cubos WHERE nome like '%$pesquisa%' or preco like '%$pesquisa%'";
   // mysqli_query($conexao,$query_search);
  }
    $result = mysqli_query($conexao, $query);


?>
<br>
<h1>Loja</h1>
<br>
<form action="dados_listados.php" method="post">
  <div class="input-group mb-3">
    <input name="pesquisa" type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button name="id_pesquisa" value="1" class="btn btn-outline-secondary" type="submit" id="button-addon2">Pesquisar</button>
  </div>
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" >Nome</th>
      <th scope="col" >Preço</th>
      <th scope="col" >Dificuldade</th>
      <th scope="col" >URL</th>
      <th scope="col" >Imagem</th>
      <th scope="col" ></th>
      <th scope="col" ></th>
    </tr>
  </thead>

  <tbody>

<?php

while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
  echo "<tr> <td>".$linha['id']."</td>
  <td>".$linha['nome']."</td>
  <td>".$linha['preco']."</td>
  <td>".$linha['dificuldade']."</td>
  <td>".$linha['imagem']."</td>
  <td> <img src='./uploads/".$linha['imagem']."' width='100' height='100'></td>";

?>
    <td>
      <form action="dados_listados.php" method="post">
        <button type="submit" name="id_removed"  class="btn btn-outline-danger" value="<?=$linha['id']?>">deletar</button>
      </form>
    </td>
    <td>
      <form action="dados_edicao.php" method="post">
        <button type="submit" name="id_for_updating" class="btn btn-outline-warning" value="<?=$linha['id']?>">update</button>
      </form>
    </td>  
  </tr>
<?php
}
?>

<tbody>

</table>

<a href="inserir.php">Ir para Inserção de cubos</a>
</body>
</html>