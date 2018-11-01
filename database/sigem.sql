

CREATE TABLE "public".ctps ( 
	numero               varchar(20)  NOT NULL ,
	serie                varchar(20)  NOT NULL ,
	CONSTRAINT pk_carteira_profissional_numero_car PRIMARY KEY ( numero )
 );

CREATE TABLE "public".disciplina ( 
	codigo               bigint  NOT NULL ,
	nome                 varchar(50)  NOT NULL ,
	professor            integer  NOT NULL ,
	turma                integer  NOT NULL ,
	serie                varchar(5)  NOT NULL ,
	CONSTRAINT pk_disciplina_codigo PRIMARY KEY ( codigo )
 );

CREATE TABLE "public".endereco ( 
	codigo               varchar(16)  NOT NULL ,
	cep                  varchar(10)  NOT NULL ,
	cidade               varchar(100)  NOT NULL ,
	logradouro           varchar(150)  NOT NULL ,
	numero               varchar(20)  NOT NULL ,
	bairro               varchar(100)  NOT NULL ,
	estado               varchar(50)  NOT NULL ,
	CONSTRAINT pk_endereco_codigo_end PRIMARY KEY ( codigo )
 );

CREATE TABLE "public".escola ( 
	codigo               integer  NOT NULL ,
	nome                 varchar(255)  NOT NULL ,
	telefone             varchar(16)  NOT NULL ,
	email                varchar(150)  NOT NULL ,
	endereco             varchar(16)   ,
	CONSTRAINT pk_escola_codigo PRIMARY KEY ( codigo )
 );

CREATE INDEX idx_escola_endereco ON "public".escola ( endereco );

CREATE TABLE "public".reservista ( 
	numero               varchar(15)  NOT NULL ,
	categoria            varchar(20)  NOT NULL ,
	serie                char(2)  NOT NULL ,
	CONSTRAINT pk_reservista_numero_res PRIMARY KEY ( numero )
 );

CREATE TABLE "public".rg ( 
	numero               varchar(16)  NOT NULL ,
	orgaoexp             varchar(16)  NOT NULL ,
	dataexp              date  NOT NULL ,
	ufexp                char(3)  NOT NULL ,
	CONSTRAINT pk_rg_numero_rg PRIMARY KEY ( numero )
 );

CREATE TABLE "public".tituloeleitor ( 
	numero               varchar(20)  NOT NULL ,
	zona                 integer  NOT NULL ,
	secao                integer  NOT NULL ,
	CONSTRAINT pk_titulo_eleitoral_numero_tit PRIMARY KEY ( numero )
 );

CREATE TABLE "public".funcionario ( 
	cpf                  varchar(16)  NOT NULL ,
	nome                 varchar(150)  NOT NULL ,
	datanasc             date  NOT NULL ,
	cidadenasc           varchar(100)  NOT NULL ,
	estadonasc           varchar(40)  NOT NULL ,
	nomepai              varchar(150)  NOT NULL ,
	nomemae              varchar(150)  NOT NULL ,
	sexo                 char(3)  NOT NULL ,
	estadocivil          varchar(20)  NOT NULL ,
	telefone             varchar(16)  NOT NULL ,
	email                varchar(100)  NOT NULL ,
	pispasep             varchar(20)  NOT NULL ,
	matricula            varchar(20)  NOT NULL ,
	dataadmissao         date  NOT NULL ,
	escolaridade         varchar(35)  NOT NULL ,
	formacaoacademica    varchar(100)  NOT NULL ,
	anoconclusao         integer  NOT NULL ,
	cargo                varchar(50)  NOT NULL ,
	funcao               varchar(100)  NOT NULL ,
	endereco             varchar(16)   ,
	ctps                 varchar(20)  NOT NULL ,
	rg                   varchar(16)   ,
	tituloeleitor        varchar(20)  NOT NULL ,
	reservista           varchar(15)   ,
	senha                varchar(200)  NOT NULL ,
	escola               varchar(20)   ,
	ativo                bool   ,
	CONSTRAINT pk_funcionario_cpf_fun PRIMARY KEY ( cpf )
 );

CREATE INDEX idx_funcionario_carteiraprof_fun ON "public".funcionario ( ctps );

CREATE INDEX idx_funcionario_endereco_fun ON "public".funcionario ( endereco );

CREATE INDEX idx_funcionario_reservista_fun ON "public".funcionario ( reservista );

CREATE INDEX idx_funcionario_rg_fun ON "public".funcionario ( rg );

CREATE INDEX idx_funcionario_tituloeleitor_fun ON "public".funcionario ( tituloeleitor );

COMMENT ON COLUMN "public".funcionario.endereco IS 'Código do endereço (CPF funcionario) - Chave estrangeira para entidade Endereco';

COMMENT ON COLUMN "public".funcionario.ctps IS 'Número da carteira profissional - Chave estrangeira para entidade Carteira Profissional';

COMMENT ON COLUMN "public".funcionario.rg IS 'Número do RG - Chave estrangeira para entidade RG';

COMMENT ON COLUMN "public".funcionario.tituloeleitor IS 'Número do título eleitoral - Chave estrangeira para entidade Título Eleitoral';

COMMENT ON COLUMN "public".funcionario.reservista IS 'Número da reservista - Chave estrangeira para entidade Reservista';

ALTER TABLE "public".escola ADD CONSTRAINT fk_escola_endereco FOREIGN KEY ( endereco ) REFERENCES "public".endereco( codigo );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_carteiraprof FOREIGN KEY ( ctps ) REFERENCES "public".ctps( numero );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_endereco FOREIGN KEY ( endereco ) REFERENCES "public".endereco( codigo );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_reservista FOREIGN KEY ( reservista ) REFERENCES "public".reservista( numero );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_rg FOREIGN KEY ( rg ) REFERENCES "public".rg( numero );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_tituloeleitoral FOREIGN KEY ( tituloeleitor ) REFERENCES "public".tituloeleitor( numero );
