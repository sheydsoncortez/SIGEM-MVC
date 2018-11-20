<!-- MODAL UPDATE TURMA -->
<div class="modal fade" id="updateTurma" role="dialog" aria-labelledby="updateTurma" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="resetmodal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" action="<?php echo URL_BASE . 'turma/corrigir' ?>" method="post" id="modalform-up-e">
                    <ul class="nav nav-pills mb-3" id="updateTurma" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link" id="pills-dadodaturma-tab" data-toggle="pill" href="#pills-dadosdaturma" role="tab" aria-controls="pills-dados" aria-selected="false">Dados da Turma</a>
                        </li>
                    

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-dadosdaturma" role="tabpanel" aria-labelledby="pills-dadodaturma-tab">
                            <?php include('app/views/template/turma/dados-turma.php'); ?>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button id="resetmodal_e" type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                <button id="atualizadados_e" type="submit" class="btn btn-success" >Atualizar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $("button#resetmodal_e").on('click', function () {
        location.reload();
    });

    $("button#atualizadados_e").on('click', function () {
       // alert($("form#modalform-up-e").attr('action'));
        $("form#modalform-up-e").submit();
    });

</script>