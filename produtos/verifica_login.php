<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: /Projeto_de_PHP/login.php');
    exit;
}
?>