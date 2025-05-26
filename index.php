<?php
session_start();
if (!isset($_SESSION['theme'])) $_SESSION['theme'] = 'light';
if (!isset($_SESSION['daltonism'])) $_SESSION['daltonism'] = 'none';
if (!isset($_SESSION['font_size'])) $_SESSION['font_size'] = '16';
if (!isset($_SESSION['lang'])) $_SESSION['lang'] = 'pt';

$langs = [
    'pt' => ['title' => 'Bem-vindo ao Mundo Hello Kitty', 'text' => 'Hello Kitty é uma personagem adorável criada no Japão.'],
    'en' => ['title' => 'Welcome to Hello Kitty World', 'text' => 'Hello Kitty is a lovely character created in Japan.'],
    'es' => ['title' => 'Bienvenido al Mundo de Hello Kitty', 'text' => 'Hello Kitty es un personaje adorable creado en Japón.'],
    'fr' => ['title' => 'Bienvenue dans le monde de Hello Kitty', 'text' => 'Hello Kitty est un personnage adorable créé au Japon.'],
    'jp' => ['title' => 'ハローキティの世界へようこそ', 'text' => 'ハローキティは日本で作られた可愛いキャラクターです。']
];
$lang = $langs[$_SESSION['lang']];
?>
<!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>">
<head>
    <meta charset="UTF-8">
    <title><?=$lang['title']?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-dark.css">
    <link rel="stylesheet" href="css/style-daltonic.css">
    <script src="js/script.js" defer></script>
</head>
<body class="<?=$_SESSION['theme']?> <?=$_SESSION['daltonism']?>" style="font-size: <?=$_SESSION['font_size']?>px">
    <header>
        <h1><?=$lang['title']?></h1>
    </header>
    <nav>
        <a href="personagem.php?nome=kitty">Hello Kitty</a>
        <a href="personagem.php?nome=mymelody">My Melody</a>
        <a href="personagem.php?nome=keroppi">Keroppi</a>
        <a href="personagem.php?nome=badtz">Badtz-Maru</a>
    </nav>
    <aside id="personalizar">
        <h2>Personalizar</h2>
        <form action="set_preferences.php" method="POST">
            <label>Tamanho da Fonte:</label>
            <input type="range" name="font_size" min="12" max="32" value="<?=$_SESSION['font_size']?>"><br>
            <label>Idioma:</label>
            <select name="lang">
                <option value="pt">Português</option>
                <option value="en">Inglês</option>
                <option value="es">Espanhol</option>
                <option value="fr">Francês</option>
                <option value="jp">Japonês</option>
            </select><br>
            <label>Daltonismo:</label>
            <select name="daltonism">
                <option value="none">Nenhum</option>
                <option value="protanopia">Protanopia</option>
                <option value="deuteranopia">Deuteranopia</option>
                <option value="tritanopia">Tritanopia</option>
            </select><br>
            <label>Modo:</label>
            <select name="theme">
                <option value="light">Claro</option>
                <option value="dark">Escuro</option>
            </select><br>
            <button type="submit">Salvar</button>
        </form>
    </aside>
    <section id="memory-game">
        <h2>Jogo da Memória</h2>
        <div id="game-board" class="game-board"></div>
    </section>
</body>
</html>
