<?php if (isset($_SESSION['turma'])) {
    $t = $_SESSION['turma'];
}
?>

<section class="forms offset-sm-1" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">

        <header>
            <h1 class="h3 display">EDITAR DADOS DA TURMA</h1>
        </header>

        <div class="col-lg-12" >
            <div class="card ">

                <div class="card-body" id="verDadosTurma">

                    <!-- INÍCIO DO FORM -->

                   <form class='form-horizontal' id='formturma' method='POST'
                          action="<?php echo URL_BASE . "turma/salvar/".$page;?>" >

                       <br/>

                       <p style="padding-top: 50px" id="cabecalho_blocos_form">DADOS DA TURMA</p>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12" >
                                <div class='row list-background'>
                                    <strong class="col-sm-3 form-control-label">Série</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$t->serie}</label>";?>
                                </div>"?

                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Classe</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$t->classe}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Ano</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$t->ano}</label>";?>
                                </div>


                                <!-- BOTÃO CORRIGIR DADOS-->
                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDadosTurma" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-5 offset-sm-1">
                                <a href="<?php echo URL_BASE . "turma/listar"; ?>">
                                    <button type="button" class="btn btn-secondary" >Cancelar</button>
                                </a>
                                <a href="<?php echo URL_BASE . "turma/salvar/4" ;?>">
                                    <button type="button" class="btn btn-primary" >Salvar</button>
                                </a>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
</section>