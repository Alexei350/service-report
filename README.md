# Service Report

Sistema Web de gerenciamento para prestação de serviços.

Projeto criado para a disciplina de Linguagem de Programação Web, desenvolvido usando PHP, e utilizando o Framework Bootstrap.

# Configuração

1. Primeiramente acesse a pasta `database` e rode o arquivo `db_projeto.sql` para criar o banco de dados.

2. Após isto acesse a pasta `connection` e crie um arquivo com a estrutura abaixo, inserindo dentro das tags as respectivas configurações do servidor que contém o banco de dados criado: 

```
<?xml version="1.0" standalone="yes"?>
<config>
    <host></host>
    <user></user>
    <password></password>
    <database></database>
    <port></port>
</config>
```

3. (Opcional) Para filtra as pastas e arquivos mostrados dentro do Visual Studio Code, crie uma pasta `.vscode` e dentro dela crie um arquivo `setting.json` com a seguinte estrutura, definindo o padrão de pastas e arquivos a serem ocultados. Exemplo:

```
{
    "files.exclude": {
        ".vscode":true,
        "**/*.md": true,
        ".gitignore": true
    }
}
```
