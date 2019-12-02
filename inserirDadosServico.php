<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundoverde.css" />
    </head>
<body>
<?php
SESSION_START();
include_once 'conexao.php';

$codtecnico=$_POST['cxcodtec'];
$codcliente=$_POST['cxcodcli'];
$descricao=$_POST['cxdescricao'];

$sql = "insert into tbservico (codtecnico, codcliente, descricao)
values('$codtecnico', '$codcliente', '$descricao')";
$query=mysqli_query($conn,$sql);

echo "<img style='position: absolute; left: 30%;'src='img/batatadadosinseridoscomsucess.png'/>";
echo "<br/><a class='voltar' href='homepageadm.php'>Voltar</a><br/>"

?>
</body>
</html>