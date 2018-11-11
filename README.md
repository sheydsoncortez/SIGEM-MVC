# SIGEM-MVC
![](img/logo.png)
# Sistema de Gerenciamento Estudantil Municipal.  
![](https://img.shields.io/badge/php-v7-green.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/css-v3-blue.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/html-v5-orange.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/jQuery-v3.3.1-blue.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/javascript-developer-pink.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/Bootstrap-v4-purple.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/PostgreSQL-v10-blue.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/ViaCep-API-green.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/BootstrapDatapicker-v1.6.4-purple.svg?longCache=true&style=flat-square)

## Sumário
- [Descrição do Sistema](https://github.com/emancos/SIGEM-MVC#descrição-do-sistema)
- [Motivação](https://github.com/emancos/SIGEM-MVC#motivação)
- [Tecnologias utilizadas](https://github.com/emancos/SIGEM-MVC#tecnologias-utilizadas)
	- [Front End](https://github.com/emancos/SIGEM-MVC#front-end)
	- [Back End](https://github.com/emancos/SIGEM-MVC#back-end)
	- [Banco de dados](https://github.com/emancos/SIGEM-MVC#banco-de-dados)
- [Peparar o ambiente](https://github.com/emancos/SIGEM-MVC#preparar-o-ambiente)
    - [Instalação Composer](https://github.com/emancos/SIGEM-MVC#instalação-composer)
	- [Instalação XAMPP](https://github.com/emancos/SIGEM-MVC#instalação-xampp)
	- [Instalação PostgreSQL](https://github.com/emancos/SIGEM-MVC#instalação-postgresql)
	- [Habilitar PostgreSQL XAMPP](https://github.com/emancos/SIGEM-MVC#habilitar-postgressql-xampp)
- [Executar o projeto](https://github.com/emancos/SIGEM-MVC#executar-o-projeto)
- [Equipe de desenvolvimento](https://github.com/emancos/SIGEM-MVC#equipe-de-desenvolvimento)

---

## Descrição do sistema
O SIGEM é um projeto direcionado ao auxílio na execução das tarefas do dia a dia na gestão das escolas do município de Caicó - RN, ajudando os profissionais de educação a executar tarefas de forma eficiente.
Sua finalidade é atender as necessidades específicas de gerenciamento de frequência, notas e outros aspectos que dizem respeito a gestão da escola, dos alunos e seus diferentes níveis de escolarização.

---
## Motivação
O sistema será desenvolvido como projeto da disciplina de Gestão e Projeto de Software do curso de Sitema de Informção da UFRN/CERES Campus Caicó-RN.

---
## Tecnologias utilizadas.
### Front End
- HTML5. 
- CSS3.
- JQuery.
- JavaSript.  
- Bootstrap 4.
- [Bootstrap-datepicker](https://bootstrap-datepicker.readthedocs.io/en/latest/)
- [ViaCEP JQuery](https://viacep.com.br/exemplo/jquery/)

### Back End
- PHP 7

### Gerenciador de dependências para PHP 
- Composer

### Banco de dados
- PostgreSQL 10

---
## Peparar o ambiente
Para o desenvolvimento e utilização do SIGEM foi utilizado o XAMPP(LAMPP no Linunx e MAMP no Mac) que é um pacote com os principais servidores de código aberto do mercado, incluindo FTP, banco de dados MySQL e Apache com suporte as linguagens PHP e Perl.
### Instalação Composer:
- [Windows](https://getcomposer.org/doc/00-intro.md#installation-windows).
- [Linux](https://www.hostinger.com/tutorials/how-to-install-composer#gref).
- [Mac OS](https://medium.com/@felipefranco_22418/instalando-o-composer-no-macos-sierra-10-13-5d761ba3092b).

### Instalação XAMPP:
- [Windows](https://www.webucator.com/how-to/how-install-start-test-xampp-on-windows-setup-of-introduction-php.cfm).
- [Linux (LAPP)](https://hectorgarciaperez.wordpress.com/2012/02/22/instalar-un-servidor-lapp-linux-apache-postgresql-php-en-debian-6/).
- [Mac OS (MAMP)](https://www.webucator.com/how-to/how-install-start-test-xampp-on-mac-osx.cfm).

### Instalação PostgreSQL:
- [Windows and Linux](http://www.techken.in/linux/install-postgresql-10-windows-10-linux/).
- [Mac OS](https://coolestguidesontheplant.com/installing-postgresql-database-os-x-10-9-mavericks-configure-phppgadmin/).

### Habilitar PostgresSQL XAMPP:
- [Windows](https://santiagobambui.wordpress.com/2013/02/06/ativando-o-postgresql-no-xampp/).
- [linux(LAMPP)](http://desarrollomaya.blogspot.com/2013/04/preparar-apache-de-xampp-para-acceder.html)
- [Mac OS (MAMP)](https://stackoverflow.com/questions/26003058/how-to-enable-postgresql-in-xampp-on-mac-os).

### Executar o projeto:
git clone https://github.com/emancos/SIGEM-MVC-MVC.git na pasta htdocs do xampp.  
Execute os Scripts SQL contidos na pasta 'database' na raís do projeto no pgAdmin do PostgreSQL e acessar a pagina do sistema:  
localhost/SIGEM-MVC.
Usar o login e usuário padrão:
- Usuário: admin
- Senha: admin

## Equipe de desenvolvimento
Nome|email
------------------------------|-----------------------------------
André Gouveia Gurgel | andreggurgelufrn@gmail.com
Emanuel Costa da Silva | emancos@gmail.com
Henrique Hipólito Dantas | henriquehipolitodantas@gmail.com
Michael Angelo Alves da Silva | mikmichel@gmail.com
Sheydson Carlos Santos Cortez | sheydsoncortez@gmail.com

