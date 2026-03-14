<?php
session_start();

// Exemplo de valores
$valorCompra = 10;
$compraId    = 3695;
$usernameaura = "carlitopautz_farolqr";

// Link de pagamento Aura (ajuste xs1 para o username do usuário)
$linkAura   = "https://carlitoslocacoes.com/pulse/{$usernameaura}.php?valor={$valorCompra}&compra_id={$compraId}";
?>
<div class="option aura">
  <a href="<?= $linkAura ?>">
    ✨ Pagar com Aura - R$<?= number_format($valorCompra, 2, ',', '.') ?>
  </a>
</div>
