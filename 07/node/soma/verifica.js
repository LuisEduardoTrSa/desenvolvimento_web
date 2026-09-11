// npm init -y instala o pacote do json
// npm install express instala os modulos do json
// Express define a rota
// node nome_do_arquivo.js roda o arquivo
// Linha de comando roda antes da linha de funcionalidade
const express = require('express');
const app = express();
const path = require('path');

const PORT = process.env.PORT || 3001;
// || significa ou
app.listen(PORT,() => console.log(`Servidor rodando na porta ${PORT}`));
console.log('Servidor rodando com sucesso!');