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
    $id = $_GET['id'];

    $consulta = "select *from tbservico where cod ='$id'";
    $executar = mysqli_query($conn, $consulta);

    while($exibir = mysqli_fetch_array($executar)){
    ?>
    <form method="POST" action="AlterarDadosServico.php" class="mostra">

	    <input type="hidden" name="codigo" value="<?php echo $exibir['cod'];?>">
        <label>Codigo do tecnico:</label>
        <input type="text" name="cxcodtec" value="<?php echo $exibir['codtecnico'];?>">
        <label>Codigo do cliente:</label>
        <input type="text" name="cxcodcli" value="<?php echo $exibir['codcliente'];?>">
        <label>Descrição:</label>
        <input type="text" name="cxdescricao" value="<?php echo $exibir['descricao'];?>">
	<input type="submit" value="Alterar">
	</form>
	
    <?php 
    } 
    ?>




    </body>
</html>