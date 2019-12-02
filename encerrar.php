<?php
    session_start();

    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    unset($_SESSION['perfil']);

    session_destroy();

    echo "<script>
    window.alert('sistema Encerrado!');
    window.location.href='index.html';
    </script>";
?>

