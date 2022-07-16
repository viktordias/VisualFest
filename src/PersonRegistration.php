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
        <div class='form-group'>
            <label for='in_Codcliente'>Codcliente</label>
            <input name='in_Codcliente' id='in_Codcliente' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Nome'>Nome</label>
            <input name='in_Nome' id='in_Nome' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Datanascimento'>Datanascimento</label>
            <input name='in_Datanascimento' id='in_Datanascimento' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Logradouro'>Logradouro</label>
            <input name='in_Logradouro' id='in_Logradouro' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Bairro'>Bairro</label>
            <input name='in_Bairro' id='in_Bairro' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Numero'>Numero</label>
            <input name='in_Numero' id='in_Numero' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Cep'>Cep</label>
            <input name='in_Cep' id='in_Cep' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_CpfCnpj'>Cpf Cnpj</label>
            <input name='in_CpfCnpj' id='in_CpfCnpj' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Cidade'>Cidade</label>
            <input name='in_Cidade' id='in_Cidade' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Estado'>Estado</label>
            <input name='in_Estado' id='in_Estado' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Observacoes'>Observacoes</label>
            <input name='in_Observacoes' id='in_Observacoes' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Telefone'>Telefone</label>
            <input name='in_Telefone' id='in_Telefone' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Complemento'>Complemento</label>
            <input name='in_Complemento' id='in_Complemento' class='form-control' type='text' >
        </div>
        <input type="submit" value="Cadastrar" name="btnCadastrar">
        <input type="submit" value="Entrar" name="btnEntrar">
    </div>
    
</body>
</html>