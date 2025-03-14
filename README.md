# Estruturas Condicionais em PHP - IF dentro de IF e SWITCH CASE

Este repositório apresenta exemplos e explicações sobre estruturas condicionais `if dentro de if` e `switch case` em PHP, juntamente com um pequeno projeto prático para demonstrar seu uso.

## Estrutura do IF dentro de outro IF
A estrutura `if` dentro de `if` permite a criação de verificações aninhadas, onde um bloco de código só será executado se ambas as condições forem atendidas.

### Sintaxe:
```php
if (condicao1) {
    if (condicao2) {
        // Código a ser executado se ambas as condições forem verdadeiras
    }
}
```

### Exemplo:
```php
$pagamento = "A PRAZO";
$n_prestacao = 5;

if ($pagamento == "A PRAZO") {
    if ($n_prestacao <= 4) {
        echo "Juros de 10%";
    } else {
        echo "Juros de 20%";
    }
}
```

Se `$pagamento` for igual a **A PRAZO** e `$n_prestacao` for menor ou igual a 4, o sistema aplicará **10% de juros**. Caso contrário, aplicará **20% de juros**.

## Estrutura do SWITCH CASE
A estrutura `switch case` é utilizada quando temos uma variável que pode assumir vários valores diferentes, permitindo simplificar múltiplas verificações `if`.

### Sintaxe:
```php
switch ($variavel) {
    case "valor1":
        // Código a ser executado se $variavel for igual a "valor1"
        break;
    case "valor2":
        // Código a ser executado se $variavel for igual a "valor2"
        break;
    default:
        // Código a ser executado se nenhum dos valores anteriores for correspondente
}
```

### Exemplo:
```php
$cidade = "SÃO PAULO";

switch ($cidade) {
    case "MOCOCA":
        echo "É Mocoquence";
        break;
    case "SÃO PAULO":
        echo "É Paulista";
        break;
    default:
        echo "Cidade não identificada";
}
```

## Projeto Prático
Este repositório inclui um pequeno sistema onde o usuário seleciona um nível de dificuldade e recebe uma resposta correspondente.

### Arquivos:
- `index.php`: Formulário HTML que envia um nível de dificuldade para `calcular.php`.
- `calcular.php`: Processa os dados e exibe uma resposta usando `switch case`.

### Como usar
1. Abra `index.php` em um servidor local.
2. Escolha um nível de dificuldade e envie o formulário.
3. Veja o resultado exibido em `calcular.php`.

Este exemplo prático reforça o aprendizado sobre `if dentro de if` e `switch case` em PHP!

## Exercícios
1. Faça um programa de uma lanchonete, onde o usuário informa seu nome e escolhe um lanche do seguinte menu:
   - 1 – X Burguer (R$6,00)
   - 2 – X Salada (R$8,00)
   - 3 – X Bacon (R$10,00)
   - 4 – X Tudo (R$12,00)
   - 5 – X Duplo (R$15,00)
   
   Depois, pergunte quantos lanches deseja comprar e exiba um menu de bebidas:
   - 1 – Água (R$2,00)
   - 2 – Suco (R$5,00)
   - 3 – Lata (R$3,00)
   - 4 – 600 ml (R$5,00)
   - 5 – 2 Litros (R$8,00)
   
   O programa deve calcular o valor total e exibir o nome do usuário com o total consumido.

2. Faça um programa semelhante, mas para outro tipo de comércio.

3. Faça um programa onde o usuário informa o total gasto em uma compra e escolhe a forma de pagamento:
   - **À vista**: 10% de desconto.
   - **A prazo**: Perguntar o número de parcelas:
     - Até 3x: Sem juros.
     - De 4 a 6x: 10% de juros.
     - Acima de 6x: 20% de juros.
   
   O programa deve calcular e exibir o valor final da compra com o acréscimo de juros, se houver, e o valor de cada parcela.