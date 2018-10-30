<?php if (isset($_SESSION['turma'])){
    $f = $_SESSION['turma'];
    $date = new DateTime($f->datanasc); $nd = $date->format('d/m/Y');
}?>

<!-- NOME DA TURMA -->
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Nome da Turma" id="nomeTurma" name="nome"
                       value="<?php isset($f) ? print($f->nomeTurma) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o campo nome da Turma")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>
        </div>
    </div>
</div>