<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
   


<?php
    if(!empty($_GET['msg'])){
         
        if ($_GET['msg'] == "OK"){
    ?>
            <div class="alert alert-info" role="alert">
                <?php echo "<strong> Registrado com sucesso!</strong>"; ?>
            </div>
    <?php

        }
        
        else if($_GET['msg'] == "LOGIN_ERROR"){

            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "<strong>Nome, e-mail ou senha incorreto.</strong>"; ?>
            </div>
    <?php

        }
        
        else
        
        {
    ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "<strong> Não é possível se conectar no banco de dados. <strong><br>";?>
            </div>
    <?php
        }
        unset($_GET['msg']);
    }

    
    ?>




    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="verify_login.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="nome-email" class="text-info">Nome ou E-mail:</label><br>
                                <input type="text" name="nome-email" id="nome-email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.html" class="text-info">Register here</a>
                            </div>
                            <div class="form-group">
  
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>