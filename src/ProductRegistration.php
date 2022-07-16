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
    <h1>Cadastro de produtos</h1>
    <form method='POST' role='form' action='#'>
        <div class='form-group'>
            <label for='in_Codprodutos'>Codprodutos</label>
            <input name='in_Codprodutos' id='in_Codprodutos' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Nomeproduto'>Nomeproduto</label>
            <input name='in_Nomeproduto' id='in_Nomeproduto' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Status'>Status</label>
            <input name='in_Status' id='in_Status' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Custo'>Custo</label>
            <input name='in_Custo' id='in_Custo' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Markup'>Markup</label>
            <input name='in_Markup' id='in_Markup' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Aluguel'>Aluguel</label>
            <input name='in_Aluguel' id='in_Aluguel' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Quantidade'>Quantidade</label>
            <input name='in_Quantidade' id='in_Quantidade' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Imagem'>Imagem</label>
            <input name='in_Imagem' id='in_Imagem' class='form-control' type='text' >
        </div>
        <div class='form-group'>
            <label for='in_Codbarras'>Codbarras</label>
            <input name='in_Codbarras' id='in_Codbarras' class='form-control' type='text' >
        </div>

    
</body>
</html>