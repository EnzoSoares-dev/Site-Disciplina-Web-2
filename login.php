<?php
    require_once("connect_bd.php");
        GLOBAL $_SESSION;
      
        GLOBAL $conect;
        $email = $_POST["correio"];
        $senha = $_POST["password"];

        $select_email = "SELECT email from tb_login where email = '$email' and senha = '$senha'";
        $select_senha = "SELECT senha from tb_login where senha = '$senha' and email = '$email'";
        $select_nome = "SELECT Usuario FROM tb_usuario WHERE id_login in(SELECT id_login from tb_login where senha = '$senha' AND email = '$email');";
        $select_experiencia = "SELECT experiencia FROM experiencia WHERE id_exp in(SELECT id_exp from tb_usuario where id_login in(SELECT id_login from tb_login where senha = '$senha' AND email = '$email'));";
        $select_anos = "SELECT anos FROM experiencia WHERE id_exp in(SELECT id_exp from tb_usuario where id_login in(SELECT id_login from tb_login where senha = '$senha' AND email = '$email'));";
        
        $recebe_email = mysqli_query($conect, $select_email);
        $recebe_senha = mysqli_query($conect, $select_senha);
        $recebe_nome = mysqli_query($conect, $select_nome);
        $recebe_experiencia = mysqli_query($conect, $select_experiencia);
        $recebe_anos = mysqli_query($conect, $select_anos);

        $bd_email = $recebe_email->fetch_assoc();
        $bd_senha = $recebe_senha->fetch_assoc();
        $bd_nome = $recebe_nome->fetch_assoc();
        $bd_experiencia = $recebe_experiencia->fetch_assoc();
        $bd_anos = $recebe_anos->fetch_assoc();
        
        foreach($bd_senha as $valor)
        {
            $array_senha = $valor;
        }
        foreach($bd_email as $valor)
        {
            $array_email = $valor;
        }
        foreach($bd_nome as $valor)
        {
            $array_nome = $valor;
        }
        foreach($bd_experiencia as $valor)
        {
            $array_experiencia = $valor;
        }
        foreach($bd_anos as $valor)
        {
            $array_anos = $valor;
        }
        if($email == $array_email && $senha == $array_senha){
            session_start();
            $_SESSION['user'] = $email;
            $_SESSION['password'] = $senha;
            $_SESSION['nome']= $array_nome;
            $_SESSION['experiencia']= $array_experiencia;
            $_SESSION['anos']= $array_anos;
            $_SESSION['logged'] = true;
        }
        header("Location: user.php");
?>