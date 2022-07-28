<?php
    include "../mapper/conexao.php";
    include "../data/produtos.class.php";
    include "../mapper/produtos.class.php";

    $produtosMapper = new produtosMapper();

    $produto = array("CodProduto"=>" " , "NomeProduto"=>" ", 
    "Status" => " " , "Custo" => " " , "Markup"=> " ",
    "Aluguel" => " " ,"Quantidade" => " " ,"CodBarras" => " " ,
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
    <div class = 'ViewProduct'>
        <h1>Listas de Produtos</h1>
        <?php
            $produtosMapper->exibir($produto , $conexao);
        ?>
    </div>
    <?php include "../helper/footer.html" ;?>
</body>
<style>
    .ViewProduct{
        margin: top 300px;
        padding: 100px;
        padding-top:150px;
    }
</style>
</html>