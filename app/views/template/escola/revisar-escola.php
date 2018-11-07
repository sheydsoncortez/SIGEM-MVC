<?php if (isset($_SESSION['disciplina'])) {
    $d = $_SESSION['disciplina'];
}
?>

<section class="forms offset-sm-1" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">

        <header>
            <h1 class="h3 display">EDITAR DADOS DA DISCIPLINA</h1>
        </header>

        <div class="col-lg-12" >
            <div class="card ">

                <div class="card-body" id="verEscola">

                    <!-- INÍCIO DO FORM -->

                    <form class='form-horizontal' id='formfuncionario' method='POST'
                          action="<?php echo URL_BASE . "escola/salvar/".$page;?>" >

                        <br/>

                        <p style="padding-top: 50px" id="cabecalho_blocos_form">DADOS DA ESCOLA</p>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12" >
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Código da Escola</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$d->codigo}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Nome da Escola</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$d->nome}</label>";?>
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


                                <!-- BOTÃO CORRIGIR DADOS-->
                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDadosEscola" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-5 offset-sm-1">
                                <a href="<?php echo URL_BASE . "escola/listar"; ?>">
                                    <button type="button" class="btn btn-secondary" >Cancelar</button>
                                </a>
                                <a href="<?php echo URL_BASE . "escola/salvar/2" ;?>">
                                    <button type="button" class="btn btn-primary" >Salvar</button>
                                </a>

                            </div>
                        </div>
                </div>

            </div>

</section>