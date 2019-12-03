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
        $consultar = "select *from tbcliente";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){
        ?>
        <label>Codigo da empresa:</label>
        <input type="text" value="<?php echo $linha["cod"]?>" readonly>
        <label>Empresa:</label>
        <input type="text" value="<?php echo $linha["empresa"]?>" readonly>
        <label>Endereço:</label>
        <input type="text" value="<?php echo $linha["endereco"]?>" readonly>
        <label>Contato:</label>
        <input type="text" value="<?php echo $linha["contato"]?>" readonly>
        <label>CNPJ:</label>
        <input type="number" value="<?php echo $linha["cnpj"]?>" readonly>
        
        <div class="links">
            <a href="MostrarAlterarCliente.php?id=<?php echo $linha["cod"];?>">Alterar</a>     

            <a href="ExcluirDadosCliente.php?id=<?php echo $linha["cod"];?>">Excluir</a>
        </div>
	    <br/><br/><br/>
    
    <?php 
    } 
    ?>
    <div class="voltar">
        <a href="homepageadm.php">Voltar</a>
    </div>
    

    </body>
</html>