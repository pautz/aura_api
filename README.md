# API de Pagamentos em Aura

Este projeto permite realizar pagamentos em **Aura** através de URLs simples que geram QR Codes e se conectam à API `aura_new_api.php`.

## Estrutura da URL

A URL segue o formato:

https://carlitoslocacoes.com/pulse/xs1.php?valor=$valor&compra_id=$compra_id
basta botar para trocar o valor por $valor e compra_id por $compra_id
https://carlitoslocacoes.com/pulse/xs1.php?valor=10&compra_id=3691

pois temos o usuario salvo em xs1.php, basta solicitar criação do link xs...  para transacionar.


utilize https://carlitoslocacoes.com/pulse/create.php para criar para o seu usuario
