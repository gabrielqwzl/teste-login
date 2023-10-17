<?php 

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassowrd = '';
$dbName = 'projeto';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassowrd,$dbName);


/*
if($conexao->connect_errno)
{
    print "Erro";
}
else 
{
    print "Conexão efetuada com sucesso";
}
?>  */