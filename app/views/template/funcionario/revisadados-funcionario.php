<br/><p id="cabecalho_blocos_form">DADOS DO FUNCIONÁRIO</p>
<div class="line"></div>             
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Nome:</strong>            
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getNome()}</label>";?>                                            
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Data de Nasc:</strong>            
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDataNasc()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Cidade de Nasc:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getCidadeNasc()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Estado de Nasc:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEstadoNasc()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Nome do Pai:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getNomePai()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Nome da Mãe:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getNomeMae()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Sexo:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getSexo()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Estado Civil:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEstadoCivil()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Telefone:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getTelefone()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Email:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEmail()}</label>";?>                              
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
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEndereco()->getCep()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Cidade:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEndereco()->getCidade()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Logradouro:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEndereco()->getLogradouro()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Número:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEndereco()->getNumero()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Bairro:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEndereco()->getBairro()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Estado:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getEndereco()->getUfEndereco()}</label>";?>                              
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
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getCpf()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Pis/Pasep:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getPisPasep()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Número Ctps:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getCtps()->getNumeroCtps()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Série Ctps:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getCtps()->getSerieCtps()}</label>";?>                              
         </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Número Rg:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getRg()->getNumeroRg()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Orgão Exp. Rg:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getRg()->getOrgaoExpRg()}</label>";?>                                
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Data Exp. Rg:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getRg()->getDataExpRg()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Estado Exp. Rg:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getRg()->getUfExpRg()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Núm. Título Eleitor:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getTituloEleitoral()->getNumeroTit()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Zona Eleitoral:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getTituloEleitoral()->getZonaTit()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Seção Eleitoral:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getTituloEleitoral()->getSecaoTit()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Núm. Reservista:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getReservista()->getNumeroRes()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Cat. Reservista:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getReservista()->getCategoriaRes()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label lista-dados ">Série Reservista:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDocumentos()->getReservista()->getSerieRes()}</label>";?>                              
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
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDadosFuncionais()->getMatriculaFun()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Data Admissão:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDadosFuncionais()->getDataAdmissaoFun()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Escolaridade:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDadosFuncionais()->getEscolaridadeFun()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Form. Acadêmica:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDadosFuncionais()->getFormacaoAcademicaFun()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Ano Conclusão:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDadosFuncionais()->getAnoConclusaoFun()}</label>";?>                              
        </div>
        <div class="row">
            <strong class="col-sm-3 form-control-label">Cargo:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDadosFuncionais()->getCargoFun()}</label>";?>                              
        </div>
        <div class="row list-background">
            <strong class="col-sm-3 form-control-label">Função:</strong>
            <?php echo "<label class='form-control-label lista-dados'>{$_SESSION['funcionario']->getDadosFuncionais()->getFuncaoFun()}</label>";?>                                          
        </div> 

        <div class="line"></div>   
        <div class="row">
            <div class="col-sm-2">
                <button id="corrigirDadosFuncionais" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>                    
            </div>
        </div>
    </div>
</div>