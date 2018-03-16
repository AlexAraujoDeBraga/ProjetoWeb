<?php
    //Banco de Dados
    define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD','');
    define('DATABASE', 'painel');

    //URL´S
    define('URL_BASE', 'http://localhost/ProjetoWeb/php/system/');
    define('URL_REGISTER', URL_BASE.'paginas/cadastrar.php');
    define('URL_PAINEL', URL_BASE.'paginas/painel.php');

    // DIR´S
    define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'].'/ProjetoWeb/php/');
    define('DIR_SYSTEM', DIR_BASE.'system/');
    echo DIR_SYSTEM;
    // Files
    define('FILE_CONFIG', DIR_SYSTEM.'config.php');
    define('FILE_HELPERS', DIR_SYSTEM.'helpers.php');
    define('FILE_DATABASE', DIR_SYSTEM.'database.php');
?>