<?php
    include "../mapper/conexao.php";
    include "../mapper/usuario.class.php";
    include "../data/usuario.class.php";

    $usuarioMapper = new usuarioMapper();

    $user = array("Usuario"=>" " , "Password"=>" ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
</head>
<body>
<?php include "../helper/header.html" ;?>
    <h1>Cadastro de usuario</h1>
    <form method='POST' role='form' action='#'>
        <div class='form-group'>
            <label for='in_Login'>Login</label>
            <input name='in_Login' id='in_Login' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Password'>Password</label>
            <input name='in_Password' id='in_Password' class='form-control' type='text' >
        </div>
        <div>
            <input type="submit" value="Cadastrar" name="btnCadastrar">
            <input type="submit" value="Entrar" name="btnEditar">
        </div>

    <?php
        if(isset($_POST["btnCadastrar"])){
            $user1 = new Usuario($_POST["in_Login"] , MD5($_POST["in_Password"]));
            $user1 = $usuarioMapper->insert($user1,$conexao);
        }
        
    ?>
</body>
</html>