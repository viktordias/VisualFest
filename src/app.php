<?php
include "../mapper/usuario.class.php";
include "../mapper/conexao.php";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Bem vindo ao visual fest</title>
</head>
<body>
<div>
    <form method='post' role='form' action='#'>
        <div class='form-group'>
            <label for='in_Login'>Login</label>
            <input name='in_Login' id='in_Login' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Password'>Password</label>
            <input name='in_Password' id='in_Password' class='form-control' type='password' >
        </div>
        <div>
            <input type="submit" value="Cadastrar" name="btnCadastrar">
            <input type="submit" value="Entrar" name="btnEntrar">
        </div>
        <div>
            <a href="http://">Esqueceu a senha?</a>
        </div>
    </form>
</div>

<?php
    if(isset($_POST["btnEntrar"])){
        header("location:pageHome.php");
    }
?>


    
</body>
</html>