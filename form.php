<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $port = $_POST['port'];
    $escolaridade = $_POST['escolaridade'];
        
    echo "<h1>Cadastro realizado com sucesso!</h1>";
    echo "<p>Nome:</p>" . $nome;
    echo "<p>E-mail:</p>" . $email;
    echo "<p>Telefone:</p>" . $telefone;
    echo "<p>Nascimento:</p>" . $nascimento;
    echo "<p>CPF:</p>" . $cpf;
    echo "<p>Endereço:</p>" . $endereco;
    echo "<p>Cidade:</p>" . $cidade;
    echo "<p>Estado:</p>" . $estado;
    echo "<p>Pessoa com deficiência:</p>" . $port;
    echo "<p>Escolaridade:</p>" . $escolaridade;
?>
