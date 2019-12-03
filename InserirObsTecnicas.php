<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/fundoverde.css" />
    </head>
<body>
<?php
SESSION_START();
include_once 'conexao.php';

$obs=$_POST['cxobservação'];
$status=$_POST['cxstatus'];
$conc=$_POST['cxdtconclusao'];

$sql = "insert into tbobstecnica (obs_tecnica, status, data_conclusao)
values('$obs', '$status', '$conc')";
$query=mysqli_query($conn,$sql);

echo "<img style='position: absolute; left: 33%; top: 10%;'src='img/batatadadosinseridoscomsucess.png'/>";
echo "<br/><a class='voltar' href='CRUDobstecnica.php'>Voltar</a><br/>"

?>
</body>
</html>