-- INSERT ENDEREÇO
INSERT INTO public.endereco(
	codigo_end, cep_end, cidade_end, logradouro_end, numero_end, bairro_end, estado_end)
	VALUES ('000.000.000-00', '59300-000', 'Caicó', 'Av. Coronel Martiniano', 'S/N', 'Centro', 'RN');

-- INSERT CARTEIRA PROFFISSIONAL	
INSERT INTO public.carteira_profissional(
	numero_car, serie_car)
	VALUES ('000000', '0000');

-- INSERT RG
INSERT INTO public.rg(
	numero_rg, orgaoexp_rg, dataexp_rg, ufexp_rg)
	VALUES ('0000000', 'SSP', '01-01-2018', 'AC');

-- INSERT TÍTULO ELEITOR
INSERT INTO public.titulo_eleitoral(
	numero_tit, zona_tit, secao_tit)
	VALUES ('00000000', 0, 0);

-- INSERT RESERVISTA
INSERT INTO public.reservista(
	numero_res, categoria_res, serie_res)
	VALUES ('000000000', 'CAT','S');

-- INSERT CARTEIRA FUNCIONÁRIO
INSERT INTO public.funcionario(
	cpf_fun, nome_fun, datanasc_fun, cidadenasc_fun, ufnasc_fun, nomepai_fun, 
    nomemae_fun, sexo_fun, estadocivil_fun, telefone_fun, email_fun, pispasep_fun, 
    matricula_fun, dataadmissao_fun, escolaridade_fun, formacaoacademica_fun, 
    anoconclusao_fun, cargo_fun, funcao_fun, endereco_fun, carteiraprof_fun, rg_fun, 
    tituloeleitor_fun, reservista_fun, senha_fun)
	VALUES 
    ('000.000.000-00', 'Administrador', '01-01-2018', 'Sem cidade', 'AC', 'Sem pai', 'Sem mãe', 
    'M', '0', '(00)00000-0000', 'admin@sigem.com', '000000000', 'admin', '01-01-2018',
    'Ensino superior', 'Sem formação', 2018, 'Administrador', 'Administrador do sistema', 
    '000.000.000-00', '000000', '0000000', '00000000', '000000000', md5('admin'));