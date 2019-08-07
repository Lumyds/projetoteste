<?php
require_once ('db.class.php');
$usuario = $_POST['usuario'];
$senha=$_POST ['senha'];

$sql = "SELECT * FROM usuarios WHERE usuarios = '$usuario' AND senha = '$senha'";

$objDb= new db();
$link= $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

if ($resultado_id){
    $dados_usuario = mysqli_fetch_array($resultado_id);
    if (isset($dados_usuario['usuario'])){
        echo 'Usuario existe';
    } else {
        header('Location: index.php?erro=1');
    } 
}else {
    echo 'Erro na conexão da consulta, favor entrar em contato com o admin do site';
}
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

