<?php
$nome   =$_POST['nome'];
$nome   =$_POST['telefone'];
$nome   =$_POST['cep'];
$nome   =$_POST['endereço'];
$nome   =$_POST['cidade'];
$nome   =$_POST['cpf'];

linha = date('s/m/y h:i:s') . " | " . $nome . " | "  . " | "  . $email . = " | "
. $telefone . " | " . $cidade . " | " . $mensagem " | " . PHP_EOL;
file_put_contetnts('cadastro.txt', $linha, FILE_APPEND);
header('location:cadastro-1.html');
?>