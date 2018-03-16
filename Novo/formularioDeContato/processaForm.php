<html>
<head>
<title>Enviando E-mail</title>
</head>
<body>
<?php
$destino = "alexbraga107@gmail.com";
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$corpoemail = "Fale Conosco - ACL Consultoria

			Nome : " .$nome."
			Telefone : " .$telefone."
			E-mail : " .$email."
			Assunto : " .$assunto."
			Mensagem : " .$mensagem;
mail($destino, "Fale Conosco",$corpoemail);
	header("Location:http://localhost/ProjetoWeb/principal.html");


?>



</body>
</html>