<?php
        
      
    //===================Proteção=======================
   //Contraola acesso público (jogar usuario se estiver logado)
   function AcessPublic(){
       if(IsLogged())
            Redirect(URL_PAINEL);
   }     

   //Controla acesso privado
    function AcessPrivate(){
        if(!IsLogged())
            Redirect(URL_BASE);

    }
    
    //===========================================
    

    //===================Sessão=======================
    
    // Efetua Logout
    function DoLogout(){
        if(isset($_GET['logout']))
            DestroySession();
    }
    // Destri sessão
    function DestroySession(){
        unset($_SESSION['userLog']);
        AcessPrivate();
    }
    // Cria a sessão
    function CreateSession($username, $password){
        $key = GetKey($username, $password);
        UserLog($key);
        AcessPublic();
    }

    //Seta(cria sessão userlog) ou recupera
    function UserLog($value = null){
        if($value === null)
            return $_SESSION['userLog'];
        else
            $_SESSION['userLog'] = $value;
    } 
    
    //Verifica Login
    function IsLogged(){
        if(!isset($_SESSION['userLog']) 
        || empty($_SESSION['userLog']))
            return false;
        else{
            if(StayLogged())
                return true;
            else 
                DestroySession();
        } 
            
    }

    //===========================================
    

    //Criptografar Senhas Sha1 é como se fosse MD5
    function CryptPassword($password){
        return sha1($password);
    }

  // Gera Key de Usuário
  function KeyGenerator(){
      return sha1(rand().time());
  }


  // Recuperar POST
  function GetPost($key = null){
      if($key === null)
        return $_POST;
    else
        return (isset($_POST[$key])) ? ClearString($_POST[$key]) : false;
  }

  // Redireciona
  function Redirect($url){
      header("Location: ".$url);
      die();
  }
  
  // Limpa String
    function ClearString($str){
        return mysql_real_escape_string(strip_tags(trim($str)));
    }
    
?>