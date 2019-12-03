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

    $consulta = "select *from tbtecnico where cod ='$id'";
    $executar = mysqli_query($conn, $consulta);

    while($exibir = mysqli_fetch_array($executar)){
    ?>
    <form method="POST" action="AlterarDadosTecnico.php" class="mostra">

	    <input type="hidden" name="codigo" value="<?php echo $exibir['cod'];?>">
        <label>Nome:</label>
        <input type="text" name="cxnome" value="<?php echo $exibir['nome'];?>">
        <label>Endereço:</label>
        <input type="text" name="cxend" value="<?php echo $exibir['endereco'];?>">
        <label>Telefone:</label>
        <input type="text" name="cxtel" value="<?php echo $exibir['telefone'];?>">
	<input type="submit" value="Alterar">
	</form>
	
    <?php 
    } 
    ?>




    </body>
</html>