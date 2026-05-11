# appIMC — MVC simples (PHP)

## Estrutura

```
appIMC/
├── index.php          ← abra este arquivo no navegador (começa na splash)
├── config.php
├── app/
│   ├── IMC.php        ← Model (cálculo e classificação)
│   └── IMCController.php  ← Controller (rotas + validação + chama as views)
├── views/             ← telas (HTML)
└── assets/            ← css e imagens
```

## Como usar

URL de exemplo: `http://localhost/.../appIMC/index.php`

- Sem `?route=` → mostra a **splash** e redireciona para o formulário.
- `index.php?route=imc` → formulário de peso e altura.
- O formulário envia **POST** para `index.php?route=calcular` → tela de resultado.

Coloque os logos e a `tabelaimc.png` em `assets/img/` (nomes em `config.php`).
