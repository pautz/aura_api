# API de Pagamentos em Aura

Este projeto permite realizar pagamentos em **Aura** através de URLs simples que geram QR Codes e se conectam à API `aura_new_api.php`.

---

## 🚀 Estrutura da URL

A URL segue o formato:

https://carlitoslocacoes.com/pulse/xs1.php?valor=$valor&compra_id=$compra_id

- Substitua **`$valor`** pelo valor da compra.  
- Substitua **`$compra_id`** pelo identificador da compra.  

Exemplo:

https://carlitoslocacoes.com/pulse/xs1.php?valor=10&compra_id=3691


---

## 🔑 Observações Importantes

- O **usuário** já está salvo dentro do arquivo `xs1.php`.  
- Para criar novos links de pagamento, utilize:
https://carlitoslocacoes.com/pulse/create.php

chave_extra:xs2_portal_extra

Esse endpoint gera o arquivo `xs1.php`.  
Na prática, cada usuário terá seu próprio arquivo `username.php` (ex.: `carlitoslocacoes.com/pulse/carlito.php`).  
Portanto, basta alterar no link `xs1` para o **username** correspondente.

carlitoslocacoes.com/pulse/carlito.php?valor=$valor&compra_id=$compra_id
---

## 📦 Integração no Carrinho

Adicione o seguinte bloco de código na sua página do carrinho:

```php
<?php
session_start();

// Exemplo de valores
$valorCompra = 10;
$compraId    = 3695;

// Link de pagamento Aura (ajuste xs1 para o username do usuário)
$linkAura   = "https://carlitoslocacoes.com/pulse/xs1.php?valor={$valorCompra}&compra_id={$compraId}";
?>
<div class="option aura">
  <a href="<?= $linkAura ?>">
    ✨ Pagar com Aura - R$<?= number_format($valorCompra, 2, ',', '.') ?>
  </a>
</div>
