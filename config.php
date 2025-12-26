<?php
/*Iremos fazer a conexão com o banco de dados */

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'bancocadastro');

$conn = new MySQLi(HOST, USER, PASS, BASE);

?>