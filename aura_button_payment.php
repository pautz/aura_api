<?php
session_start();

// Exemplo de valores
$valorCompra = 10;
$compraId    = 3695;

// Links de pagamento
$linkAura   = "https://carlitoslocacoes.com/pulse/xs1.php?valor={$valorCompra}&compra_id={$compraId}";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Forma de Pagamento</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 400px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .option {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 15px;
      cursor: pointer;
      transition: background 0.3s;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }
    .option:hover {
      background: #f0f0f0;
    }
    .option span:last-child {
      color: #999;
    }
    .aura {
      background: #e91e63;
      color: #fff;
    }
    .aura:hover {
      background: #c2185b;
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="<?= $linkAura ?>" class="option aura">
      <span>✨ Aura</span>
      <span>PAGUE <?= "R$" . number_format($valorCompra, 2, ',', '.') ?></span>
    </a>
  </div>
</body>
</html>
