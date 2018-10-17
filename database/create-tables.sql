

CREATE TABLE "public".carteira_profissional ( 
	numero_car           varchar(20)  NOT NULL ,
	serie_car            varchar(20)  NOT NULL ,
	CONSTRAINT pk_carteira_profissional_numero_car PRIMARY KEY ( numero_car )
 );

CREATE TABLE "public".endereco ( 
	codigo_end           varchar(16)  NOT NULL ,
	cep_end              varchar(10)  NOT NULL ,
	cidade_end           varchar(100)  NOT NULL ,
	logradouro_end       varchar(150)  NOT NULL ,
	numero_end           varchar(20)  NOT NULL ,
	bairro_end           varchar(100)  NOT NULL ,
	estado_end           varchar(50)  NOT NULL ,
	CONSTRAINT pk_endereco_codigo_end PRIMARY KEY ( codigo_end )
 );

CREATE TABLE "public".reservista ( 
	numero_res           varchar(15)  NOT NULL ,
	categoria_res        varchar(20)  NOT NULL ,
	serie_res            char(2)  NOT NULL ,
	CONSTRAINT pk_reservista_numero_res PRIMARY KEY ( numero_res )
 );

CREATE TABLE "public".rg ( 
	numero_rg            varchar(16)  NOT NULL ,
	orgaoexp_rg          varchar(16)  NOT NULL ,
	dataexp_rg           date  NOT NULL ,
	ufexp_rg             char(3)  NOT NULL ,
	CONSTRAINT pk_rg_numero_rg PRIMARY KEY ( numero_rg )
 );

CREATE TABLE "public".titulo_eleitoral ( 
	numero_tit           varchar(20)  NOT NULL ,
	zona_tit             integer  NOT NULL ,
	secao_tit            integer  NOT NULL ,
	CONSTRAINT pk_titulo_eleitoral_numero_tit PRIMARY KEY ( numero_tit )
 );

CREATE TABLE "public".funcionario ( 
	cpf_fun              varchar(16)  NOT NULL ,
	nome_fun             varchar(150)  NOT NULL ,
	datanasc_fun         date  NOT NULL ,
	cidadenasc_fun       varchar(100)  NOT NULL ,
	ufnasc_fun           varchar(40)  NOT NULL ,
	nomepai_fun          varchar(150)  NOT NULL ,
	nomemae_fun          varchar(150)  NOT NULL ,
	sexo_fun             char(3)  NOT NULL ,
	estadocivil_fun      varchar(20)  NOT NULL ,
	telefone_fun         varchar(16)  NOT NULL ,
	email_fun            varchar(100)  NOT NULL ,
	pispasep_fun         varchar(20)  NOT NULL ,
	matricula_fun        varchar(20)  NOT NULL ,
	dataadmissao_fun     date  NOT NULL ,
	escolaridade_fun     varchar(35)  NOT NULL ,
	formacaoacademica_fun varchar(100)  NOT NULL ,
	anoconclusao_fun     integer  NOT NULL ,
	cargo_fun            varchar(50)  NOT NULL ,
	funcao_fun           varchar(100)  NOT NULL ,
	endereco_fun         varchar(16)   ,
	carteiraprof_fun     varchar(20)  NOT NULL ,
	rg_fun               varchar(16)   ,
	tituloeleitor_fun    varchar(20)  NOT NULL ,
	reservista_fun       varchar(15)  NOT NULL ,
	senha_fun            varchar(200)  NOT NULL ,
	CONSTRAINT pk_funcionario_cpf_fun PRIMARY KEY ( cpf_fun )
 );

CREATE INDEX idx_funcionario_endereco_fun ON "public".funcionario ( endereco_fun );

CREATE INDEX idx_funcionario_carteiraprof_fun ON "public".funcionario ( carteiraprof_fun );

CREATE INDEX idx_funcionario_rg_fun ON "public".funcionario ( rg_fun );

CREATE INDEX idx_funcionario_tituloeleitor_fun ON "public".funcionario ( tituloeleitor_fun );

CREATE INDEX idx_funcionario_reservista_fun ON "public".funcionario ( reservista_fun );

COMMENT ON COLUMN "public".funcionario.endereco_fun IS 'Código do endereço (CPF funcionario) - Chave estrangeira para entidade Endereco';

COMMENT ON COLUMN "public".funcionario.carteiraprof_fun IS 'Número da carteira profissional - Chave estrangeira para entidade Carteira Profissional';

COMMENT ON COLUMN "public".funcionario.rg_fun IS 'Número do RG - Chave estrangeira para entidade RG';

COMMENT ON COLUMN "public".funcionario.tituloeleitor_fun IS 'Número do título eleitoral - Chave estrangeira para entidade Título Eleitoral';

COMMENT ON COLUMN "public".funcionario.reservista_fun IS 'Número da reservista - Chave estrangeira para entidade Reservista';

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_endereco FOREIGN KEY ( endereco_fun ) REFERENCES "public".endereco( codigo_end );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_carteiraprof FOREIGN KEY ( carteiraprof_fun ) REFERENCES "public".carteira_profissional( numero_car );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_rg FOREIGN KEY ( rg_fun ) REFERENCES "public".rg( numero_rg );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_tituloeleitoral FOREIGN KEY ( tituloeleitor_fun ) REFERENCES "public".titulo_eleitoral( numero_tit );

ALTER TABLE "public".funcionario ADD CONSTRAINT fk_funcionario_reservista FOREIGN KEY ( reservista_fun ) REFERENCES "public".reservista( numero_res );
