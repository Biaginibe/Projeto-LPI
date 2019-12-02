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
    $id = $_GET['id'];

    $consulta = "select *from tbcliente where cod ='$id'";
    $executar = mysqli_query($conn, $consulta);

    while($exibir = mysqli_fetch_array($executar)){
    ?>
    <form method="POST" action="AlterarDadosCliente.php">

	    <input type="hidden" name="codigo" value="<?php echo $exibir['cod'];?>">
	    Empresa:<input type="text" name="cxemp" value="<?php echo $exibir['empresa'];?>">
        Endereço:<input type="text" name="cxend" value="<?php echo $exibir['endereco'];?>">
        Contato:<input type="text" name="cxcontato" value="<?php echo $exibir['contato'];?>">
        CNPJ:<input type="text" name="cxcnpj" value="<?php echo $exibir['cnpj'];?>">
	<input type="submit" value="Alterar">
	</form>
	
    <?php 
    } 
    ?>




    </body>
</html>