<?php
include "../mapper/usuario.class.php";
include "../mapper/conexao.php";
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
    <link rel="stylesheet" href="./css/main.css">
    
    <title>Bem vindo ao visual fest</title>
</head>
<body class = "body">
    <header>
        <img class="logo" src="./image/logo_sistema.png" width="250">
        <h1>Seja Bem-Vindo ao EasyHire!</h1>  
    </header>
<div>
    <form method='post' role='form' action='#'>
        <div class='form-group'>
            <h2>LOGIN</h2>
            <label for='in_Login'>Login</label>
            <input name='Login' id='in_Login' class='form-control' type='text'>
           
        </div>
        <div class='form-group'>
            <label for='in_Password'>Password</label>
            <input name='Password' id='in_Password' class='form-control' type='password' >
        </div>
            <br>
            <input type="submit" value="Cadastrar" name="btnCadastrar" class='button'>
            <input type="submit" value="Entrar" name="btnEntrar" class='button'>
            <br><br>
    </form>
</div>

<?php
    //echo '<script>alert("passei pelos campos preenchidos")</script>';
    if (isset($_POST['Login']) && isset($_POST['Password'])) {
        //echo '<script>alert("passei pelos campos preenchidos")</script>';
        if(isset($_POST["btnEntrar"])){
            $user = new Usuario($_POST["Login"] , MD5($_POST["Password"]));
            echo '<script>alert($user)</script>';
            var_dump($user);
            $verifica = $usuarioMapper->login($user , $conexao);
            echo '<script>alert($verifica)</script>';
            var_dump($verifica);
            if($verifica>0){
                header("location:pageHome.php");
            }
        }
        # code...
    }
    if(isset($_POST["btnEntrar"])){
        header("location:pageHome.php");
    }
    
?>

    <footer>
           <p class = "direitos"> Desenvolvido por  </p>
           <img class="icon" src="./image/logo_icon.png" width="40">
    </footer>
</body>

<style>
    body{
    margin: 0;

}
header{
    padding: 50px;
}
h1{
    font-size: 25px;
    text-align: center;
    color: #a2c1c4;
    font-family: Arial, Helvetica, sans-serif;
}
.logo{
    margin: auto;
    display: block;
    padding: 5px;
}
form{
    margin: auto;
    width: 300px;
    height: 250px;
    padding: 10px 20px;
    border: 1px solid #CCC;
    border-radius: 20px;
}
h2{
    margin: 5px;
    font-size: 25px;
    text-align: center;
    color: #a2c1c4;
    font-family: Arial, Helvetica, sans-serif;
}
.form-control{
    display: block;
    width: 100%;
    border: 1px solid #CCC;
    height: 30px;
    border-radius: 5px;  
}
.form-group{
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
    color: #122023;
    margin-bottom: 10px;
    
} 
.button{
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
.nova-senha > a{
    color:#122023;
    cursor: pointer;
    margin-left:90;
}
footer{
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    color: #122023;
    display: flex;
    align-items:baseline; 
    justify-content: center;
    padding: 10px;
}
footer > img{
    margin-left: 10;
    padding : 2;
}    
</style>
   
</html>