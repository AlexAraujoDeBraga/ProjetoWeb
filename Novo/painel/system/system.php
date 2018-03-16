<?php
  Init();
   //ValidaFormLogin
   function ValidateLogin(){
       if(!!GetPost('send')){
           $message = null;
           
           $username = GetPost('username');
           $password = GetPost('password');

           if(empty($username))
                $message = 'Informe seu nome de usuário!';
           else if(empty($password))
                $message = 'Informe sua senha!'; 
            else {

               if(!UserVerify($username, $password))
                    $message = 'Nome de usuário ou senha incorretos!';
              else if(!UserVerify($username, $password, true))
                    $message = 'Esta conta foi desativada!';
               else 
                    CreateSession($username, $password);
                   
             }  

           echo ($message != null) ? $message.'<hr>' : null;
       }
   }
    
    //Validar Cadastro
    function ValidateFormRegister(){
        //Se for direfernet de false
        if(!!GetPost('send')){
           $message = null;
           
            $nome = GetPost('nome');
            $email = GetPost('email');
            $username = GetPost('username');
            $password = GetPost('password');
            $confirm = GetPost('confirm');

            if(empty($nome))
                $message = 'Informe seu Nome!';
            else if(empty($email))
                $message = 'Informe seu E-mail!'; 
            else if(!filter_var
            ($email, FILTER_VALIDATE_EMAIL))
                $message = 'Informe um E-mail válido!';
            else if(empty($username))
                $message = 'Informe seu nome de Usuário!';
            else if(empty($password))
                $message = 'Informe sua Senha!';   
            else if(empty($confirm))    
                $message = 'Confirme sua Senha!';
            else if($password !=$confirm)
                $message = 'As senhas não correspondem!';
            else {

                if(!MailExists($email))
                    $message = 'Esse e-mail já foi cadastrado!';
                else if(!UserNameExists($username))
                    $message = 'Nome de usuário já cadastrado!';
                else {
                    $register = 
                    Register($nome, $email, $username, $password);
                    if(!$register)
                        $message = 'Desculpe, ocorreu um erro';
                    else
                        $message = 'Você foi cadastrado com sucesso!';    
                }

            }    

           echo ($message != null) ? $message. '<hr>' : null;     
            
        }
    }
    // Inicia o sistema
    function Init(){
        session_start();
        
        $configFile = $_SERVER['DOCUMENT_ROOT'].
        '/painel/system/config.php';

        // Verifica se arquivo existe, chamando-o
       if(!file_exists($configFile))
            die('Arquivo config.php não existe!');
        else
            require_once $configFile;
       
        if(!file_exists(FILE_HELPERS))    
            die('Arquivo helpers.php não existe!');
        else
            require_once FILE_HELPERS;

         if(!file_exists(FILE_DATABASE))    
            die('Arquivo database.php não existe!');
        else
            require_once FILE_DATABASE;  
       
       

           
       
        //Chamando a conexão com banco de dados           
    Connect();
    DoLogout();
    }
      
?>