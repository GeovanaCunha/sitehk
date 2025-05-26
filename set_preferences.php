<?php
session_start();
$_SESSION['theme'] = $_POST['theme'] ?? 'light';
$_SESSION['daltonism'] = $_POST['daltonism'] ?? 'none';
$_SESSION['lang'] = $_POST['lang'] ?? 'pt';
$_SESSION['font_size'] = $_POST['font_size'] ?? '16';
header('Location: index.php');
exit;
