<?php
    require_once("connect_bd.php");
    function insereEXP(){
        global $conect;
        session_start();
        $insertExp = "INSERT INTO experiencia values ('', {$_POST['anos']}, '{$_POST['experiencia']}')";
        mysqli_query($conect, $insertExp);
        $_SESSION['anos']= $_POST['anos'];
        $_SESSION['experiencia']= $_POST['experiencia'];
        return mysqli_insert_id($conect);
    }
    function insereLogin(){
        global $conect;
        session_start();
        $insertLogin = "INSERT INTO tb_login values ('', '{$_POST['email']}', '{$_POST['senha']}')";
        mysqli_query($conect, $insertLogin);
        $_SESSION['user']= $_POST['email'];
        $_SESSION['password']= $_POST['senha'];
        return mysqli_insert_id($conect);        
    }
    function insereUser(){
        global $conect;
        session_start();       
        $novoId_exp = insereEXP();
        $novoId_login = insereLogin();
        $nome = $_POST['nome'];
        $insertUser = "INSERT into tb_usuario values ('', '$nome', $novoId_login, $novoId_exp)";
        mysqli_query($conect,$insertUser);
        $_SESSION['nome'] = $_POST['nome'];
    }

    insereUser();
    header("location: user.php");
?>