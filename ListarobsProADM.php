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
        $consultar = "select *from tbobstecnica";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){
        ?>
        <label>Codigo da obs:</label>
        <input type="text" value="<?php echo $linha["cod"]?>" readonly>
        <label>Observação:</label>
        <input type="text" value="<?php echo $linha["obs_tecnica"]?>" readonly>
        <label>Status:</label>
        <input type="text" value="<?php echo $linha["status"]?>" readonly>
        <label>Data prevista pra conclusão:</label>
        <input type="text" value="<?php echo $linha["data_conclusao"]?>" readonly>
	    <br/><br/><br/>
    
    <?php 
    } 
    ?>
    <div class="voltar">
        <a href="homepageadm.php">Voltar</a>
    </div>
    

    </body>
</html>