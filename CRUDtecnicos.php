<html>

<head>
    <meta charser="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/folha.css" />
    <?php
        session_start();
            //isset verifica se a variavel existe
        if ((isset($_SESSION['user']) == false) && (isset($_SESSION['senha']) == false) && (isset($_SESSION['perfil']) == false)){ 
            //unset limpa a variavel
            unset($_SESSION['user']);
            unset($_SESSION['senha']);
            unset($_SESSION['perfil']);
            header('location:index.html');

        }else{
            $logado = $_SESSION['user'];

        }
    ?>
</head>

<body>
        <input type="checkbox" id="chec"> 
        <label class="menu" for ="chec">
        <img src="img/menu2.png" width="30px" heigth="30px"/> 
        
        </label>
        
        <nav>

        <!--<p>ADM</p>-->
        <!--<img src="img/batataADM.png"/>-->
        <ul>
            <a href="encerrar.php">LOGOUT</a>
            <a href="CRUDtecnicos.php"><li>Técnicos</li></a>
            <a href="CRUDservicos.php"><li>Serviços</li></a>
            <a href="CRUDclientes.php"><li>Clientes</li></a>
            <a href="ListarobsProADM.php"><li>Feedbacks</li></a>
        </ul>
        </nav>
    <form method="POST" action="inserirDadosTecnico.php">
        <div id="registra">
            <label>Nome:</label>
            <input type="text" name="cxnome" /><br />
            <label>Endereco:</label>
            <input type="text" name="cxend" /><br />
            <label>Telefone:</label>
            <input type="text" name="cxtel" /><br />
        </div>
        <div id="q">
            <input class="btn" type="submit" value=Registrar />
            <a href="listarTecnicos.php" class="btn">Listar tecnicos</a>
    
        </div>
    </form>

    
</body>

</html>