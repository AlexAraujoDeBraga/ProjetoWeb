<?php
    //Recupera dados do usuário
    function GetUser($key = null){
        if(!IsLogged())
            return false;
        else{
            $userkey = UserLog();
            $query = "SELECT * FROM membros WHERE userkey = '$userkey'
            AND status = true LIMIT 1";
            $result = mysql_query($query) or die(mysql_error());
            $data = mysql_fetch_assoc($result);
            
            if($key == null)
                return $data;
            else 
                return (isset($data[$key])) ? $data[$key] : false;
           
        }
    }

    // Verifica Login de usuário Logado
    function StayLogged(){
        $userkey = UserLog();
        $query = "SELECT userkey FROM membros WHERE userkey 
        = '$userkey' AND status = true";
        $result = mysql_query($query) or die(mysql_error());

        if(mysql_num_rows($result) <= 0)
            return false;
        else
            return true;
    }
    
    // Recupera Key
    function GetKey($username, $password){
        $dataUser = UserVerify($username, $password, true);
        return $dataUser;
    }

    //Verifica Usuário
    function UserVerify($username, $password, $status = false){
        $password = CryptPassword($password);
        $query = "SELECT * FROM membros WHERE username = '$username'
        AND password = '$password'";
        $query .=($status) ? " AND status = true": '';
        $result = mysql_query($query) or die(mysql_error());

        if(mysql_num_rows($result) <=0)
            return false;
        else{
            $data = mysql_fetch_assoc($result);
            return $data['userkey'];
        }
    }
    // Função para Cadastrar usuário
    function Register($nome, $email, $username, 
    $password, $status = true){
        //Chamando função para criptografar a senha do usuário
        $password = CryptPassword($password);
        $userKey = KeyGenerator();
        //Pegando data atual de registro
        $register = time();

        $query = "INSERT INTO membros 
        (nome, email, username, password, userkey, register, status) ";
        //Concatenando
        $query .="VALUES('$nome', '$email',  
        '$username', '$password', '$userKey', $register, $status)";
        $result = mysql_query($query) or die (mysql_error());
        return $result;

    }
    //Verifica se existe Login
    function UserNameExists($username){
        $query = "SELECT username FROM membros WHERE 
        username = '$username'";
        $result = mysql_query($query) or die(mysql_error());
        //Se existir usuário, novo usuário não pode ser cadastrado
        if(mysql_num_rows($result) <= 0)
            return true;
        else
            return false;
    }
    // Verifica se Existe email
    function MailExists($email){
        $query = "SELECT email FROM membros WHERE 
        email = '$email'";
        $result = mysql_query($query) or die(mysql_error());
        //Se existir e-mail usuário não pode ser cadastrado
        if(mysql_num_rows($result) <= 0)
            return true;
        else
            return false;
    }

    //  Conexão com o Banco de Dados
    function connect(){

        $conn = mysql_connect(HOSTNAME, USERNAME, PASSWORD);

        if(!$conn)
            die(mysql_error());
        else{
            mysql_select_db(DATABASE, $conn) 
            or die(mysql_error());
            mysql_query("SET NAMES 'utf-8'");
            mysql_query("SET character_set_connection=utf8");
            mysql_query("SET character_set_client=utf8");
            mysql_query("SET character_set_results=utf8");
        }


    }
?>