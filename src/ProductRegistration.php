<?php
    include "../mapper/conexao.php";
    include "../data/produtos.class.php";
    include "../mapper/produtos.class.php";

    $produtosMapper = new produtosMapper();

    $produto = array("CodProduto"=>" " , "NomeProduto"=>" ", 
    "Status" => " " , "Custo" => " " , "Markup"=> " ",
    "Aluguel" => " " ,"Quantidade" => " " ,"CodBarras" => " " ,
);
if (isset($_GET["op"])) {
    # code...
    if($_GET["op"]=="e"){
        $id = $_GET["id"];
        $produto = $produtosMapper->selectId($id , $conexao)[0];
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
<?php include "../helper/header.html" ;?>
    
    <div class = 'ProductRegistration'>
        <form method='POST' role='form' action='#'>
            <h1>Cadastro de produtos</h1>
            <div class='form-group'>
                <label for='in_Codprodutos'>Codprodutos</label>
                <input name='in_Codprodutos' id='in_Codprodutos' class='form-control' 
                type='text' value = "<?php echo $produto["CodProduto"]; ?>" disabled>
            </div>
            <div class='form-group'>
                <label for='in_Nomeproduto'>Nomeproduto</label>
                <input name='in_Nomeproduto' id='in_Nomeproduto' class='form-control' 
                type='text' value = "<?php echo $produto["NomeProduto"]; ?>">
            </div>
            <div class='form-group'>
                <label for='in_Status'>Status</label>
                <input name='in_Status' id='in_Status' class='form-control' 
                type='text' value = "<?php echo $produto["Status"]; ?>">
            </div>
            <div class='form-group'>
                <label for='in_Custo'>Custo</label>
                <input name='in_Custo' id='in_Custo' class='form-control' 
                type='text' value = "<?php echo $produto["Custo"]; ?>">
            </div>
            <div class='form-group'>
                <label for='in_Markup'>Markup</label>
                <input name='in_Markup' id='in_Markup' class='form-control' 
                type='text' value = "<?php echo $produto["Markup"]; ?>">
            </div>
            <div class='form-group'>
                <label for='in_Aluguel'>Aluguel</label>
                <input name='in_Aluguel' id='in_Aluguel' class='form-control' 
                type='text' value = "<?php echo $produto["Aluguel"]; ?>">
            </div>
            <div class='form-group'>
                <label for='in_Quantidade'>Quantidade</label>
                <input name='in_Quantidade' id='in_Quantidade' class='form-control' 
                type='text'  value = "<?php echo $produto["Quantidade"]; ?>">
            </div>
            <div class='form-group'>
                <label for='in_Codbarras'>Codbarras</label>
                <input name='in_Codbarras' id='in_Codbarras' class='form-control' 
                type='text' value = "<?php echo $produto["CodBarras"]; ?>">
            </div>
    </div>
        <?php
                    # code...
            if(isset($_POST["btnCadastrar"])){
                $cont = $produtosMapper->contProduct($conexao);
                $produto = new produtos( intval($cont[0]['quant']),
                    $_POST["in_Nomeproduto"  ] , $_POST['in_Status'] ,
                    $_POST['in_Custo'], $_POST['in_Markup'],
                    $_POST['in_Aluguel'] , $_POST['in_Quantidade'] , 
                    $_POST['in_Codbarras']);
                    $produtosMapper->insert($produto,$conexao);     
            } 


            if(isset($_GET["op"])){
                include "../helper/BtnEdicao.html" ;
                if(isset($_POST["btnEditar"])){
                    $produto = new produto( $produto["CodProduto"],
                    $_POST["in_Nomeproduto"  ] , $_POST['in_Status'] ,
                    $_POST['in_Custo'], $_POST['in_Markup'],
                    $_POST['in_Aluguel'] , $_POST['in_Quantidade'] , 
                    $_POST['in_Codbarras'] 
                    );
                    $produtosMapper->update($produto,$conexao);    
                } 
    
    
            }else {
                # code...
                include "../helper/BtnCadastrar.html" ;
            }
        ?>
<?php include "../helper/footer.html" ;?>
</body>
<style>
    .ProductRegistration{
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