<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/listar.css"/>
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
        <?php
        
        include_once 'conexao.php';
        $consultar = "select *from tbservico";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){
        ?>
        <label>Codigo do cliente:</label>
        <input type="text" value="<?php echo $linha["codcliente"]?>" readonly>
        <label>Descrição do serviço:</label>
        <input type="text" value="<?php echo $linha["descricao"]?>" readonly>
        <div class="links">
            <a href="CRUDobsTecnica.php?id<?php echo $linha["cod"];?>">Inserir Feedbacks do serviço</a>
        </div>
	    
        
    <?php 
    } 
    ?>
    <div class="voltar">
        <a href="homepageuser.php">Voltar</a>
    </div>

    </body>
</html>