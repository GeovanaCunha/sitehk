<?php
$personagens = [
    "kitty" => [
        "nome" => "Hello Kitty",
        "imagem" => "images/kitty.png",
        "descricao" => "Uma gatinha doce que adora fazer amigos e espalhar alegria. Gosta de torta de maçã e vive em Londres com sua família.",
        "fundo" => "#ffe4e1"
    ],
    "mymelody" => [
        "nome" => "My Melody",
        "imagem" => "images/mymelody.png",
        "descricao" => "Uma coelhinha gentil que adora cozinhar e usar seu capuz vermelho. É a melhor amiga da Hello Kitty.",
        "fundo" => "#fff0f5"
    ],
    "keroppi" => [
        "nome" => "Keroppi",
        "imagem" => "images/keroppi.png",
        "descricao" => "Um sapinho animado que vive na Vila Donut. Gosta de esportes e tem muitos amigos.",
        "fundo" => "#e0fff4"
    ],
    "badtz" => [
        "nome" => "Badtz-Maru",
        "imagem" => "images/badtz.png",
        "descricao" => "Badtz-Maru é um pinguim rebelde. Apesar de parecer mal-humorado, ele tem um bom coração.",
        "fundo" => "#add8e6"
    ]
];

$nome = $_GET['nome'] ?? 'kitty';
$dados = $personagens[$nome] ?? $personagens['kitty'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $dados['nome'] ?></title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: <?= $dados['fundo'] ?>;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .container {
      display: flex;
      background: rgba(255,255,255,0.9);
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      overflow: hidden;
      max-width: 900px;
      width: 100%;
    }
    .imagem {
      flex: 1;
      background-image: url('<?= $dados['imagem'] ?>');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
    }
    .descricao {
      flex: 1;
      padding: 40px;
    }
    h1 {
      margin-top: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="imagem"></div>
    <div class="descricao">
      <h1><?= $dados['nome'] ?></h1>
      <p><?= $dados['descricao'] ?></p>
      <a href="index.php">Voltar</a>
    </div>
  </div>
</body>
</html>
