# Aplicação simples para cadastro e usuários

Aplicação simples que realiza um cadastro básico de usuários. 

Após o cadastro, o usuário recebe um link único para indicação de cadastro de outros usuários.

Quando um determinado usuário se cadastra a partir de um link único de outro, a base de dados guarda a informação que foi uma “indicação” e qual usuário indicou.

A página é responsiva (Mobile first).

Após o cadastro inicial o usuário recebe um email de confirmação de cadastro.

Quando um usuário se cadastra a partir de um convite, ele recebe o email de confirmação de cadastro e o dono do link recebe um email de aviso.

A aplicação foi desenvolvida com o framework Vue.js.

O backend está disponível [neste repositório](https://github.com/waliqueiroz/conversao-back).

## 1. Pré-requisitos

- [NPM](https://www.npmjs.com/get-npm)

## 2. Baixar dependências

Dentro do diretório raiz execute o comando:

```
npm install
```

## 3. Inicializar servidor de desenvolvimento

Dentro do diretório raiz execute o comando:
```
npm run serve
```

## 4. Compilar versão para produção

Dentro do diretório raiz execute o comando:
```
npm run build
```
