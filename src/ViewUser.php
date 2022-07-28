<?php
    include "../mapper/conexao.php";
    include "../mapper/usuario.class.php";
    include "../data/usuario.class.php";

    $usuarioMapper = new usuarioMapper();

    $user = array("Usuario"=>" " , "Password"=>" ");
;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <?php include "../helper/header.html" ;?>
    <div class = 'ViewUser'>
        <h1>Listas de Usuario</h1>
        <?php
            $usuarioMapper->exibir($user , $conexao);
        ?>
    </div>
    
    <?php include "../helper/footer.html" ;?>
</body>
<style>
    .ViewUser{
        margin: top 300px;
        padding: 100px;
        padding-top:150px;
    }
</style>
</html>