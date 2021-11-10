<?php

   if(isset($_POST['submit']))
{
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('E-mail: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['estado']);
    //print_r('<br>');
    //print_r('Endereco: ' . $_POST['endereco']);
     
include_once('config.php.');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['genero'];
    $data_nascimento=$_POST['data_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereco=$_POST['endereco'];

    $result=mysqli_query($conexao, "INSERT INTO usuarios (nome,email,telefone,sexo,data_nasc,cidade,estado,)
    VALUES ('$nome', '$email', '$telefone', '$sexo','$data_nascimento', '$cidade', '$estado', '$endereco')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="cadastro.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email"class="labelInput">E-mail:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"class="labelInput">Telefone:</label>
                </div>
                
                <p>Sexo:</p>
                <input type="radio" id="feminino" nome="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br><br>
                <input type="radio" id="masculino" nome="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
