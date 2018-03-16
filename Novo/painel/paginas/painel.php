<?php
	require_once 
	$_SERVER['DOCUMENT_ROOT'].'/painel/system/system.php';
	AcessPrivate();

   $dataUser = GetUser();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>SeuCadastro</title>
<head>
<body>
        <?php GetUser();?>
        <h1>Painel</h1>
        <h2>Olá, <?php echo $dataUser['nome'];?></h2>
        <hr>
        <a href="?logout" title="sair">Sair</a>
    
</body>
</html>