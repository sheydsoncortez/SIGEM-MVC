INSERT INTO "public".ctps( numero, serie ) VALUES ( '000000', '0000' );
INSERT INTO "public".ctps( numero, serie ) VALUES ( '34535656', '4554' ); 
INSERT INTO "public".ctps( numero, serie ) VALUES ( '987654321', '00012' ); 
INSERT INTO "public".ctps( numero, serie ) VALUES ( '54333434334', '00015' ); 

INSERT INTO "public".endereco( codigo, cep, cidade, logradouro, numero, bairro, estado ) VALUES ( '000.000.000-00', '59300-000', 'Caicó', 'Av. Coronel Martiniano', 'S/N', 'Centro', 'RN' ); 
INSERT INTO "public".endereco( codigo, cep, cidade, logradouro, numero, bairro, estado ) VALUES ( '123.123.123-12', '59010-015', 'Natal', 'Rua Miramar', '10', 'Praia do Meio', '' ); 
INSERT INTO "public".endereco( codigo, cep, cidade, logradouro, numero, bairro, estado ) VALUES ( '026.898.294-52', '59300-000', 'Caicó', 'Rua Esperidião Elói de Medeiros', '131', 'João XXIII', 'RN' ); 
INSERT INTO "public".endereco( codigo, cep, cidade, logradouro, numero, bairro, estado ) VALUES ( '968.543.333-33', '59300-000', 'Caicó', 'Rua Padre Inácio', '06A', 'Paulo XI', 'RN' ); 

INSERT INTO "public".reservista( numero, categoria, serie ) VALUES ( '87654321', '8777', 'M ' ); 
INSERT INTO "public".reservista( numero, categoria, serie ) VALUES ( '000000000', '000000000', '0 ' ); 

INSERT INTO "public".rg( numero, orgaoexp, dataexp, ufexp ) VALUES ( '0000000', 'SSP', '2018-01-01', 'AC ' ); 
INSERT INTO "public".rg( numero, orgaoexp, dataexp, ufexp ) VALUES ( '1669132', 'SSP', '2018-10-23', 'RN ' ); 
INSERT INTO "public".rg( numero, orgaoexp, dataexp, ufexp ) VALUES ( '65487759393', 'SSP', '2005-10-05', 'RN ' ); 
INSERT INTO "public".rg( numero, orgaoexp, dataexp, ufexp ) VALUES ( '339973936', 'ITEP', '2002-10-20', 'RN ' ); 

INSERT INTO "public".tituloeleitor( numero, zona, secao ) VALUES ( '00000000', 0, 0 ); 
INSERT INTO "public".tituloeleitor( numero, zona, secao ) VALUES ( '09987654', 8, 45 ); 
INSERT INTO "public".tituloeleitor( numero, zona, secao ) VALUES ( '161743616143', 25, 12 ); 
INSERT INTO "public".tituloeleitor( numero, zona, secao ) VALUES ( '54237283372828', 34, 23 );

-- INSERTS ESCOLA
INSERT INTO "public".escola( codigo, nome, telefone, email, endereco ) VALUES ( 1, 'teste', '(00)00000-0000', 'escola@teste.com', '000.000.000-00' );
INSERT INTO "public".escola( codigo, nome, telefone, email, endereco ) VALUES ( 2, 'Escola 2', '(11)11111-1111', 'escola2t@teste.com', '123.123.123-12' );
INSERT INTO "public".escola( codigo, nome, telefone, email, endereco ) VALUES ( 3, 'Escola 3', '(22)22222-2222', 'escola3@teste.com', '026.898.294-52' );

-- INSERTS DISCIPLINAS
INSERT INTO "public".disciplina( codigo, nome, professor, turma, serie ) VALUES ( 3, 'Gestão de Projetos', 2147483647, 144, '22' );
INSERT INTO "public".disciplina( codigo, nome, professor, turma, serie ) VALUES ( 4, 'PV', 0, 2345678, '123' );

-- INSERTS FUNIONÁRIO
INSERT INTO "public".funcionario( cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, ctps, rg, tituloeleitor, reservista, senha, escola, ativo ) VALUES ( '000.000.000-00', 'Administrador', '2018-01-01', 'Sem cidade', 'AC ', 'Sem pai', 'Sem mãe', 'M  ', '0', '(00)00000-0000', 'admin@sigem.com', '000000000', 'admin', '2018-01-01', 'Ensino superior', 'Sem formação', 2018, 'Administrador', 'Administrador do sistema', '000.000.000-00', '000000', '0000000', '00000000', '000000000', '21232f297a57a5a743894a0e4a801fc3', '24032239', '0' ); 
INSERT INTO "public".funcionario( cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, ctps, rg, tituloeleitor, reservista, senha, escola, ativo ) VALUES ( '026.898.294-52', 'Sueide Maria de Medeiros', '1977-05-16', 'Caicó', 'RN ', 'José Pereira Dantas', 'Otaciana Otacília de Medeiros', 'F  ', 'Solteiro(a)', '(84)00417-3564', 'sememail@email.email', '123.11112.22.2', '12.173/1', '2018-10-23', 'Ensino médio', '-', 2004, 'Auxiliar de Serviços Gerais', 'ASG', '026.898.294-52', '987654321', '1669132', '161743616143', '000000000', '27d81fcd15e2dcf8ada0b82ee9b1a3e5', '24032239', '1' ); 
INSERT INTO "public".funcionario( cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, ctps, rg, tituloeleitor, reservista, senha, escola, ativo ) VALUES ( '968.543.333-33', 'Socorro', '1982-07-24', 'Catolé do Rocha', 'PB', 'Daniel Pereira', 'Maria Ferreira', 'F  ', 'Solteiro(a)', '(66)66666-6666', 'teste@teste.com', '121.35352.72.3', '12.922/1', '2002-03-01', 'Ensino superior', 'Pedagogia', 2018, 'Professor(a)', 'Vice Diretora', '968.543.333-33', '54333434334', '65487759393', '54237283372828', '000000000', '30c53cd88e0f2106b1471b4841803c38', '24032239', '1' ); 
INSERT INTO "public".funcionario( cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, ctps, rg, tituloeleitor, reservista, senha, escola, ativo ) VALUES ( '123.123.123-12', 'Emanuel Costa', '1986-11-30', 'Caicó', 'RN ', 'Manoel', 'Maria', 'M  ', 'Solteiro(a)', '(84)90000-0000', 'emancos@gmail.com', '123.12312.31.2', '12121212', '2013-06-26', 'Ensino médio', '-', 2004, 'Auxiliar de Serviços Gerais', 'ASG', '123.123.123-12', '34535656', '339973936', '09987654', '87654321', 'd89ca9451043b1b65f4a70646c9b24c6', '24032239', '1' ); 
