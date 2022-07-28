
<?php
    include "../mapper/conexao.php";
    include "../data/cliente.class.php";
    include "../mapper/cliente.class.php";

    $ClienteMapper = new clienteMapper();

    $cliente = array("codcliente"=>" " , "nome"=>" ", 
    "datanascimento" => " " , "logradouro" => " " , " bairro"=> " ",
    "numero" => " " ,"cep" => " " ,"cpf_cnpj" => " " ,
    "cidade" => " " ,"estado" => " " ,"observacoes" => " " ,
    "telefone" => " " ,"complemento" => " " ,
);

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
    <div class = 'ViewPerson'>
        <h1>Listas de Clientes</h1>
        <?php
            $ClienteMapper->exibir($conexao);
        ?>
    </div>
    <?php include "../helper/footer.html" ;?>
</body>
<style>
    .ViewPerson{
        margin: top 300px;
        padding: 100px;
        padding-top:150px;
    }
</style>
</html>