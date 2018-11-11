<?php
// CONFIGURAÇÕES DO BANCO DE DADOS
define('DRIVER_CONEXAO', 'pgsql');
define('SERVER', 'localhost');
define('DATA_BASE', 'sigem');
define('USER', 'postgres');
define('PASS', 'admin');

// CONSTANTES DO CORE
define('CONTROLLE_PADRAO', 'index');
define('METODO_PADRAO', 'index');
define('NAMESPACE_CONTROLLE', 'app\\controllers\\');

define('URL_BASE', 'http://localhost/SIGEM-MVC/');
define('ROOT_PATH', dirname(__FILE__));

//Configurações  de LOGIN

define('ATENTICATION_REQUIRE', true);
define('NOME_SESSION_LOGIN', 'user');
define('LOGIN_PAGE', 'login');
