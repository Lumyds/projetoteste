<?php
require_once ('db.class.php');
$usuario=$_POST ['usuario'];
$email=$_POST ['email'];
$senha=$_POST ['senha'];

$objDb= new db();
$link= $objDb->conecta_mysql();
$sql="insert into usuario(usuario, email, senha) values ('$usuario', '$email', '$senha')";

//executar a query
if (mysql_query($link,$sql)) {
    echo 'Usuário registrado com sucesso!';
    
} else {
    echo 'Erro ao registrar o usuário';
}
?>
