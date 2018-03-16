<?php
	require_once '/system/system.php';
	AcessPublic();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Fazer Login</title>
<head>
<body>
    
        <h1>Login</h1>
		<?php ValidateLogin(); ?>
        <form action="" method="post">

        	<label>Usuário</label><br>
        	<input type="text" name="username" value="<?php echo GetPost('username');?>"><br>

        	<label>Senha</label><br>
        	<input type="password" name="password" value="<?php echo GetPost('password');?>"><br>

        	<hr>
        	<input type="submit" name="send" value="Entrar">

			<a href="<?php echo URL_REGISTER;?>" title="Cadastrar-se">Cadastrar-se</a>

        </form>

    
</body>
</html>