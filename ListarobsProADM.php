<html>
    <head>
        <meta charset="UTF-8"/>
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
        Codigo da obs:<input type="text" value="<?php echo $linha["cod"]?>" readonly>
        Observação:<input type="text" value="<?php echo $linha["obs_tecnica"]?>" readonly>
        Status:<input type="text" value="<?php echo $linha["status"]?>" readonly>
        Data prevista pra conclusão:<input type="text" value="<?php echo $linha["data_conclusao"]?>" readonly>
	    <br/><br/><br/>
    
    <?php 
    } 
    ?>
    
    <a href="homepageadm.php">Voltar</a>
    

    </body>
</html>