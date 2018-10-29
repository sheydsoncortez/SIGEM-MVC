<?php if (isset($_SESSION['disciplina'])){
    $f = $_SESSION['disciplina'];
    $date = new DateTime($f->datanasc); $nd = $date->format('d/m/Y');
}?>

<!-- CÓDIGO DA DISCIPLINA -->
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

<!-- NOME DA DISCIPLINA -->

    <div class="col-sm-12">
        <div class="row">

            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Nome da Disciplina" id="nomeDisciplina" name="nomeDisciplina"
                       value="<?php isset($f) ? print($f->nomeDisciplina) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o campo nome da disciplina")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>

        </div>
    </div>

<!-- CÓDIGO DO PROFESSOR -->
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Código do Professor" id="codigoProfessor" name="codigoProfessor"
                       value="<?php isset($f) ? print($f->codigoProfessor) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o Campo Código do Professor")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>
        </div>
    </div>

<!-- CÓDIGO DA TURMA -->
    <div class="col-sm-12">
        <div class="row">

            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Código da Turma" id="codigoTurma" name="codigoTurma"
                       value="<?php isset($f) ? print($f->codigoTurma) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o Campo Código da Turma")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>

        </div>
    </div>

<!-- CÓDIGO DA SÉRIE -->
    <div class="col-sm-12">
        <div class="row">

            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-8">
                <input type="text" placeholder="Código da Série" id="codigoSerie" name="codigoSerie"
                       value="<?php isset($f) ? print($f->codigoSerie) : "" ?>"
                       required oninvalid="this.setCustomValidity("Preencha o Campo Código da Série")"
                oninput="setCustomValidity("")" class="form-control"/>
            </div>

        </div>
    </div>
</div>



