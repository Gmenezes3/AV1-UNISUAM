# Avaliação Formadora I 2025.2  
## UNISUAM Campus Bangu [BG-ADS0201N]

---

Este projeto foi desenvolvido como parte da disciplina **Programação Backend com PHP** do curso de Análise e Desenvolvimento de Sistemas da UNISUAM.

## Descrição

O sistema consiste em um formulário web para cálculo da média final de um aluno, utilizando PHP no backend. O usuário informa o nome, número de matrícula e duas notas. O resultado exibe a média calculada e a situação do aluno: **Aprovado**, **Recuperação** ou **Reprovado**.

## Funcionalidades

- Formulário responsivo para entrada dos dados do aluno.
- Cálculo automático da média das notas.
- Exibição da situação do aluno conforme a média:
  - **Aprovado** (média ≥ 7)
  - **Recuperação** (4 ≤ média < 7)
  - **Reprovado** (média < 4)
- Botão para retornar ao formulário após o resultado.

## Estrutura do Projeto

- [`index.html`](index.html): Página principal com o formulário.
- [`resultado.php`](resultado.php): Script PHP que processa os dados e exibe o resultado.
- [`styles.css`](styles.css): Estilos para layout e responsividade.
- [`README.md`](README.md): Documentação do projeto.

## Como Executar

1. Clone este repositório.
2. Coloque os arquivos em um servidor local com suporte a PHP (ex: XAMPP, WAMP).
3. Acesse `index.html` pelo navegador.
4. Preencha o formulário e envie para visualizar o resultado.

## Exemplo de Uso

1. Informe o nome do aluno, matrícula e notas.
2. Clique em **Calcular**.
3. Veja o resultado com a média e situação do aluno.
4. Utilize o botão **Voltar** para realizar novos cálculos.

## Tecnologias Utilizadas

- HTML5
- CSS3
- PHP 7+

## Autor

Jorge  
UNISUAM Campus Bangu  
Disciplina: Programação Backend

