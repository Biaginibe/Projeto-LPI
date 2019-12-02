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
        $consultar = "select *from tbcliente";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){
        ?>
        Codigo da empresa:<input type="text" value="<?php echo $linha["cod"]?>" readonly>
        Empresa:<input type="text" value="<?php echo $linha["empresa"]?>" readonly>
        Endereço:<input type="text" value="<?php echo $linha["endereco"]?>" readonly>
        Contato:<input type="text" value="<?php echo $linha["contato"]?>" readonly>
        CNPJ:<input type="number" value="<?php echo $linha["cnpj"]?>" readonly>
        
        
        <a href="MostrarAlterarCliente.php?id=<?php echo $linha["cod"];?>">Alterar</a>
	    <a href="ExcluirDadosCliente.php?id=<?php echo $linha["cod"];?>">Excluir</a>
	    <br/><br/><br/>
    
    <?php 
    } 
    ?>
    
    <a href="homepageadm.php">Voltar</a>
    

    </body>
</html>