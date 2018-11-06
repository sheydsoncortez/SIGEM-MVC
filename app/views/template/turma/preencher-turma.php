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
                <input type="text" placeholder="Preencher turma" id="preencherTurma" name="preencher"
                       value="<?php isset($f) ? print($f->nomeTurma) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha a Turma")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>
        </div>
    </div>
</div>