<?php
    require_once("connect_bd.php");

    function pegaID_EXP(){
        session_start();
        GLOBAL $conect;
        $experiencia = $_SESSION['experiencia'];
        $anos = $_SESSION['anos'];

        $id_exp = "SELECT id_exp from experiencia where experiencia = '$experiencia' and anos = $anos";
        $recebe_id_EXP = mysqli_query($conect, $id_exp);
        $bd_id_EXP = $recebe_id_EXP->fetch_assoc();

        foreach($bd_id_EXP as $valor){
            $valor_id_exp = $valor;
        }
        return $valor_id_exp;
    }

    function pegaID_Login(){
        GLOBAL $conect;
        session_start();
        $email = $_SESSION['user'];
        $senha = $_SESSION['password'];

        $id_login = "SELECT id_login from tb_login where email = '$email' and senha = '$senha'";
        $recebe_id_login = mysqli_query($conect, $id_login);
        $bd_id_login = $recebe_id_login->fetch_assoc();

        foreach($bd_id_login as $valor){
            $valor_id_login = $valor;
        }
        return $valor_id_login;
    }
    function apagaUser(){
        GLOBAL $conect;
        $idEXP = pegaID_EXP();
        $idLogin = pegaID_Login();
        $usuario = $_SESSION['nome'];
        
        $deletaUser = "DELETE from tb_usuario where Usuario = '$usuario' and id_login = $idLogin and id_exp = $idEXP";
        echo $deletaUser;
        if(mysqli_query($conect,$deletaUser)){
            echo "deu bom";
        }else{
            echo mysqli_error($conect);
        }
        $experiencia = $_SESSION['experiencia'];
        $anos = $_SESSION['anos'];
        $deletaEXP = "DELETE from experiencia where experiencia = '$experiencia' and anos = $anos";

        if(mysqli_query($conect, $deletaEXP)){
            echo "Deu bom";
        }else{
            echo "Deu erro: ". mysqli_error($conect);
        }
        $email = $_SESSION['user'];
        $senha = $_SESSION['password'];
        $deletaLogin = "DELETE from tb_login where email = '$email' and senha = '$senha'";

        if(mysqli_query($conect, $deletaLogin)){
            echo "Deu bom";
        }else{
            echo "Deu erro: ". mysqli_error($conect);
        }
    }

    apagaUser();
    session_destroy();
    header("Location: cadastro.html");
?>