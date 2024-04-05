<?php

    $conexao = mysqli_connect("localhost", "root", "mysqluser", "loja");
    $query = "INSERT INTO cubos (nome, preco, dificuldade, imagem) VALUES ('$nome', '$preco', $dificuldade, '$imagem')";

    $result = mysqli_query($conexao, $query);

    echo 'Nome: '.$nome.'<br>Preço: '.$preco.'<br>Dificuldade: '.$dificuldade.'<br>Imagem: '.$imagem;
    echo '<br><a href="inserir.php">Inserção de cubos</a>'

?>