<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author Aluno
 */
class db {
    private $usuario = 'root';
    private $senha = '';
    private $database = 'twitter_clone';
    public function conecta_mysql() {
        $con = mysql_connect ($this->host, $this->usuario, $this->senha, $this->database);
        mysql_set_charset ($con,'utf8');
        if (mysql_connect_errno()){
            echo 'Erro ao tentar se conectar com o Banco de Dados MySQL:'. mysql_connect_error();
            return $con;
        }
        
    }
}
?>
