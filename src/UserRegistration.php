<?php
    include "../mapper/conexao.php";
    include "../mapper/usuario.class.php";
    include "../data/usuario.class.php";

    $usuarioMapper = new usuarioMapper();

    $user = array("Login"=>" " , "Password"=>" ");

    if (isset($_GET["op"])) {
        # code...
        if($_GET["op"]=="e"){
            $id = $_GET["id"];
            $user = $usuarioMapper->selectId($id , $conexao)[0];
        }    
    }
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
    <div class = 'UserRegistration'>
        <h1>Cadastro de usuario</h1>
        <form method='POST' role='form' action='#'>
            <div class='form-group'>
                <label for='in_Login'>Login</label>
                <input name='in_Login' id='in_Login' class='form-control' 
                type='text' value = <?php echo $user["Login"]; ?>>
            </div>
            <div class='form-group'>
                <label for='in_Password'>Password</label>
                <input name='in_Password' id='in_Password' class='form-control' 
                type='text' value = <?php echo $user["Password"]; ?>>
            </div>
    </div>
    

    <?php
        if(isset($_POST["btnCadastrar"])){
            $user1 = new Usuario($_POST["in_Login"] , MD5($_POST["in_Password"]));
            $user1 = $usuarioMapper->insert($user1,$conexao);
        }

        if(isset($_GET["op"])){
            if ($_GET["op"]=="e") {
                # code...
                include "../helper/BtnEdicao.html" ;
                if(isset($_POST["btnEditar"])){
                    $user1 = new Usuario($user["Login"] , MD5($_POST["in_Password"]));
                    $user1 = $usuarioMapper->insert($user1,$conexao);
                    $usuarioMapper->update($user1,$conexao);    
            }
            if ($_GET["op"]=="d") {
                # code...
                include "../helper/BtnEdicao.html" ;
                if(isset($_POST["btnEditar"])){
                    $usuarioMapper->delete($user, $conexao);
                    header("location:ViewUser.php");
            }

            }
        }
            


        }else {
            # code...
            include "../helper/BtnCadastrar.html" ;
        }
        
    ?>


<?php include "../helper/footer.html" ;?>
</body>
<style>
     .UserRegistration{
        margin: top 300px;
        padding: 100px;
        padding-top:150px;
    }
    .input{
    font-family: Arial, Helvetica, sans-serif;
    background: #e1ff03;
    border: none;
    height: 30px;
    width: auto;
    border-radius: 8px;
    text-transform: uppercase; 
    font-weight: 700;
    cursor: pointer;
    margin-left: 60;
    margin-right:-50;     
    }
</style>
</html>