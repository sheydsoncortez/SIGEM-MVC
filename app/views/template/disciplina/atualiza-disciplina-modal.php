<!-- MODAL UPDATE DISCIPLINA -->
        <div class="modal fade" id="updateDisciplina" role="dialog" aria-labelledby="updateDisciplina" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form id="updateDisciplina" method="POST" action="">
                    <div class="modal-body">

                        <ul class="nav nav-pills mb-3" id="updateDisciplina" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-dadospessoais-tab" data-toggle="pill" href="#pills-dadospessoais" role="tab" aria-controls="pills-dadospessoais" aria-selected="true">Dados Pessoais</a>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button id="atualizadados" type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<script type="text/javascript">

    $(document).ready(function() {
        $('#atualizadados').click(function(){
            var dados = $('.modal form').serializeArray();
            var div = $('#verDadosDisciplina').html();
            /*console.clear();
            $.each(dados, function(i, field){
                console.log(field.name+": "+field.value);
            });*/

            $.ajax({
                type: "POST",
                url: URL_BASE_JQ + $('.modal form').attr('action'),
                data: dados, // serializes the form's elements.
                success: function(data)
                {
                    //$('body').load(location.href);
                }
            });
        });
    });
</script>