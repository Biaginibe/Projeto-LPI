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
        $consultar = "select *from tbtecnico";
        $executar = mysqli_query($conn, $consultar);

        while($linha = mysqli_fetch_array($executar)){
        ?>
        <label>Codigo:</label>
        <input type="text" value="<?php echo $linha["cod"]?>" readonly>
        <label>Nome:</label>
        <input type="text" value="<?php echo $linha["nome"]?>" readonly>
        <label>Endereço:</label>
        <input type="text" value="<?php echo $linha["endereco"]?>" readonly>
        <label>Telefone:</label>
        <input type="text" value="<?php echo $linha["telefone"]?>" readonly>
        
        <div class="links">
            <a href="MostrarAlterarTecnico.php?id=<?php echo $linha["cod"];?>">Alterar</a>
	        <a href="ExcluirDadosTecnico.php?id=<?php echo $linha["cod"];?>">Excluir</a>
	    </div>
    
    <?php 
    } 
    ?>
    <div class="voltar">
        <a href="CRUDtecnicos.php">Voltar</a>
    </div>
    

    </body>
</html>