<?php   if (isset($_SESSION['funcionario'])) {
            $f = $_SESSION['funcionario'];
            if($f->foto != null){
                $imgfunc = $f->foto;
            }else{
                $imgfunc = URL_BASE . "assets/img/entidades/users.png";
            }
            //var_dump($f->foto); 
        } 
?>

<section class="forms offset-sm-1" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">

        <header>
            <h1 class="h3 display">Editar informações do Funcionário</h1>
        </header>

        <div class="col-lg-12" >
            <div class="card ">
                <span id="close_card" class="pull-left clickable close-icon" data-effect="fadeOut">
                    <div>

                    </div>
                </span>
                <div class="card-body" id="verDadosFuncionario">

                    <!-- INÍCIO DO FORM -->

                   <form class='form-horizontal' id='formfuncionario' method='POST' name="formfuncionario"
                          action="<?php echo URL_BASE . "funcionario/salvar/5";?>" >

                        <p class="topright" id="close_card" style="font-size: 18px">
                            <i class="fa fa-times" style="font-size: x-large; margin-right: 0px"></i>
                        </p>

                       <div class="col-sm-12" >
                           <div class="row">
                                    <span class="topright col-sm-3 offset-1" >
                                        <div class="row">
                                        <img src="<?php echo $imgfunc ?>"
                                             alt="person" class="img-fluid rounded-bottom rounded-top" height="130" width="110"  >
                                        </div>

                                        <div class="row">
                                            <a class="offset-sm-1" href="javascript:void(0);" id="alterarFotoFun"
                                               style="font-size: 14px">Alterar foto</a>
                                        </div>
                                    </span>

                           </div>
                       </div><br/>
                       <br/><br/><p style="padding-top: 50px; margin-top: 10px" id="cabecalho_blocos_form">DADOS DO FUNCIONÁRIO</p>

                        <div class="line"></div>
                        <div class="form-group row">

                            <div class="col-sm-12" >
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->nome}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Data de Nasc:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->datanasc}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cidade de Nasc:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->cidadenasc}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado de Nasc:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->estadonasc}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->nomepai}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Nome da Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->nomemae}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Sexo:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->sexo}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado Civil:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->estadocivil}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Telefone:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->telefone}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Email:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->email}</label>";?>
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
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->endereco->cep}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Cidade:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->endereco->cidade}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Logradouro:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->endereco->logradouro}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Número:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->endereco->numero}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Bairro:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->endereco->bairro}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->endereco->estado}</label>";?>
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
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->cpf}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Pis/Pasep:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->pispasep}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Número Ctps:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->ctps->numero}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Série Ctps:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->ctps->serie}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Número Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->rg->numero}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Orgão Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->rg->orgaoexp}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Data Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->rg->dataexp}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->rg->ufexp}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Núm. Título Eleitor:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->tituloeleitor->numero}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Zona Eleitoral:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->tituloeleitor->zona}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Seção Eleitoral:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->tituloeleitor->secao}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Núm. Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->reservista->numero}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cat. Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->reservista->categoria}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label lista-dados ">Série Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->documentos->reservista->serie}</label>";?>
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
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->dadosfuncionais->matricula}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Data Admissão:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->dadosfuncionais->dataadmissao}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Escolaridade:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->dadosfuncionais->escolaridade}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Form. Acadêmica:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->dadosfuncionais->formacaoacademica}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Ano Conclusão:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->dadosfuncionais->anoconclusao}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Cargo:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->dadosfuncionais->cargo}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Função:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$f->dadosfuncionais->funcao}</label>";?>
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
                                <a href="<?php echo URL_BASE . "funcionario/listar/ativos"; ?>">
                                    <button type="button" class="btn btn-secondary" >Cancelar</button>
                                </a>
                                <a href="<?php echo URL_BASE . "funcionario/salvar/5" ;?>">
                                    <button type="button" class="btn btn-primary" >Salvar</button>
                                </a>

                            </div>
                        </div>

                   </form>
                </div>
            </div>
        </div>
    </div>

</section>


