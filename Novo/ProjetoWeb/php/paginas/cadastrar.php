<?php
	require_once 
	$_SERVER['DOCUMENT_ROOT'].'/ProjetoWeb/php/system/system.php';
	AcessPublic();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cadastra-se</title>
<head>
<body>
    
        <h1>Cadastrar!</h1>
        <hr>
		<?php ValidateFormRegister();?>
        <form action="" method="post">

        	<label>Nome</label><br>
        	<input type="text" name="nome" value="<?php echo GetPost('nome');?>"><br>

        	<label>E-mail</label><br>
        	<input type="text" name="email" value="<?php echo GetPost('email');?>"><br>

        	<label>Usuário</label><br>
        	<input type="text" name="username" value="<?php echo GetPost('username');?>"><br>

        	<label>Senha</label><br>
        	<input type="password" name="password" value="<?php echo GetPost('password');?>"><br>

        	<label>	Confirmar Senha</label><br>
        	<input type="password" name="confirm" value="<?php echo GetPost('confirm');?>"><br>

        	<hr>
        	<input type="submit" name="send" value="cadastrar">
<a href="<?php echo 'http://localhost/ProjetoWeb/php/login.php';?>" title="Fazer Login">Fazer Login</a>
        </form>
    
</body>
</html>