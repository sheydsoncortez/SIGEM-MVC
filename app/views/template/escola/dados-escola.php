<?php

 if (isset($_SESSION['escola'])){
    $e = $_SESSION['escola'];
}?>

<!-- CÓDIGO DA ESCOLA -->
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Código da Escola" id="codigoEscola" name="codigo"
                       value="<?php isset($e) ? print($e->codigo) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o campo código da Escola")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>
        </div>
    </div>

<!-- NOME DA ESCOLA -->

    <div class="col-sm-12">
        <div class="row">

            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Nome da Escola" id="nomeEscola" name="nome"
                       value="<?php isset($e) ? print($e->nome) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o campo nome da disciplina")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>

        </div>
    </div>

                        <!-- DADOS DE CONTATO -->

    <!-- TELEFONE DA ESCOLA -->
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-3">
                <input type="text" placeholder="Telefone: (00)00000-0000"
                       class="form-control" id="telefone" name="telefone" required
                       value="<?php isset($e) ? print($e->telefone) : ""?>"
                       oninvalid="this.setCustomValidity('Informe um número para contato')"
                       oninput="setCustomValidity('')"/>
            </div>
            <!-- EMAIL DA ESCOLA -->
            <div class="col-sm-4">
                <input type="email" placeholder="Email: login@provedor.com" class="form-control"
                       value="<?php isset($e) ? print($e->email) : ""?>"
                       required oninvalid="this.setCustomValidity('Insira um email válido')"
                       oninput="setCustomValidity('')" name="email"/>
            </div>
        </div>
    </div>

</div>
<?php unset($e) ?>