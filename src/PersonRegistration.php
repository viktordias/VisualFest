<?php
    include "../mapper/conexao.php";
    include "../data/cliente.class.php";
    include "../mapper/cliente.class.php";

    $ClienteMapper = new clienteMapper();

    $cliente = array("CodCliente"=>" " , "Nome"=>" ", 
    "DataNascimento" => " " , "Logradouro" => " " , "Bairro"=> " ",
    "Numero" => " " ,"CEP" => " " ,"CPF_CNPJ" => " " ,
    "Cidade" => " " ,"Estado" => " " ,"Observacoes" => " " ,
    "telefone" => " " ,"Complemento" => " " ,
);
if (isset($_GET["op"])) {
    # code...
    if($_GET["op"]=="e"){
        $id = $_GET["id"];
        $cliente = $ClienteMapper->selectId($id , $conexao)[0];
    }    
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros de Produtos</title>
</head>
<body>
<?php include "../helper/header.html" ;?>

    <div class="RegistrationForm">
        <h1>Cadastro de pessoas</h1>
        <form method='POST' role='form' action='#'>
            <div class = 'form'>
                <div class='form-group'>
                    <label for='in_Codcliente'>Codigo Do cliente</label>
                    <input name='in_Codcliente' id='in_Codcliente' class='form-control' 
                    type='text' value = "<?php echo $cliente["CodCliente"]; ?>" disabled><br>
                </div>
                <div class='form-group'>
                    <label for='in_Nome'>Nome</label>
                    <input name='in_Nome' id='in_Nome' class='form-control' 
                    type='text' value = "<?php echo $cliente["Nome"]; ?>" >
                </div>
                <div class='form-group'>
                    <label for='in_Datanascimento'>Data De Nascimento</label>
                    <input name='in_Datanascimento' id='in_Datanascimento' class='form-control' 
                    type='date'  value = "<?php echo $cliente["DataNascimento"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Logradouro'>Logradouro</label>
                    <input name='in_Logradouro' id='in_Logradouro' class='form-control' 
                    type='text' value = "<?php echo $cliente["Logradouro"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Bairro'>Bairro</label>
                    <input name='in_Bairro' id='in_Bairro' class='form-control' 
                    type='text' value = "<?php echo $cliente["Bairro"]; ?>" >
                </div>
                <div class='form-group'>
                    <label for='in_Numero'>Numero</label>
                    <input name='in_Numero' id='in_Numero' class='form-control' 
                    type='text' value = "<?php echo $cliente["Numero"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Cep'>Cep</label>
                    <input name='in_Cep' id='in_Cep' class='form-control' 
                    type='text' value = "<?php echo $cliente["CEP"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_CpfCnpj'>Cpf/Cnpj</label>
                    <input name='in_CpfCnpj' id='in_CpfCnpj' class='form-control' 
                    type='text' value = "<?php echo $cliente["CPF_CNPJ"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Cidade'>Cidade</label>
                    <input name='in_Cidade' id='in_Cidade' class='form-control' 
                    type='text' value = "<?php echo $cliente["Cidade"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Estado'>Estado</label>
                    <input name='in_Estado' id='in_Estado' class='form-control' 
                    type='text' value = "<?php echo $cliente["Estado"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Observacoes'>Observacoes</label>
                    <input name='in_Observacoes' id='in_Observacoes' class='form-control' 
                    type='text' value = "<?php echo $cliente["Observacoes"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Telefone'>Telefone</label>
                    <input name='in_Telefone' id='in_Telefone' class='form-control' 
                    type='text' value = "<?php echo $cliente["telefone"]; ?>">
                </div>
                <div class='form-group'>
                    <label for='in_Complemento'>Complemento</label>
                    <input name='in_Complemento' id='in_Complemento' class='form-control' 
                    type='text' value = "<?php echo $cliente["Complemento"]; ?>">
                </div>
            </div>
    </div>

<?php
    
        # code...
        if(isset($_POST["btnCadastrar"])){
            $cont = $ClienteMapper->contPerson($conexao);
            //var_dump($cont);
            $clienteInsert = new cliente( intval($cont[0]['quant']),
            $_POST['in_Nome'] , $_POST['in_Datanascimento'] ,
            $_POST['in_Logradouro'], $_POST['in_Bairro'],
            $_POST['in_Numero'] , $_POST['in_Cep'] , 
            $_POST['in_CpfCnpj'] , $_POST['in_Cidade'] , 
            $_POST['in_Estado'] , $_POST['in_Observacoes'],
            $_POST['in_Telefone'] , $_POST['in_Complemento']
            );
            $ClienteMapper->insert($clienteInsert,$conexao);    
        } 

        if(isset($_GET["op"])){
            include "../helper/BtnEdicao.html" ;
            if(isset($_POST["btnEditar"])){
                $cliente = new cliente( $cliente["CodCliente"] ,
                $_POST["in_Nome"  ] , $_POST['in_Datanascimento'] ,
                $_POST['in_Logradouro'], $_POST['in_Bairro'],
                $_POST['in_Numero'] , $_POST['in_Cep'] , 
                $_POST['in_CpfCnpj'] , $_POST['in_Cidade'] , 
                $_POST['in_Estado'] , $_POST['in_Observacoes'],
                $_POST['in_Telefone'] , $_POST['in_Complemento']
                );
                $ClienteMapper->update($cliente,$conexao);

                //header("location:ViewPerson.php");  
            }
            if(isset($_POST["btnEditar"])){
                //header_remove();
                //header("location:ViewPerson.php");
            }


        }else {
            # code...
            include "../helper/BtnCadastrar.html" ;
        }
    
   
?>

<?php include "../helper/footer.html" ;?>
    
</body>

<style>
    .RegistrationForm{
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