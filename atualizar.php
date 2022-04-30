<?php
    require_once("connect_bd.php");
    session_start();

    function senhaBanco(){
        GLOBAL $conect;
        $email = $_SESSION['user'];
        $select_senha = "SELECT senha from tb_login where email = '$email'";
        $recebe_senha = mysqli_query($conect, $select_senha);
        $bd_senha = $recebe_senha->fetch_assoc();
        foreach($bd_senha as $valor){
            $valor_senha = $valor;
        }
        return $valor_senha;
    }
    function verificaSenhaAntiga(){
        $bd_senha = senhaBanco();
        $senhaAntiga = $_POST['senhaAntiga'];

        if($bd_senha == $senhaAntiga){
            return $senhaAntiga;
        }else{
            return false;
        }
    }
    function comparaSenha(){
        GLOBAL $conect;
        $senha = verificaSenhaAntiga();
        $senhaNova = $_POST['senhaNova'];
        $senhaConfirma = $_POST['senhaConfirma'];
        $email = $_SESSION['user'];

        if($senhaNova == $senhaConfirma && $senhaNova != $senha){
            $update_senha = "UPDATE tb_login set senha = '$senhaNova' where senha = '$senha' and email = '$email'";           
            $confirma = mysqli_query($conect,$update_senha);
            $_SESSION['password'] = $senhaNova;           
        }
    }
    function nomeBanco(){
        GLOBAL $conect;
        $email = $_SESSION['user'];
        $senha = $_SESSION['password'];
        
        $select_nome = "SELECT Usuario from tb_usuario where id_login in(SELECT id_login from tb_login where email = '$email' and senha = '$senha')";
        $recebe_nome = mysqli_query($conect,$select_nome);

        $bd_nome = $recebe_nome->fetch_assoc();
        foreach($bd_nome as $valor){
            $valor_nome = $valor;
        }
        return $omvalor_ne;
    }
    function comparaNome(){
        $bd_nome = nomeBanco();
        $nome = $_POST['nome'];

        var_dump ($nome);

        if($bd_nome !=$nome && $nome != ""){
            echo "Nomes diferentes";
            $result = atualizaNome();
            if($result ==true){
                echo "Nomes trocados";
                $_SESSION['nome'] = $nome;
            }else{
                echo mysqli_error($conect);
            }
        }else{
            echo "Nomes iguais";
        }
        echo $_SESSION['nome'];
    }
    function atualizaNome(){
        GLOBAL $conect;
        $email = $_SESSION['user'];
        $senha = $_SESSION['password'];
        $nome = $_POST['nome'];
        
        $updateNome = "UPDATE tb_usuario set Usuario = '$nome' where id_login in (select id_login from tb_login where email = '$email' and senha = '$senha')";

        $result = mysqli_query($conect,$updateNome);
        return $result;
    }
    function anoBanco(){
        GLOBAL $conect;
        $nome = $_SESSION['nome'];
        $select_anos = "SELECT anos from experiencia where id_exp in(SELECT id_exp from tb_usuario where Usuario = '$nome')";
        $recebe_anos = mysqli_query($conect,$select_anos);
        $bd_anos = mysqli_fetch_assoc($recebe_anos);

        foreach($bd_anos as $valor){
            $valor_anos = $valor;
        }
        return $valor_anos;

    }
    function comparaAnos(){
        $anos = $_POST['anos'];
        $bd_anos = anoBanco();
        var_dump($bd_anos);
        var_dump($anos);
        if($anos != $bd_anos && $anos != ""){
            echo "Anos diferentes";
            atualizaAnos();
            $_SESSION['anos'] = $anos;
            echo $_SESSION['anos'];
        }else{
            echo "Anos iguais";
        }
    }
    function atualizaAnos(){
        GLOBAL $conect;
        $nome = $_SESSION['nome'];
        $anos = $_POST['anos'];

        $update_anos = "UPDATE experiencia set anos = $anos where id_exp in (SELECT id_exp from tb_usuario where Usuario = '$nome')";
        $result = mysqli_query($conect, $update_anos);
    }
    
    function expBanco(){
        GLOBAL $conect;
        $nome = $_SESSION['nome'];
        $select_EXP = "SELECT experiencia from experiencia where id_exp in(SELECT id_exp from tb_usuario where Usuario = '$nome')";
        $recebe_EXP = mysqli_query($conect,$select_EXP);
        $bd_EXP = mysqli_fetch_assoc($recebe_EXP);

        foreach($bd_EXP as $valor){
            $valor_EXP = $valor;
        }
        return $valor_EXP;
    }
    function comparaEXP(){
        $bd_EXP = expBanco();
        $experiencia = $_POST['experiencia'];
      
        if($experiencia != $bd_EXP && $experiencia !=""){
            echo "Experiencia diferente";
            atualizaEXP();
            $_SESSION['experiencia'] = $experiencia;
            echo $_SESSION['experiencia'];
        }else{
            echo "Experiencia igual";
        }
    }
    function atualizaEXP(){
        GLOBAL $conect;
        $nome = $_SESSION['nome'];
        $experiencia = $_POST['experiencia'];

        $update_exp ="UPDATE experiencia set experiencia = '$experiencia' where id_exp in (SELECT id_exp from tb_usuario where Usuario = '$nome')";
        $result = mysqli_query($conect,$update_exp);
    }

    function chamaFuncao(){
        comparaSenha();
        comparaNome();
        comparaAnos();
        comparaEXP();
        header("Location: user.php");
    }
    chamaFuncao();
?>