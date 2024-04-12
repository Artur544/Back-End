<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Login realizado com sucesso!</h1>

        <div class="mostra">
            <h2>Abaixo estão seus dados.</h2>


            <?php
                session_start();
                echo "<h3>Seu nome é: ".$_SESSION["nome"]."</h3>";
                echo "<h3>Seu e-mail é: ".$_SESSION["email"]."</h3>";
            ?>
        </div>
        
    </div>
</body>
</html>