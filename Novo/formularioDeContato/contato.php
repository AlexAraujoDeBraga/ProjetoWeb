<?php
$msg = 0;
@$msg = $_REQUEST['msg'];
?>

<!DOCTYPE>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Contato</title>
		<link rel="stylesheet"  href="contato.css" type="text/css"/>
	</head>
	
	<body>
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
		color:white;"><br>Envie sua mensagem!</p></center>
			
		</section>
		<section class="formulario">
		<center>
		<fieldset id="mes">
			<legend><h3>Formulário de Contato</h3></legend>
			<form name="contactform" method="post" action = "processaForm.php" method = "get">
				<label for = "nome"> Nome: </label><br>
				<input class="opcao" name = "nome" type = "text" require><br>
				<label for = "telefone"> Telefone: </label><br>
				<input class="opcao" name = "telefone" type = "tel" require><br>
				<label for = "assunto"> Assunto: </label><br>
				<input class="opcao" name = "assunto" type = "text" require><br>
				<label for = "email"> E-mail: </label><br>
				<input class="opcao" name = "email" type = "email" require><br>
				<label for = "mensagem"> Mensagem: </label><br>
				<textarea name = "mensagem" class="opcaomensagem" require></textarea><br>
				<input class="botao" type = "submit" value="Enviar mensagem"/>
			</form>
		</fieldset>
		
			</center>
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
<!--	

-->