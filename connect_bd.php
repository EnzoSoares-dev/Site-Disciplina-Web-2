<?php
    $host = "localhost";
    $database = "atividade web2";
    $admin = "root";
    $password = "";

    $conect = mysqli_connect($host,$admin,$password,$database);

    if(! $conect){
        echo "Erro!!";
    }else{
        echo "Conectado com sucesso";
    }
?>