<p align="center">
  <a href="http://ant.design">
    <img width="800" src="https://i.pinimg.com/originals/c7/4c/f3/c74cf3a50dcb214e091cc7393d1cac99.png">
  </a>
</p>

<h1 align="center"> XPSecLab </h1>

<div align="center">
  Este ambiente foi criado para que nossos alunos possam simular alguns testes de penetração em um ambiente virtual e simulado antes de partir para o mundo real, aqui você tem vários níveis em vários tipos de vulnerabilidades, dentre elas:
  
      Command Execution
      SQL Injection
      XSS
      File Inclusion (LFI & RFI)
      File Upload

</div>

## 🔨 Iniciando

Para instalar é bem simples, vamos lá! :)

1) Baixe todo o conteúdo do XPSec Lab;
2) Abra um terminal *no mesmo diretório dos arquivos* e inicie um servidor PHP: <br/> 
`php -S 127.0.0.1:80`
3) Inicie um servidor de MySql: <br/> 
`service mysql start`
4) Acesse o seu IP e portas configuradas no servidor PHP: <br/> 
http://127.0.0.1:80
5) Clique no botão "SETUP" e pronto! :)

Caso você possua [docker](https://docs.docker.com/get-docker/):
1) Caso não possua, instale o [docker-compose](https://docs.docker.com/compose/install/)
2) Suba a aplicação inteira usando: <br/>
`docker-compose up`
3) Acesse o seu IP e portas configuradas no servidor PHP: <br/> 
   http://127.0.0.1:80

TREINAMENTO COMPLETO GRATUITO: <br/> 
https://www.youtube.com/playlist?list=PLM9tXXhPL5JPWa0AfvorJfex1Fr6KoIgr

-XPSec Security Team

## ⌨️ Desenvolvimento

Use Gitpod, um ambiente de desenvolvimento livre para o github

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/xpsecsecurity/XPSec-Lab.git)

ou clone localmente usando:

```bash
$ git clone https://github.com/xpsecsecurity/XPSec-Lab.git
$ cd XPSec-Lab/
```

## 🤝 Contributing!

Sinta-se livre para contribuir usando:  

[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)