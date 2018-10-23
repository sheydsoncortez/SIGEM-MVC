CREATE TABLE "public".ctps ( 
	numero               varchar(20)  NOT NULL ,
	serie                varchar(20)  NOT NULL ,
	CONSTRAINT pk_carteira_profissional_numero_car PRIMARY KEY ( numero )
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
	reservista           varchar(15)  NOT NULL ,
	senha                varchar(200)  NOT NULL ,
	escola               varchar(20)   ,
	ativo                bool   ,
	CONSTRAINT pk_funcionario_cpf_fun PRIMARY KEY ( cpf )
 );

CREATE INDEX idx_funcionario_endereco_fun ON "public".funcionario ( endereco );

CREATE INDEX idx_funcionario_carteiraprof_fun ON "public".funcionario ( ctps );

CREATE INDEX idx_funcionario_rg_fun ON "public".funcionario ( rg );

CREATE INDEX idx_funcionario_tituloeleitor_fun ON "public".funcionario ( tituloeleitor );

CREATE INDEX idx_funcionario_reservista_fun ON "public".funcionario ( reservista );

COMMENT ON COLUMN "public".funcionario.endereco IS 'Código do endereço (CPF funcionario) - Chave estrangeira para entidade Endereco';

COMMENT ON COLUMN "public".funcionario.ctps IS 'Número da carteira profissional - Chave estrangeira para entidade Carteira Profissional';

COMMENT ON COLUMN "public".funcionario.rg IS 'Número do RG - Chave estrangeira para entidade RG';

COMMENT ON COLUMN "public".funcionario.tituloeleitor IS 'Número do título eleitoral - Chave estrangeira para entidade Título Eleitoral';

COMMENT ON COLUMN "public".funcionario.reservista IS 'Número da reservista - Chave estrangeira para entidade Reservista';

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_endereco FOREIGN KEY ( endereco ) REFERENCES "public".endereco( codigo );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_carteiraprof FOREIGN KEY ( ctps ) REFERENCES "public".ctps( numero );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_rg FOREIGN KEY ( rg ) REFERENCES "public".rg( numero );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_tituloeleitoral FOREIGN KEY ( tituloeleitor ) REFERENCES "public".tituloeleitor( numero );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_reservista FOREIGN KEY ( reservista ) REFERENCES "public".reservista( numero );

INSERT INTO "public".ctps( numero, serie ) VALUES ( '000000', '0000' ); 
INSERT INTO "public".ctps( numero, serie ) VALUES ( '34535656', '4554' ); 

INSERT INTO "public".endereco( codigo, cep, cidade, logradouro, numero, bairro, estado ) VALUES ( '000.000.000-00', '59300-000', 'Caicó', 'Av. Coronel Martiniano', 'S/N', 'Centro', 'RN' ); 
INSERT INTO "public".endereco( codigo, cep, cidade, logradouro, numero, bairro, estado ) VALUES ( '123.123.123-12', '59010-015', 'Natal', 'Rua Miramar', '10', 'Praia do Meio', '' ); 

INSERT INTO "public".reservista( numero, categoria, serie ) VALUES ( '000000000', 'CAT', 'S ' ); 
INSERT INTO "public".reservista( numero, categoria, serie ) VALUES ( '87654321', '8777', 'M ' ); 

INSERT INTO "public".rg( numero, orgaoexp, dataexp, ufexp ) VALUES ( '0000000', 'SSP', '2018-01-01', 'AC ' ); 
INSERT INTO "public".rg( numero, orgaoexp, dataexp, ufexp ) VALUES ( '7344534543', 'ITEP', '2002-10-20', 'RN ' ); 

INSERT INTO "public".tituloeleitor( numero, zona, secao ) VALUES ( '00000000', 0, 0 ); 
INSERT INTO "public".tituloeleitor( numero, zona, secao ) VALUES ( '09987654', 8, 45 ); 

INSERT INTO "public".funcionario( cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, ctps, rg, tituloeleitor, reservista, senha, escola, ativo ) 
VALUES ( '000.000.000-00', 'Administrador', '2018-01-01', 'Sem cidade', 'AC ', 'Sem pai', 'Sem mãe', 'M  ', '0', '(00)00000-0000', 'admin@sigem.com', '000000000', 'admin', '2018-01-01', 'Ensino superior', 'Sem formação', 2018, 'Administrador', 'Administrador do sistema', '000.000.000-00', '000000', '0000000', '00000000', '000000000', '21232f297a57a5a743894a0e4a801fc3', '24032239', '0');
 
INSERT INTO "public".funcionario( cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, ctps, rg, tituloeleitor, reservista, senha, escola, ativo ) 
VALUES ( '123.123.123-12', 'Emanuel Costa', '1986-11-30', 'Caicó', 'RN ', 'Manoel', 'Maria', 'M  ', 'Solteiro(a)', '(84)90000-0000', 'emancos@gmail.com', '123.12312.31.2', '12121212', '2013-06-26', 'Ensino médio', '-', 2004, 'Auxiliar de Serviços Gerais', 'ASG', '123.123.123-12', '34535656', '7344534543', '09987654', '87654321', 'd89ca9451043b1b65f4a70646c9b24c6', '24032239', '1' ); 

