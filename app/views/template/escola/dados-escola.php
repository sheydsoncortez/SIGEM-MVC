<?php
/**
 * Created by PhpStorm.
 * User: mikmichel
 * Date: 30/10/2018
 * Time: 11:06
 */

 if (isset($_SESSION['escola'])){
    $f = $_SESSION['escola'];
}?>

<!-- CÓDIGO DA ESCOLA -->
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Código da Escola" id="codigoEscola" name="codigo"
                       value="<?php isset($f) ? print($f->codigo) : "" ?>"
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
                       value="<?php isset($f) ? print($f->nome) : "" ?>"
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
                       value="<?php isset($f) ? print($f->telefone) : ""?>"
                       oninvalid="this.setCustomValidity('Informe um número para contato')"
                       oninput="setCustomValidity('')"/>
            </div>
            <!-- EMAIL DA ESCOLA -->
            <div class="col-sm-4">
                <input type="email" placeholder="Email: login@provedor.com" class="form-control"
                       value="<?php isset($f) ? print($f->email) : ""?>"
                       required oninvalid="this.setCustomValidity('Insira um email válido')"
                       oninput="setCustomValidity('')" name="email"/>
            </div>
        </div>
    </div>

</div>
<?php unset($f) ?>