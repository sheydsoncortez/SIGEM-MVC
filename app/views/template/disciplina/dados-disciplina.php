<?php if (isset($_SESSION['disciplina'])){
    $f = $_SESSION['disciplina'];
    $date = new DateTime($f->datanasc); $nd = $date->format('d/m/Y');
}?>

<!-- CADASTRO DE DISCIPLINA -->
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Código da Disciplina" id="codigoDisciplina" name="codigoDisciplina"
                       value="<?php isset($f) ? print($f->codigoDisciplina) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o campo código da disciplina")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>
        </div>
    </div>
</div>



