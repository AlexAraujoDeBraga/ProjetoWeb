
<?php
	require_once 'system/system.php';
	AcessPublic();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Fazer Login</title>
	<link rel="stylesheet"  href="css/login.css" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<head>
<body>
    
     
<h2 style="position:fixed;top:30%;
right:40%;font-family:arial;font-size:12pt;"><?php ValidateLogin(); ?></h2>
	  <div id="principal" >	  
		<div id="container">
		 	<a href="http://localhost/ProjetoWeb/principal.html"
			 style="font-family:arial;
			 text-decoration:none;
			 font-size:15pt;color:white;">Início<img src="imagens/home.png" width="50px" height="53px" style="position:relative;top:-6px;"/></a>
		</div>  
		<section class="imagens">
			<center><img src="imagens/bannerprincipal.jpg"  width="1180px" height="430px"></center>
			<center><p style="
			background-color :rgb(70,0,19);
			font-family: 'Lobster', cursive;
		font-size:28pt;
		padding:4%;
		font-weight:bold;
		color:white;">Seja Bem vindo!<br>Sua Consultoria em TI!</center>
		<center><img src="imagens/calculos.jpg"  width="980px" height="410px"></center>
		</section>
		<section class="formulario">
		<center><form action="" method="post">

        	<label>Usuário*</label><br>
        	<input class="opcao" type="text" name="username" value="<?php echo GetPost('username');?>" ><br>

        	<label>Senha*</label><br>
        	<input class="opcao" type="password" name="password" value="<?php echo GetPost('password');?>"><br>
			</br>
        	<input class="botao" type="submit" name="send" value="Entrar">

			<a class="cadastrar" href="<?php echo URL_REGISTER;?>" title="Cadastrar-se">Cadastrar-se</a>
		</form>	</center>
		</section>
       <footer>
		<p class="endereco">Av. Presidente Roosevelt, Laboratório da FAT | Barro Duro | Maceió-AL - 58476-988</p>
		<hr/>
		<center><p class="telefone"><img src="imagens/whatsapp.png"/>(82) 99823.7132
		<img src="imagens/telephone.png" style="width:40px;height:52px;"/>(82) 3345.9123  </p></center>
		<p class="email"><img src="imagens/mai.png" style="width:67px;height:52px;"/>ec@eatingcommerce.com</p>
		<p class="endereco">Copyright© 2013 - by Alex - Leandro - Claudinete</p>
	</footer>
	</div>
    
</body>
</html>
