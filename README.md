# API de Pagamentos em Aura

Este projeto permite realizar pagamentos em **Aura** através de URLs simples que geram QR Codes e se conectam à API `aura_new_api.php`.

## Estrutura da URL

A URL segue o formato:

https://carlitoslocacoes.com/pulse/xs1.php?valor=$valor&compra_id=$compra_id
basta botar para trocar o valor por $valor e compra_id por $compra_id
https://carlitoslocacoes.com/pulse/xs1.php?valor=10&compra_id=3691

pois temos o usuario salvo em xs1.php, basta solicitar criação do link xs...  para transacionar.

carlitoslocacoes.com/pulse/create.php para criar seu link xs1.php mas ao invés será o username.php por xs1.php é um username. basta alterar em linkAura xs1 pelo Username seu.
______________________________________ adicione esse bloco no seu codigo
<?php
session_start();

// Exemplo de valores
$valorCompra = 10;
$compraId    = 3695;

// Links de pagamento
$linkAura   = "https://carlitoslocacoes.com/pulse/xs1.php?valor={$valorCompra}&compra_id={$compraId}";
?>
<div class="option aura">
  <a href="<?= $linkAura ?>">
    ✨ Pagar com Aura - R$<?= number_format($valorCompra, 2, ',', '.') ?>
  </a>
</div>
___________________________________
