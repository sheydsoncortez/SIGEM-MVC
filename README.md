# SIGEM-MVC
![](img/logo.png)
# Sistema de Gerenciamento Estudantil Municipal.  
![](https://img.shields.io/badge/php-v7-green.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/css-v3-blue.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/html-v5-orange.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/jQuery-v3.3.1-blue.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/javascript-developer-pink.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/Bootstrap-v4-purple.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/PostgreSQL-v10-blue.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/ViaCep-API-green.svg?longCache=true&style=flat-square) ![](https://img.shields.io/badge/BootstrapDatapicker-v1.6.4-purple.svg?longCache=true&style=flat-square)

## Sumário
- [Descrição do Sistema](https://github.com/emancos/SIGEM#descrição-do-sistema)
- [Motivação](https://github.com/emancos/SIGEM#motivação)
- [Tecnologias utilizadas](https://github.com/emancos/SIGEM#tecnologias-utilizadas)
	- [Front End](https://github.com/emancos/SIGEM#front-end)
	- [Back End](https://github.com/emancos/SIGEM#back-end)
	- [Banco de dados](https://github.com/emancos/SIGEM#banco-de-dados)
- [Como executar](https://github.com/emancos/SIGEM#como-executar)
	- [Instalação XAMPP](https://github.com/emancos/SIGEM#instalação-xampp)
	- [Instalação PostgreSQL](https://github.com/emancos/SIGEM#instalação-postgresql)
	- [Habilitar PostgreSQL XAMPP](https://github.com/emancos/SIGEM#habilitar-postgressql-xampp)
- [Equipe de desenvolvimento](https://github.com/emancos/SIGEM#equipe-de-desenvolvimento)

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

### Banco de dados
- PostgreSQL 10

---
## Como executar
Para o desenvolvimento e utilização do SIGEM foi utilizado o XAMPP(LAMPP no Linunx e MAMP no Mac) que é um pacote com os principais servidores de código aberto do mercado, incluindo FTP, banco de dados MySQL e Apache com suporte as linguagens PHP e Perl.
### Instalação XAMPP:
- [Windows](https://www.webucator.com/how-to/how-install-start-test-xampp-on-windows-setup-of-introduction-php.cfm).
- [Linux (LAPP)](https://hectorgarciaperez.wordpress.com/2012/02/22/instalar-un-servidor-lapp-linux-apache-postgresql-php-en-debian-6/).
- [Mac OS (MAMP)](https://www.webucator.com/how-to/how-install-start-test-xampp-on-mac-osx.cfm).

### Instalação PostgreSQL:
- [Windows and Linux](http://www.techken.in/linux/install-postgresql-10-windows-10-linux/).
- [Mac OS](https://coolestguidesontheplanet.com/installing-postgresql-database-os-x-10-9-mavericks-configure-phppgadmin/).
### Habilitar PostgresSQL XAMPP:
- [Windows](https://santiagobambui.wordpress.com/2013/02/06/ativando-o-postgresql-no-xampp/).
- [linux(LAMPP)](http://desarrollomaya.blogspot.com/2013/04/preparar-apache-de-xampp-para-acceder.html)
- [Mac OS (MAMP)](https://stackoverflow.com/questions/26003058/how-to-enable-postgresql-in-xampp-on-mac-os).

git clone https://github.com/emancos/SIGEM.git na pasta htdocs do xampp.  
Execute o Script SQL abaixo no pgAdmin do PostgreSQL e acesse a pagina do sistema:  
localhost/SIGEM.  
Efetue login usando o usuário "admin" e senha "admin".
```sql
-- Table: public.login_teste

-- DROP TABLE public.login_teste;

CREATE TABLE public.login_teste
(
    login character varying(50) COLLATE pg_catalog."default" NOT NULL,
    senha character varying(100) COLLATE pg_catalog."default" NOT NULL,
    nome character varying(100) COLLATE pg_catalog."default",
    funcao character varying(100) COLLATE pg_catalog."default",
    CONSTRAINT login_teste_pkey PRIMARY KEY (login)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.login_teste
    OWNER to postgres;
	
-- INSERT USER	
INSERT INTO public.login_teste(
	login, senha, nome, funcao)
	VALUES ('admin', 'admin', 'Administrador', 'Administrador do sistemas');
```
## Equipe de desenvolvimento
Nome|email
------------------------------|-----------------------------------
André Gouveia Gurgel | andreggurgelufrn@gmail.com
Emanuel Costa da Silva | emancos@gmail.com
Henrique Hipólito Dantas | henriquehipolitodantas@gmail.com
Michael Angelo Alves da Silva | mikmichel@gmail.com
Sheydson Carlos Santos Cortez | sheydsoncortez@gmail.com

