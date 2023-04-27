<?php include_once"Top.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <?php include_once"top.php";?>

</head>
<body>

     <br>  
    <div class="container-fluid">
    <?php include_once"form_busca.php";?>
        <form action="ainstbc.php" method="post" name="cliente">

            <div class="form col-md-4">   
            <label >Nome</label>
            <input class="form-control" type="text" name="nome" maxlength="150" required>
            </div>

            <div class="form col-md-4">
            <label >CNPJ</label>
            <input class="form-control" type="text" name="cnpj" maxlength="15">
            </div>

            <div class="form col-md-4">
            <label >Inscrição Estadual</label>
            <input class="form-control" type="text" name="inscestadual" maxlength="15">
            </div>

            <div class="form col-md-2">   
            <label >Responsável</label>
            <input class="form-control" type="text" name="responsavel" maxlength="30">
            </div>

            <div class="form col-md-2">
            <label >CPF</label>
            <input class="form-control" type="text" id="cpf" name="cpf" maxlength="11" required>
            </div>

            <div class="form col-md-2">
            <label >RG</label>
            <input class="form-control" type="text" name="rg" maxlength="15">
            </div>

            <div class="form col-md-4">
            <label >Endereço</label>
            <input class="form-control" type="text" name="endereco" maxlength="100">
            </div>

            <div class="form col-md-2">
            <label >Número</label>
            <input class="form-control" type="text" name="num" maxlength="10">
            </div>

            <div class="form col-md-4">
            <label >Complemento</label>
            <input class="form-control" type="text" name="numcomp" maxlength="10">
            </div>

            <div class="form col-md-4">
            <label >Bairro</label>
            <input class="form-control" type="text" name="bairro" maxlength="30">
            </div>

            <div class="form col-md-2">
            <label >Cidade</label>
            <input class="form-control" type="text" name="cidade" maxlength="30">
            </div>

            <div class="form col-md-2">
            <label >Estado</label>
            <input class="form-control" type="text" name="estado" maxlength="30">
            </div>

            <div class="form col-md-2">
            <label >Celular</label>
            <input class="form-control" type="text" id="celular" name="celular" maxlength="15" required>
            </div>

            <div class="form col-md-4">
            <label >E-mail</label>
            <input class="form-control" type="text" name="email" maxlength="50">
            </div>

            <div class="form col-md-4">
            <label >Observação</label>
            <input class="form-control" type="text" name="obs" maxlength="50">
            </div>
            
            <div class="form col-md-4">
            <br>
            <input type="submit" value="Enviar">
            </div>
        </form>

    