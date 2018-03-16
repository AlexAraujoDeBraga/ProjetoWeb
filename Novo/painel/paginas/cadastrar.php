<?php
	require_once 
	$_SERVER['DOCUMENT_ROOT'].'/painel/system/system.php';
	AcessPublic();
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cadastra-se</title>
	<link rel="stylesheet"  href="cadastrar.css" type="text/css"/>
<head>
<body>
    
        
	<h2 style="position:fixed;top:18%;
left:25%;font-family:arial;font-size:12pt;">	<?php ValidateFormRegister();?></h2>
		<div id="principal" >	  
		<div id="container">
		 	<a href="http://localhost/ProjetoWeb/principal.html"
			 style="font-family:arial;
			 text-decoration:none;
			 font-size:15pt;color:white;">Início<img src="home.png" width="50px" height="53px" style="position:relative;top:-6px;"/></a>
		</div>  
		<section class="imagens">
			<center><img src=""  width="1180px" height="430px"></center>
			<center><p style="
			background-color :rgb(70,0,19);
			
			font-family: 'Lobster', cursive;
		font-size:28pt;
		padding:4%;
		font-weight:bold;
		color:white;">Seja Bem vindo!<br>Não deixe de se Cadastrar!</p></center>
			<center><img src="cadastramento.jpg"  width="1180px" height="410px"></center>
		</section>
		<section class="formulario">
		<center>
        <form action="" method="post">

        	<label>Nome*</label><br>
        	<input class="opcao" type="text" name="nome" value="<?php echo GetPost('nome');?>"><br>

        	<label>E-mail*</label><br>
        	<input class="opcao" type="text" name="email" value="<?php echo GetPost('email');?>"><br>

        	<label>Usuário*</label><br>
        	<input class="opcao" type="text" name="username" value="<?php echo GetPost('username');?>"><br>

        	<label>Senha*</label><br>
        	<input class="opcao" type="password" name="password" value="<?php echo GetPost('password');?>"><br>

        	<label>	Confirmar Senha*</label><br>
        	<input class="opcao" type="password" name="confirm" value="<?php echo GetPost('confirm');?>"><br>

        	<br>
        	<input class="botao" type="submit" name="send" value="cadastrar">
<a class="login" href="<?php echo URL_BASE;?>" title="Fazer Login">Fazer Login</a>
        </form></center>
		</section>
       <footer>
		<p class="endereco">Av. Presidente Roosevelt, Laboratório da FAT | Barro Duro | Maceió-AL - 58476-988</p>
		<hr/>
		<center><p class="telefone"><img src="whatsapp.png"/>(82) 99823.7132
		<img src="telephone.png" style="width:40px;height:52px;"/>(82) 3345.9123  </p></center>
		<p class="email"><img src="mai.png" style="width:67px;height:52px;"/>ec@eatingcommerce.com</p>
		<p class="endereco">Copyright© 2013 - by Alex - Leandro - Claudinete</p>
	</footer>
	</div>
    
</body>
</html>
