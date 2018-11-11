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

                <div class="card-body" id="verDadosDisciplina">

                    <!-- INÍCIO DO FORM -->

                   <form class='form-horizontal' id='formfuncionario' method='POST'
                          action="<?php echo URL_BASE . "disciplina/salvar/".$page;?>" >

                       <br/>

                       <p style="padding-top: 50px" id="cabecalho_blocos_form">DADOS DA DISCIPLINA</p>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-12" >
                                <?php if(isset($d->codigo)) echo " 
                                <div class='row list-background'>
                                    <strong class='col-sm-3 form-control-label'>Código da Disciplina</strong>
                                    <label class='form-control-label lista-dados'>{$d->codigo}</label>
                                </div>"?>

                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Nome da Disciplina</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$d->nome}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Código do Professor</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$d->professor}</label>";?>
                                </div>
                                <div class="row">
                                    <strong class="col-sm-3 form-control-label">Código da Turma</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$d->turma}</label>";?>
                                </div>
                                <div class="row list-background">
                                    <strong class="col-sm-3 form-control-label">Código da Série</strong>
                                    <?php echo "<label class='form-control-label lista-dados'>{$d->serie}</label>";?>
                                </div>


                                <!-- BOTÃO CORRIGIR DADOS-->
                                <div class="line"></div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button id="corrigirDadosDisciplina" type='button' class='btn btn-warning corrigir'><strong>Corrigir</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-5 offset-sm-1">
                                <a href="<?php echo URL_BASE . "disciplina/listar"; ?>">
                                    <button type="button" class="btn btn-secondary" >Cancelar</button>
                                </a>
                                <a href="<?php echo URL_BASE . "disciplina/salvar/2" ;?>">
                                    <button type="button" class="btn btn-primary" >Salvar</button>
                                </a>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
</section>