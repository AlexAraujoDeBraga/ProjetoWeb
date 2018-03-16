<?php
    //Banco de Dados
    define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD','');
    define('DATABASE', 'painel');

    //URL´S
    define('URL_BASE', 'http://localhost/painel/login.php');
    define('URL_REGISTER', 'http://localhost/painel/paginas/cadastrar.php');
    define('URL_PAINEL', 'http://localhost/painel/paginas/painel.php');

    // DIR´S
    define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'].'/painel/');
    define('DIR_SYSTEM', DIR_BASE.'system/');
    
    // Files
    define('FILE_CONFIG', DIR_SYSTEM.'config.php');
    define('FILE_HELPERS', DIR_SYSTEM.'helpers.php');
    define('FILE_DATABASE', DIR_SYSTEM.'database.php');
?>