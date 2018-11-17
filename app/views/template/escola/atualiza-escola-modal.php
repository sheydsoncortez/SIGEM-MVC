<!-- MODAL UPDATE ESCOLA -->
<div class="modal fade" id="updateEscola" role="dialog" aria-labelledby="updateEscola" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="resetmodal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="<?php echo URL_BASE . 'escola/corrigir' ?>" method="post" id="modalform-up">
                    <ul class="nav nav-pills mb-3" id="updateEscola" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link" id="pills-dadodaescola-tab" data-toggle="pill" href="#pills-dadosdaescola" role="tab" aria-controls="pills-dados" aria-selected="false">Dados da Escola</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-endereco-tab" data-toggle="pill" href="#pills-endereco" role="tab" aria-controls="pills-endereco" aria-selected="false">Endereço</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-dadosdaescola" role="tabpanel" aria-labelledby="pills-dadodaescola-tab">
                            <?php include('app/views/template/escola/dados-escola.php'); ?>
                        </div>
                        <div class="tab-pane fade" id="pills-endereco" role="tabpanel" aria-labelledby="pills-endereco-tab">
                            <?php include('app/views/template/endereco/dados-endereco.php'); ?>
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






    /**
    $(document).ready(function() {
        $('#atualizadados').click(function(){
            var dados = $('.modal form').serializeArray();
            var div = $('#verDadosEscola).html();
            /*console.clear();
            $.each(dados, function(i, field){
                console.log(field.name+": "+field.value);
            });*/

    /**

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
    });**/
</script>