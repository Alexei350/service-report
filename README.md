# LPWeb1

Projeto simples para um trabalho da disciplina de Linguagens de Programação Web desenvolvido usando PHP e framework Bootstrap

# Configuração

1. Primeiramente acesse a pasta `database` e rode o arquivo `dbprojeto.sql` para criar o banco de dados.

1. Após isto acesse a pasta `connection` e crie um arquivo com a estrutura abaixo, inserindo dentro das tags as respectivas configurações do servidor que contém o banco de dados criado: 

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

1. (Opcional) Crie uma pasta `.vscode` e dentro dela crie um arquivo `setting.json` para que determinados arquivos e pastas não sejam mostrados no Visual Studio Code. Exemplo:

```
{
    "files.exclude": {
        ".vscode":true,
        "**/*.md": true,
        ".gitignore": true
    }
}
```
