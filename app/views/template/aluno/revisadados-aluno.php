<?php if (isset($_SESSION['aluno'])) {
    $a = $_SESSION['aluno'];
} 
?>

<section class="forms offset-sm-1" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">

        <header>
            <h1 class="h3 display">Editar informações do Aluno</h1>
        </header>

        <div class="col-lg-12" >
            <div class="card ">

                <div class="card-body" id="verDadosAluno">

                    <!-- INÍCIO DO FORM -->

                   <form class='form-horizontal' id='formaluno' method='POST'
                          action="<?php echo URL_BASE . "aluno/salvar/".$page;?>" >

                       <br/>

                       <p style="padding-top: 50px" id="cabecalho_blocos_form">DADOS DO ALUNO</p>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12" >
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->nomeAluno}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Matrícula:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->matriculaAluno}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Data de Nasc:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->dataNascAluno}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Cidade de Nascimento:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->cidadeNascAluno}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Estado de Nascimento:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->estadonasc}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Sexo:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->sexoAluno}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cor/raça:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->corAluno}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">O aluno possui deficiencia?</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->pcdAluno}</label>";?>
                                </div>

                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDadosPessoais" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/><p id="cabecalho_blocos_form">FILIAÇÃO</p>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->nomePaiAluno}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Profissão do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->profissaoPai}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Número Rg do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgPaiAluno->numero}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Orgão Exp. Rg do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgPaiAluno->orgaoexp}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Data Exp. Rg do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgPaiAluno->dataexp}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado Exp. Rg do Pai:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgPaiAluno->ufexp}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome do Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->nomePaiAluno}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Profissão do Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->profissaoPai}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Número Rg do Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgMaeAluno->numero}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Orgão Exp. Rg do Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgMaeAluno->orgaoexp}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Data Exp. Rg do Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgMaeAluno->dataexp}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado Exp. Rg do Mãe:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->filiacaoAluno->rgMaeAluno->ufexp}</label>";?>
                                </div>

                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirEndereco" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/><p id="cabecalho_blocos_form">DOCUMENTOS DO ALUNO</p>
                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Número Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->rg->numero}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Orgão Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->rg->orgaoexp}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Data Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->rg->dataexp}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado Exp. Rg:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->rg->ufexp}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Núm. Título Eleitor:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->tituloEleitoral->numero}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Zona Eleitoral:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->tituloEleitoral->zona}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Seção Eleitoral:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->tituloEleitoral->secao}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Núm. Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->reservista->numero}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cat. Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->reservista->categoria}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label lista-dados ">Série Reservista:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->reservista->serie}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Nome do Cartório:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->registroNascimento->cartorio}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Número do Registro:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->registroNascimento->numeroRegistro}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Livro:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->registroNascimento->livro}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Folha:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->registroNascimento->folha}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Cidade do Cartorio:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->registroNascimento->cidade}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Estado do Cartorio:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->registroNascimento->uf}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Data Registro:</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$a->documentosAluno->registroNascimento->data}</label>";?>
                                </div>
                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDocumentos" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-5 offset-sm-1">
                                <a href="<?php echo URL_BASE . "funcionario/listar"; ?>">
                                    <button type="button" class="btn btn-secondary" >Cancelar</button>
                                </a>
                                <a href="<?php echo URL_BASE . "funcionario/corrigir" ;?>">
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