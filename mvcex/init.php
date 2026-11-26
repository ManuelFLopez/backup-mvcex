<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('APP_URL', 'https://manolo.alwaysdata.net/mvcex');

$bdUsuario = getenv('MVCEX_DB_USER');
$bdSenha = getenv('MVCEX_DB_PASSWORD');
$bdBanco = getenv('MVCEX_DB_NAME');

define('BD_SERVIDOR', 'mysql-manolo.alwaysdata.net');
define('BD_USUARIO', $bdUsuario !== false ? $bdUsuario : '');
define('BD_SENHA', $bdSenha !== false ? $bdSenha : '');
define('BD_BANCO', $bdBanco !== false ? $bdBanco : 'livraria');

