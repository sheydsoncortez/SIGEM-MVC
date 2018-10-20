<section class="forms offset-sm-1">
    <div class="container-fluid">

        <header>
            <h1 class="h3 display">Editar informações do Funcionário</h1>
        </header>

        <div class="col-lg-12" >
            <div class="card ">

                <div class="card-body">

                    <!-- INÍCIO DO FORM -->

                    <form class='form-horizontal' id='formfuncionario' method='POST'
                          action="<?php echo URL_BASE . "funcionario/salvar/".$page;?>" >

                        <br/><p id="cabecalho_blocos_form">DADOS DO FUNCIONÁRIO</p>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->nome_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Data de Nasc:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->datanasc_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cidade de Nasc:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->cidadenasc_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado de Nasc:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->ufnasc_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->nomepai_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Nome da Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->nomemae_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Sexo:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->sexo_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado Civil:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->estadocivil_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Telefone:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->telefone_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Email:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->email_fun}</label>";?>
                                </div>

                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDadosPessoais" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/><p id="cabecalho_blocos_form">ENDEREÇO</p>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cep:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->endereco->cep_end}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Cidade:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->endereco->cidade_end}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Logradouro:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->endereco->logradouro_end}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Número:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->endereco->numero_end}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Bairro:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->endereco->bairro_end}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->endereco->estado_end}</label>";?>
                                </div>

                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirEndereco" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/><p id="cabecalho_blocos_form">DOCUMENTOS</p>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cpf:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->cpf_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Pis/Pasep:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->pispasep_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Número Ctps:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->ctps->numero_car}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Série Ctps:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->ctps->serie_car}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Número Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->rg->numero_rg}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Orgão Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->rg->orgaoexp_rg}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Data Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->rg->dataexp_rg}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->rg->ufexp_rg}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Núm. Título Eleitor:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->titulo->numero_tit}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Zona Eleitoral:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->titulo->zona_tit}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Seção Eleitoral:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->titulo->secao_tit}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Núm. Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->reservista->numero_res}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cat. Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->reservista->categoria_res}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label lista-dados ">Série Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->reservista->serie_res}</label>";?>
                                </div>
                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDocumentos" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/><p id="cabecalho_blocos_form">DADOS FUNCIONAIS</p>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Matrícula:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->matricula_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Data Admissão:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->dataadmissao_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Escolaridade:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->escolaridade_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Form. Acadêmica:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->formacaoacademica_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Ano Conclusão:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->anoconclusao_fun}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Cargo:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->cargo_fun}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Função:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->funcao_fun}</label>";?>
                                </div>

                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDadosFuncionais" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-5 offset-sm-1">
                                <a href="<?php echo URL_BASE; ?>">
                                    <button type="button" class="btn btn-secondary" >Cancelar</button>
                                </a>
                                <a href="<?php echo URL_BASE . "funcionario/corrigir" ;?>">
                                    <button type="button" class="btn btn-primary" >Salvar</button>
                                </a>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
</section>

