<?php
    require("islogged.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js%22%3E"></script>
        <style>
            #user{
            text-align: center;
            background-image: url(IMG/bg2.png);
            background-size: 100 80px;
            width: auto;
            margin-left: 475px;
            margin-right:525px;
            margin-top: 100px;
            }
            #user h3{
                text-align: left;
            }
        </style>
    </head>
    <body>
        <header>
            <nav id="header">
                <a href="index.html"><img src="IMG/Logo (1).png" width="125" height="100"></a>
                <a href="tierlist.html">Tier List</a>
                <span><a>Login</a> <a href="cadastro.html">Registrar</a></span>
            </nav>
        </header>
        <main>
            <div id="user">
                <hr>
                <h3>Olá <?php echo $_SESSION['nome'];?></h3>
                <h4>Suas informações estão aqui:</h4>
                <p>E-mail: <?php echo $_SESSION['user']?></p>
                <p>Quanto tempo joga: <?php echo $_SESSION['anos']?> anos</p>
                <p>Nível de experiência: <?php echo $_SESSION['experiencia']?></p>
               
                <form id="botoes" name="logout" action="logout.php">
                    <input type="submit" value="Logout" onclick=desloga()>
                </form>
                <form id="botoes" name="apagar" action="apagaConta.php">
                    <input type="submit" value="Deletar conta">
                </form>
                <form id="botoes" name = "alterar" action= "alterar.html">
                    <input type="submit" value = "Alterar">
                </from>
            </div>
        </main>
    </body>
</html>