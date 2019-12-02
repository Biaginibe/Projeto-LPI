<?php
SESSION_START();
$login=isset($_POST["cxusuario"])?strtolower($_POST["cxusuario"]):"";
$senha=isset($_POST["cxsenha"])?md5($_POST["cxsenha"]):"";
$perfil=isset($_POST["cxperfil"])?strtolower($_POST["cxperfil"]):"";

include("conexao.php");

$log=mysqli_query($conn, "select * from tbusuario where user='$login' and senha='$senha' and perfil='$perfil'")or die(mysql_error());

$linha=mysqli_fetch_array($log);

if($login=="" || $senha=="")die("Acesso restrito, efetue login <br><a href=\"javascript:history.go(-1)\">Voltar</a>");

if($login!=$linha["user"]||$senha!=$linha["senha"])die 
("<strong>Nome de usuario ou senha incorreta<br>
<a href=\"javascript:history.go(-1)\">VOLTAR</a></strong>");


if($login==$linha["user"] && $senha==$linha["senha"] && $perfil=="adm"){
$_SESSION["user"]=$linha["user"];

echo "
<script language='javascript' type='text/javascript'>
window.location.href='homepageadm.php';
</script>";
}

if($login==$linha["user"] && $senha==$linha["senha"] && $perfil=="user"){
$_SESSION["user"]=$linha["user"];

echo "
<script language='javascript' type='text/javascript'>
window.location.href='homepageuser.php';
</script>";
}






?>    