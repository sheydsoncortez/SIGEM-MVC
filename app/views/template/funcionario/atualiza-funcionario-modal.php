<!-- MODAL UPDATE FUNCIONARIO -->
        <div class="modal fade" id="updateFuncionario" role="dialog" aria-labelledby="updateFuncionario" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="resetmodal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="<?php echo URL_BASE . 'funcionario/corrigir' ?>" method="post" id="modalform-up">
                        <ul class="nav nav-pills mb-3" id="updateFuncionario" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-dadospessoais-tab" data-toggle="pill" href="#pills-dadospessoais" role="tab" aria-controls="pills-dadospessoais" aria-selected="true">Dados Pessoais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-endereco-tab" data-toggle="pill" href="#pills-endereco" role="tab" aria-controls="pills-endereco" aria-selected="false">Endereço</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-documentos-tab" data-toggle="pill" href="#pills-documentos" role="tab" aria-controls="pills-documentos" aria-selected="false">Documentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-dadosfuncionais-tab" data-toggle="pill" href="#pills-dadosfuncionais" role="tab" aria-controls="pills-dadosfuncionais" aria-selected="false">Dados Funcionais</a>
                            </li>
                        </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade" id="pills-dadospessoais" role="tabpanel" aria-labelledby="pills-dadospessoais-tab">
                                    <?php include('app/views/template/funcionario/dados-funcionario.php'); ?>
                                </div>
                                <div class="tab-pane fade" id="pills-endereco" role="tabpanel" aria-labelledby="pills-endereco-tab">
                                    <?php include('app/views/template/endereco/dados-endereco.php'); ?>
                                </div>
                                <div class="tab-pane fade" id="pills-documentos" role="tabpanel" aria-labelledby="pills-documentos-tab">
                                    <?php include('app/views/template/funcionario/documentos-funcionario.php'); ?>
                                </div>
                                <div class="tab-pane fade" id="pills-dadosfuncionais" role="tabpanel" aria-labelledby="pills-dadosfuncionais-tab">
                                    <?php include('app/views/template/funcionario/dados-funcionais.php'); ?>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button id="resetmodal" type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button id="atualizadados" type="submit" class="btn btn-success" >Atualizar</button>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
    /*function form_submit(e) {
        document.getElementById("modalform-up").submit();
        e.preventDefault();
    }*/

    $("button#resetmodal").on('click', function () {
        location.reload();
    });
    $("button#atualizadados").on('click', function () {

        //var dados = $("form#modalform-up").serializeArray();

        /*$.ajax({
           type: "POST",
           url: $("form#modalform-up").attr('action'),
           data:  dados,

           success: function(){
               console.clear();
               $.each(dados, function(i, field){
                   console.log(field.name+": "+field.value);
               });

           }
        });*/
        $("form#modalform-up").submit();
        //location.reload();
    });
</script>
